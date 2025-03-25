<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Paciente;
use App\Models\User;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index(Request $request)
    {
        $pacientes = Paciente::all();
        return view('admin.pacientes.index', compact('pacientes'));
    }

    public function index_paciente()
    {
        return view('paciente.index');
    }

    public function show(Paciente $paciente)
    {
        return view('admin.pacientes.show', compact('paciente'));
    }

    public function create()
    {
        $usuarios = User::where('role','Paciente')->get();
        return view('admin.pacientes.create', compact('usuarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'cedula' => 'required|string|max:255|unique:pacientes',
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:pacientes',
            'telefono' => 'required|string|max:15',
            'fecha_nacimiento' => 'required|date',
            'sexo' => 'required|string',
            'edad' => 'required|integer',
            'direccion' => 'required|string|max:255',
            'peso' => 'required|numeric',
            'altura' => 'required|numeric',
            'tipo_sangre' => 'required|string',
            'enfermedades' => 'nullable|string',
            'nombre_seguro' => 'nullable|string|max:255',
            'numero_seguro' => 'nullable|string|max:255',
        ]);

        Paciente::create($request->all());

        return redirect()->route('admin.paciente.index')->with('success', 'Paciente creado con éxito');
    }

    public function edit(Paciente $paciente)
    {
        $usuarios = User::where('role','Paciente')->get();
        return view('admin.pacientes.edit', compact('paciente', 'usuarios'));
    }

    public function update(Request $request, Paciente $paciente)
    {
        $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'cedula' => 'required|string|max:255|unique:pacientes,cedula,' . $paciente->id,
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:pacientes,email,' . $paciente->id,
            'telefono' => 'required|string|max:15',
            'fecha_nacimiento' => 'required|date',
            'sexo' => 'required|string',
            'edad' => 'required|integer',
            'direccion' => 'required|string|max:255',
            'peso' => 'required|numeric',
            'altura' => 'required|numeric',
            'tipo_sangre' => 'required|string',
            'enfermedades' => 'nullable|string',
            'nombre_seguro' => 'nullable|string|max:255',
            'numero_seguro' => 'nullable|string|max:255',
        ]);

        $paciente->update($request->all());

        return redirect()->route('admin.paciente.index')->with('success', 'Paciente actualizado con éxito');
    }

    public function destroy(Paciente $paciente)
    {
        $paciente->delete();

        return redirect()->route('admin.paciente.index')->with('danger', 'Paciente eliminado con éxito');
    }
}
