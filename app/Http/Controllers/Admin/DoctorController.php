<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('admin.doctor.index', compact('doctors'));
    }

    public function create()
    {
        $usuarios = User::all(); // Aquí puedes filtrar según el rol si lo necesitas
        return view('admin.doctor.create', compact('usuarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'cedula' => 'required|string|max:255|unique:doctors',
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:doctors',
            'especialidad' => 'nullable|string|max:255',
            'telefono' => 'required|string|max:15',
            'exequatur' => 'required|string|max:255|unique:doctors',
        ]);

        Doctor::create($request->all());

        return redirect()->route('admin.doctor.index')->with('success', 'Doctor creado con éxito');
    }

    public function show(Doctor $doctor)
    {
        return view('admin.doctor.show', compact('doctor'));
    }

    public function edit(Doctor $doctor)
    {
        $usuarios = User::all(); // Aquí puedes filtrar según el rol si lo necesitas
        return view('admin.doctor.edit', compact('doctor', 'usuarios'));
    }

    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'cedula' => 'required|string|max:255|unique:doctors,cedula,' . $doctor->id,
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:doctors,email,' . $doctor->id,
            'especialidad' => 'nullable|string|max:255',
            'telefono' => 'required|string|max:15',
            'exequatur' => 'required|string|max:255|unique:doctors,exequatur,' . $doctor->id,
        ]);

        $doctor->update($request->all());

        return redirect()->route('admin.doctor.index')->with('success', 'Doctor actualizado con éxito');
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();

        return redirect()->route('admin.doctor.index')->with('danger', 'Doctor eliminado con éxito');
    }
}

