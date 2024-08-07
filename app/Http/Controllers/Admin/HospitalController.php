<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index()
    {
        $hospitals = Hospital::all();
        return view('admin.hospital.index', compact('hospitals'));
    }

    public function create()
    {
        return view('admin.hospital.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
        ]);

        Hospital::create($request->all());

        return redirect()->route('admin.hospital.index')->with('success', 'Hospital creado con éxito');
    }

    public function show(Hospital $hospital)
    {
        return view('admin.hospital.show', compact('hospital'));
    }

    public function edit(Hospital $hospital)
    {
        return view('admin.hospital.edit', compact('hospital'));
    }

    public function update(Request $request, Hospital $hospital)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
        ]);

        $hospital->update($request->all());

        return redirect()->route('admin.hospital.index')->with('success', 'Hospital actualizado con éxito');
    }

    public function destroy(Hospital $hospital)
    {
        $hospital->delete();

        return redirect()->route('admin.hospital.index')->with('danger', 'Hospital eliminado con éxito');
    }
}
