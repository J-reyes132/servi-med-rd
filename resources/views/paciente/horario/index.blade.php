<x-paciente-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Horarios Disponibles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Día</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Hora de Inicio</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Hora de Fin</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Doctor</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Hospital</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($horarios as $horario)
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $horario->dia_semana }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $horario->hora_inicio }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $horario->hora_fin }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $horario->doctor->nombre }} {{ $horario->doctor->apellido }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $horario->hospital->nombre }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('paciente.horario.show', $horario->id) }}" class="text-indigo-600 hover:text-indigo-900">Ver Detalles</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-paciente-layout>
