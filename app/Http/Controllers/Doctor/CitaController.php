<?php
namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Cita;
use App\Models\Paciente;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function index()
    {
        // Obtener el ID del doctor autenticado
        $doctorId = Auth::id();

        // Filtrar las citas por el doctor autenticado
        $citas = Cita::where('doctor_id', $doctorId)->with('paciente', 'hospital')->get();

        return view('doctor.cita.index', compact('citas'));
    }

    public function create()
    {
        // Obtener todos los pacientes para el formulario de creación de citas
        $pacientes = Paciente::all();
        return view('doctor.cita.create', compact('pacientes'));
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'paciente_id' => 'required|exists:pacientes,id',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'motivo' => 'required|string|max:255',
            'status' => 'required|in:pendiente,confirmada,atendida,cancelada',
        ]);

        // Creación de la cita
        Cita::create($request->all());

        return redirect()->route('doctor.cita.index')->with('success', 'Cita creada con éxito');
    }

    public function edit(Cita $cita)
    {
        // Obtener todos los pacientes para el formulario de edición de citas
        $pacientes = Paciente::all();
        return view('doctor.cita.edit', compact('cita', 'pacientes'));
    }

    public function update(Request $request, Cita $cita)
    {
        // Validación de datos
        $request->validate([
            'paciente_id' => 'required|exists:pacientes,id',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'motivo' => 'required|string|max:255',
            'status' => 'required|in:pendiente,confirmada,atendida,cancelada',
        ]);

        // Actualización de la cita
        $cita->update($request->all());

        return redirect()->route('doctor.cita.index')->with('success', 'Cita actualizada con éxito');
    }

    public function show(Cita $cita)
    {
        // Mostrar detalles de una cita específica
        return view('doctor.cita.show', compact('cita'));
    }

    public function destroy(Cita $cita)
    {
        // Eliminación de la cita
        $cita->delete();

        return redirect()->route('doctor.cita.index')->with('success', 'Cita eliminada con éxito');
    }
}
