<?php

namespace App\Http\Controllers\Paciente;

use App\Http\Controllers\Controller;
use App\Models\Documento;
use App\Models\Paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DocumentoController extends Controller
{
    public function index()
    {

        $documentos = Documento::where('user_id', Auth::id())->get();
        return view('paciente.documento.index', compact('documentos'));
    }

    public function create()
    {
        return view('paciente.documento.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'archivo' => 'required|file|mimes:pdf,doc,docx,jpg,png|max:2048',
        ]);

        $archivoPath = $request->file('archivo')->store('documentos_pacientes');



        Documento::create([
            'user_id' => Auth::id(),
            'nombre' => $request->nombre,
            'fecha' => Carbon::now(),
            'archivo' => $archivoPath,
        ]);

        return redirect()->route('paciente.documento.index')->with('success', 'Documento subido con éxito');
    }

    public function edit(Documento $documento)
    {
        return view('paciente.documento.edit', compact('documento'));
    }

    public function update(Request $request, Documento $documento)
    {

        $request->validate([
            'nombre' => 'required|string|max:255',
            'archivo' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('archivo')) {
            Storage::delete($documento->archivo);
            $data['archivo'] = $request->file('archivo')->store('documentos_pacientes');
        }

        $documento->update($data);

        return redirect()->route('paciente.documento.index')->with('success', 'Documento actualizado con éxito');
    }

    public function destroy(Documento $documento)
    {

        Storage::delete($documento->archivo);
        $documento->delete();

        return redirect()->route('paciente.documento.index')->with('danger', 'Documento eliminado con éxito');
    }
}
