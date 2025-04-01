<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Médico') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Tarjetas de Estadísticas -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Total de Pacientes -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-gradient-to-r from-blue-500 to-blue-600 text-white">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-sm font-medium">Pacientes Registrados</p>
                                <p class="text-3xl font-bold">{{ $totalPacientes }}</p>
                            </div>
                            <div class="bg-blue-400 p-3 rounded-full">
                                <i class="fas fa-user-injured text-2xl"></i>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('admin.paciente.index') }}" class="text-xs font-medium hover:underline flex items-center">
                                Ver todos <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Total de Doctores -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-gradient-to-r from-green-500 to-green-600 text-white">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-sm font-medium">Doctores Activos</p>
                                <p class="text-3xl font-bold">{{ $totalDoctores }}</p>
                            </div>
                            <div class="bg-green-400 p-3 rounded-full">
                                <i class="fas fa-user-md text-2xl"></i>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('admin.doctor.index') }}" class="text-xs font-medium hover:underline flex items-center">
                                Ver todos <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Citas Aprobadas -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-gradient-to-r from-purple-500 to-purple-600 text-white">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-sm font-medium">Citas Aprobadas</p>
                                <p class="text-3xl font-bold">{{ $citasAprobadas }}</p>
                                <p class="text-xs mt-1">Este mes: +{{ $citasAprobadasMes }} ({{ $porcentajeAprobadas }}%)</p>
                            </div>
                            <div class="bg-purple-400 p-3 rounded-full">
                                <i class="fas fa-calendar-check text-2xl"></i>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('admin.cita.index', ['status' => 'confirmada']) }}" class="text-xs font-medium hover:underline flex items-center">
                                Ver citas <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Citas Pendientes -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-gradient-to-r from-yellow-500 to-yellow-600 text-white">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-sm font-medium">Citas Pendientes</p>
                                <p class="text-3xl font-bold">{{ $citasPendientes }}</p>
                                <p class="text-xs mt-1">Hoy: {{ $citasPendientesHoy }}</p>
                            </div>
                            <div class="bg-yellow-400 p-3 rounded-full">
                                <i class="fas fa-clock text-2xl"></i>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('admin.cita.index', ['status' => 'pendiente']) }}" class="text-xs font-medium hover:underline flex items-center">
                                Ver citas <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gráficos y Tablas -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                <!-- Gráfico de Citas Mensuales -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg lg:col-span-2">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Citas Mensuales</h3>
                        <canvas id="citasChart" height="250"></canvas>
                    </div>
                </div>

                <!-- Últimos Pacientes Registrados -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Últimos Pacientes</h3>
                        <div class="space-y-4">
                            @forelse($ultimosPacientes as $paciente)
                            <div class="flex items-center space-x-3">
                                <div class="flex-shrink-0 bg-blue-100 text-blue-600 rounded-full p-2">
                                    <i class="fas fa-user-injured"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">
                                        {{ $paciente->nombre }} {{ $paciente->apellido }}
                                    </p>
                                    <p class="text-sm text-gray-500 truncate">
                                        {{ $paciente->cedula }} • {{ $paciente->edad }} años
                                    </p>
                                </div>
                                <div>
                                    <a href="{{ route('admin.paciente.show', $paciente->id) }}" class="text-blue-500 hover:text-blue-700">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                            @empty
                            <p class="text-sm text-gray-500">No hay pacientes registrados</p>
                            @endforelse
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('admin.paciente.index') }}" class="text-sm text-blue-500 hover:underline flex items-center">
                                Ver todos los pacientes <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Próximas Citas -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-medium text-gray-900">Próximas Citas</h3>
                        <a href="{{ route('admin.cita.create') }}" class="px-3 py-1 bg-blue-500 text-white text-sm rounded hover:bg-blue-600 transition">
                            + Nueva Cita
                        </a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Paciente</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Doctor</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha/Hora</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estado</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse($proximasCitas as $cita)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">{{ $cita->paciente->nombre }} {{ $cita->paciente->apellido }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $cita->doctor->nombre }} {{ $cita->doctor->apellido }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                            {{ \Carbon\Carbon::parse($cita->fecha)->format('d/m/Y') }} a las {{ $cita->hora }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                            {{ $cita->status == 'confirmada' ? 'bg-green-100 text-green-800' :
                                               ($cita->status == 'pendiente' ? 'bg-yellow-100 text-yellow-800' : 'bg-red-100 text-red-800') }}">
                                            {{ ucfirst($cita->status) }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ route('admin.cita.show', $cita->id) }}" class="text-blue-500 hover:text-blue-700 mr-3">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.cita.edit', $cita->id) }}" class="text-yellow-500 hover:text-yellow-700">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">
                                        No hay citas próximas programadas
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            // Gráfico de Citas Mensuales
            const citasCtx = document.getElementById('citasChart').getContext('2d');
            const citasChart = new Chart(citasCtx, {
                type: 'bar',
                data: {
                    labels: @json($meses),
                    datasets: [{
                        label: 'Citas Confirmadas',
                        data: @json($citasConfirmadasData),
                        backgroundColor: 'rgba(124, 58, 237, 0.7)',
                        borderColor: 'rgba(124, 58, 237, 1)',
                        borderWidth: 1
                    }, {
                        label: 'Citas Pendientes',
                        data: @json($citasPendientesData),
                        backgroundColor: 'rgba(234, 179, 8, 0.7)',
                        borderColor: 'rgba(234, 179, 8, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                precision: 0
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                        }
                    }
                }
            });
        </script>
    @endpush
</x-admin-layout>
