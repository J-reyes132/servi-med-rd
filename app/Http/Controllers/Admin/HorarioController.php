<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Horario;
use App\Models\Doctor;
use App\Models\Hospital;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function index()
    {
        $horarios = Horario::with(['doctor', 'hospital'])->get();
        return view('admin.horario.index', compact('horarios'));
    }

    public function create()
    {
        $doctores = Doctor::all();
        $hospitales = Hospital::all();
        return view('admin.horario.create', compact('doctores', 'hospitales'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'hospital_id' => 'required|exists:hospitals,id',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i',
            'day_of_week' => 'required|string|max:20',
        ]);

        Horario::create($request->all());

        return redirect()->route('admin.horario.index')->with('success', 'Horario creado con éxito');
    }

    public function show(Horario $horario)
    {
        return view('admin.horario.show', compact('horario'));
    }

    public function edit(Horario $horario)
    {
        $doctores = Doctor::all();
        $hospitales = Hospital::all();
        return view('admin.horario.edit', compact('horario', 'doctores', 'hospitales'));
    }

    public function update(Request $request, Horario $horario)
    {
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'hospital_id' => 'required|exists:hospitals,id',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i',
            'day_of_week' => 'required|string|max:20',
        ]);

        $horario->update($request->all());

        return redirect()->route('admin.horario.index')->with('success', 'Horario actualizado con éxito');
    }

    public function destroy(Horario $horario)
    {
        $horario->delete();

        return redirect()->route('admin.horario.index')->with('danger', 'Horario eliminado con éxito');
    }
}
