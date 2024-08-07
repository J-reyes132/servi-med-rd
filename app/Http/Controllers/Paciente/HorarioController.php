<?php

namespace App\Http\Controllers\Paciente;

use App\Http\Controllers\Controller;
use App\Models\Horario;
use Illuminate\Support\Facades\Auth;

class HorarioController extends Controller
{
    public function index()
    {
        $horarios = Horario::all(); // Obtener todos los horarios
        return view('paciente.horario.index', compact('horarios'));
    }

    public function show(Horario $horario)
    {
        return view('paciente.horario.show', compact('horario'));
    }
}
