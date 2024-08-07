<?php
namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Historial;
use App\Models\Cita;
use Illuminate\Support\Facades\Auth;

class HistorialController extends Controller
{
    public function index()
    {
        // Obtener el ID del doctor autenticado
        $doctorId = Auth::id();

        // Filtrar los historiales a través de las citas asociadas al doctor autenticado
        $historiales = Historial::whereHas('cita', function ($query) use ($doctorId) {
            $query->where('doctor_id', $doctorId);
        })->get();

        return view('doctor.historial.index', compact('historiales'));
    }

    public function create()
    {
        $pacientes = Paciente::all(); // Podrías querer filtrar esto también
        return view('doctor.historial.create', compact('pacientes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'paciente_id' => 'required|exists:pacientes,id',
            'fecha' => 'required|date',
            'descripcion' => 'required|string',
            'documento' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
        ]);

        $data = $request->all();
        if ($request->hasFile('documento')) {
            $data['documento'] = $request->file('documento')->store('documentos_historial');
        }

        Historial::create($data);

        return redirect()->route('doctor.historial.index')->with('success', 'Historial creado con éxito');
    }

    public function edit(Historial $historial)
    {
        $this->authorize('update', $historial);

        $pacientes = Paciente::all();
        return view('doctor.historial.edit', compact('historial', 'pacientes'));
    }

    public function update(Request $request, Historial $historial)
    {
        $this->authorize('update', $historial);

        $request->validate([
            'paciente_id' => 'required|exists:pacientes,id',
            'fecha' => 'required|date',
            'descripcion' => 'required|string',
            'documento' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
        ]);

        $data = $request->all();
        if ($request->hasFile('documento')) {
            Storage::delete($historial->documento);
            $data['documento'] = $request->file('documento')->store('documentos_historial');
        }

        $historial->update($data);

        return redirect()->route('doctor.historial.index')->with('success', 'Historial actualizado con éxito');
    }

    public function destroy(Historial $historial)
    {
        $this->authorize('delete', $historial);

        Storage::delete($historial->documento);
        $historial->delete();

        return redirect()->route('doctor.historial.index')->with('success', 'Historial eliminado con éxito');
    }
}

