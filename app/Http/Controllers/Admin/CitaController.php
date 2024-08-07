<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Cita;
use App\Models\Horario;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CitaController extends Controller
{
    public function index()
    {
        $citas = Cita::with(['paciente', 'doctor', 'hospital'])->get();
        return view('admin.cita.index', compact('citas'));
    }

    public function create()
    {
        $pacientes = Paciente::all();
        $doctores = Doctor::all();
        $hospitales = Hospital::all();
        return view('admin.cita.create', compact('pacientes', 'doctores', 'hospitales'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'paciente_id' => 'required|exists:pacientes,id',
            'doctor_id' => 'required|exists:doctors,id',
            'hospital_id' => 'required|exists:hospitals,id',
            'fecha' => 'required|date|after_or_equal:today',
            'hora' => 'required|date_format:H:i',
            'motivo' => 'required|string|max:255',
            'status' => 'required|in:pendiente,confirmada,atendida,cancelada',
        ]);

        // Validar que el doctor esté disponible en ese horario en el hospital seleccionado
        $dayOfWeek = Carbon::parse($request->fecha)->format('l');
        $horarioDisponible = Horario::where('doctor_id', $request->doctor_id)
            ->where('hospital_id', $request->hospital_id)// Validar si el día está en el rango de días
            ->where('hora_inicio', '<=', $request->hora)
            ->where('hora_fin', '>=', $request->hora)
            ->exists();

        if (!$horarioDisponible) {
            return redirect()->back()->withErrors(['hora' => 'El doctor no está disponible en el horario seleccionado.'])->withInput();
        }

        Cita::create($request->all());

        return redirect()->route('admin.cita.index')->with('success', 'Cita creada con éxito');
    }

    public function show(Cita $cita)
    {
        $pacientes = Paciente::all();
        $doctores = Doctor::all();
        $hospitales = Hospital::all();
        return view('admin.cita.show', compact('cita'));
    }

    public function edit(Cita $cita)
    {
        $pacientes = Paciente::all();
        $doctores = Doctor::all();
        $hospitales = Hospital::all();
        return view('admin.cita.edit', compact('cita', 'pacientes', 'doctores', 'hospitales'));
    }

    public function update(Request $request, Cita $cita)
    {
        $request->validate([
            'paciente_id' => 'required|exists:pacientes,id',
            'doctor_id' => 'required|exists:doctors,id',
            'hospital_id' => 'required|exists:hospitals,id',
            'fecha' => 'required|date|after_or_equal:today',
            'hora' => 'required|date_format:H:i',
            'motivo' => 'required|string|max:255',
            'status' => 'required|in:pendiente,confirmada,atendida,cancelada',
        ]);

        // Validar que el doctor esté disponible en ese horario en el hospital seleccionado
        $horarioDisponible = Horario::where('doctor_id', $request->doctor_id)
            ->where('hospital_id', $request->hospital_id)
            ->where('day_of_week', Carbon::parse($request->fecha)->format('l'))
            ->where('hora_inicio', '<=', $request->hora)
            ->where('hora_fin', '>=', $request->hora)
            ->exists();

        if (!$horarioDisponible) {
            return redirect()->back()->withErrors(['hora' => 'El doctor no está disponible en el horario seleccionado.'])->withInput();
        }

        $cita->update($request->all());

        return redirect()->route('admin.cita.index')->with('success', 'Cita actualizada con éxito');
    }

    public function destroy(Cita $cita)
    {
        $cita->delete();

        return redirect()->route('admin.cita.index')->with('danger', 'Cita eliminada con éxito');
    }

    public function cancel(Cita $cita)
{
    $cita->update(['status' => 'cancelada']);
    return redirect()->route('admin.cita.index')->with('success', 'Cita cancelada con éxito');
}

public function approve(Cita $cita)
{
    $cita->update(['status' => 'confirmada']);
    return redirect()->route('admin.cita.index')->with('success', 'Cita aprobada con éxito');
}
}
