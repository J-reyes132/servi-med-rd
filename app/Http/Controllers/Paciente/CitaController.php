<?php

namespace App\Http\Controllers\Paciente;

use App\Http\Controllers\Controller;
use App\Models\Cita;
use App\Models\Doctor;
use App\Models\Horario;
use App\Models\Hospital;
use App\Models\Paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CitaController extends Controller
{
    public function index()
    {
        $citas = Cita::where('paciente_id', Auth::id())->get();
        return view('paciente.cita.index', compact('citas'));
    }

    public function create()
    {
        $doctores = Doctor::all();

        return view('paciente.cita.create', compact('doctores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'fecha' => 'required|date|after_or_equal:today',
            'hora' => 'required|date_format:H:i',
            'motivo' => 'required|string|max:255',
            'status' => 'required|in:pendiente,confirmada,atendida,cancelada',
        ]);


        $paciente = Paciente::where('user_id', Auth::id())->first();
        Cita::create([
            'paciente_id' => $paciente->id,
            'doctor_id' => $request->doctor_id,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'motivo' => $request->motivo,
            'status' => $request->status,
        ]);

        return redirect()->route('paciente.cita.index')->with('success', 'Cita creada con éxito');
    }

    public function show(Cita $cita)
    {
        $paciente = Paciente::where('user_id', Auth::id())->first();
        return view('paciente.cita.show', compact('cita', 'paciente'));
    }

    public function edit(Cita $cita)
    {
        $doctores = Doctor::all();
        return view('paciente.cita.edit', compact('cita', 'doctores'));
    }

    public function update(Request $request, Cita $cita)
    {
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'hospital_id' => 'required|exists:hospitals,id',
            'fecha' => 'required|date|after_or_equal:today',
            'hora' => 'required|date_format:H:i',
            'motivo' => 'required|string|max:255',
            'status' => 'required|in:pendiente,confirmada,atendida,cancelada',
        ]);

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

        return redirect()->route('paciente.cita.index')->with('success', 'Cita actualizada con éxito');
    }

    public function destroy(Cita $cita)
    {
        $cita->delete();
        return redirect()->route('paciente.cita.index')->with('danger', 'Cita eliminada con éxito');
    }
}
