<?php
namespace App\Http\Controllers\Paciente;

use App\Http\Controllers\Controller;
use App\Models\Historial;
use Illuminate\Support\Facades\Auth;

class HistorialController extends Controller
{
    public function index()
    {
        $paciente_id = Auth::id();
        $historiales = Historial::where('paciente_id', $paciente_id)->get();

        return view('paciente.historial.index', compact('historiales'));
    }

    public function show(Historial $historial)
    {
        $this->authorize('view', $historial);

        return view('paciente.historial.show', compact('historial'));
    }
}
