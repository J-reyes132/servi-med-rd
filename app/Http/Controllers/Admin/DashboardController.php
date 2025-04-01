<?php

namespace App\Http\Controllers\Admin;

use App\Models\Paciente;
use App\Models\Doctor;
use App\Models\Cita;
use App\Models\User;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Estadísticas principales
        $stats = [
            'totalPacientes' => Paciente::count(),
            'totalDoctores' => Doctor::count(),
            'citasAprobadas' => Cita::where('status', 'confirmada')->count(),
            'citasPendientes' => Cita::where('status', 'pendiente')->count(),
            'citasAprobadasMes' => Cita::where('status', 'confirmada')
                ->whereMonth('fecha', now()->month)
                ->count(),
            'citasPendientesHoy' => Cita::where('status', 'pendiente')
                ->whereDate('fecha', today())
                ->count(),
        ];

        // Porcentaje de citas aprobadas este mes
        $totalCitasMes = Cita::whereMonth('fecha', now()->month)->count();
        $stats['porcentajeAprobadas'] = $totalCitasMes > 0
            ? round(($stats['citasAprobadasMes'] / $totalCitasMes) * 100)
            : 0;

        // Datos para el gráfico de citas mensuales
        $meses = [];
        $citasConfirmadasData = [];
        $citasPendientesData = [];

        for ($i = 5; $i >= 0; $i--) {
            $date = now()->subMonths($i);
            $meses[] = $date->format('M Y');

            $citasConfirmadasData[] = Cita::where('status', 'confirmada')
                ->whereYear('fecha', $date->year)
                ->whereMonth('fecha', $date->month)
                ->count();

            $citasPendientesData[] = Cita::where('status', 'pendiente')
                ->whereYear('fecha', $date->year)
                ->whereMonth('fecha', $date->month)
                ->count();
        }

        // Últimos pacientes registrados
        $ultimosPacientes = Paciente::latest()
            ->take(5)
            ->get();

        // Próximas citas (siguientes 7 días)
        $proximasCitas = Cita::with(['paciente', 'doctor'])
            ->whereDate('fecha', '>=', today())
            ->whereDate('fecha', '<=', today()->addDays(7))
            ->orderBy('fecha')
            ->orderBy('hora')
            ->take(10)
            ->get();

        return view('admin.dashboard', array_merge($stats, [
            'meses' => $meses,
            'citasConfirmadasData' => $citasConfirmadasData,
            'citasPendientesData' => $citasPendientesData,
            'ultimosPacientes' => $ultimosPacientes,
            'proximasCitas' => $proximasCitas,
        ]));
    }
}
