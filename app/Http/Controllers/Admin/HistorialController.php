<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Historial;
use App\Models\Paciente;
use App\Models\Cita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HistorialController extends Controller
{
    public function index()
    {
        $historials = Historial::with(['paciente', 'cita'])->get();
        return view('admin.historial.index', compact('historials'));
    }

    public function create()
    {
        $pacientes = Paciente::all();
        $citas = Cita::all();
        return view('admin.historial.create', compact('pacientes', 'citas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'paciente_id' => 'required|exists:pacientes,id',
            'cita_id' => 'nullable|exists:citas,id',
            'fecha' => 'required|date',
            'descripcion' => 'required|string|max:5000',
            'documento' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('documento')) {
            $data['documento'] = $request->file('documento')->store('documentos_historial', 'public');
        }

        Historial::create($data);

        return redirect()->route('admin.historial.index')->with('success', 'Registro médico creado con éxito');
    }

    public function show(Historial $historial)
    {
        $historial->load('paciente', 'cita');
        return view('admin.historial.show', compact('historial'));
    }

    public function edit(Historial $historial)
    {
        $pacientes = Paciente::all();
        $citas = Cita::all();
        return view('admin.historial.edit', compact('historial', 'pacientes', 'citas'));
    }

    public function update(Request $request, Historial $historial)
    {
        $request->validate([
            'paciente_id' => 'required|exists:pacientes,id',
            'cita_id' => 'nullable|exists:citas,id',
            'fecha' => 'required|date',
            'descripcion' => 'required|string|max:5000',
            'documento' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('documento')) {
            if ($historial->documento) {
                Storage::delete($historial->documento);
            }
            $data['documento'] = $request->file('documento')->store('documentos_historial', 'public');
        }

        $historial->update($data);

        return redirect()->route('admin.historial.index')->with('success', 'Registro médico actualizado con éxito');
    }

    public function destroy(Historial $historial)
    {
        if ($historial->documento) {
            Storage::delete($historial->documento);
        }

        $historial->delete();

        return redirect()->route('admin.historial.index')->with('danger', 'Registro médico eliminado con éxito');
    }
}
