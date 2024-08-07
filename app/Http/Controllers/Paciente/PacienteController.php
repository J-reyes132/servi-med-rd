<?php
namespace App\Http\Controllers\Paciente;

use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cita;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PacienteController extends Controller
{
    public function index()
    {
        $citas = Cita::where('paciente_id', Auth::id())->get();
        return view('paciente.cita.index', compact('citas'));
    }

    public function create()
    {
        return view('paciente.cita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'hora' => 'required',
            'motivo' => 'required|string|max:255',
            'status' => 'required|string|in:pendiente,confirmada,atendida,cancelada',
        ]);

        Cita::create([
            'paciente_id' => Auth::id(),
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'motivo' => $request->motivo,
            'status' => $request->status,
        ]);

        return redirect()->route('paciente.citas.index')->with('success', 'Cita creada con éxito');
    }

    public function edit(Cita $cita)
    {
        $this->authorize('update', $cita);
        return view('paciente.cita.edit', compact('cita'));
    }

    public function update(Request $request, Cita $cita)
    {
        $this->authorize('update', $cita);

        $request->validate([
            'fecha' => 'required|date',
            'hora' => 'required',
            'motivo' => 'required|string|max:255',
            'status' => 'required|string|in:pendiente,confirmada,atendida,cancelada',
        ]);

        $cita->update($request->all());

        return redirect()->route('paciente.citas.index')->with('success', 'Cita actualizada con éxito');
    }

    public function destroy(Cita $cita)
    {
        $this->authorize('delete', $cita);

        $cita->delete();

        return redirect()->route('paciente.citas.index')->with('danger', 'Cita eliminada con éxito');
    }
}
