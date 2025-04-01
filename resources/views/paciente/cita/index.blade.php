<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Doctores') }}
        </h2>
    </x-slot>

    <div class="bg-white p-6 rounded shadow">
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-bold">Citas</h2>
            <a href="{{ route('paciente.cita.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-purple-700 transition">
                + Agregar cita
            </a>
        </div>
        <table class="w-full mt-4 border-collapse bg-white shadow rounded-lg overflow-hidden">
            <thead class="bg-gray-200">
                <tr>
                    <th class="p-3 text-left">Paciente</th>
                    <th class="p-3 text-left">Doctor</th>
                    <th class="p-3 text-left">Fecha</th>
                    <th class="p-3 text-left">Hora</th>
                    <th class="p-3 text-left">Estado</th>
                    <th class="p-3 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($citas as $cita)
                <tr class="border-b hover:bg-gray-100 transition">
                    <td class="p-3 text-gray-700">{{ $cita->paciente->nombre }} {{ $cita->paciente->apellido }}</td>
                    <td class="p-3 text-gray-700">{{ $cita->doctor->nombre }} {{ $cita->doctor->apellido }}</td>
                    <td class="p-3 text-gray-700">{{ $cita->fecha }}</td>
                    <td class="p-3 text-gray-700">{{ $cita->hora }}</td>
                    <td class="p-3 text-gray-700">{{ ucfirst($cita->status) }}</td>
                    <td class="p-3 flex justify-center gap-2">
                        <a href="{{ route('paciente.cita.show', $cita->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition">
                            <i class="fas fa-eye"></i> Ver
                        </a>
                        <a href="{{ route('paciente.cita.edit', $cita->id) }}" class="bg-gray-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition">
                            <i class="fas fa-edit"></i> Editar
                        </a>

                        @if($cita->status != 'cancelada')
                        <form action="{{ route('cita.cancel', $cita->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('PUT')
                        @endif

                        @if($cita->status == 'pendiente')

                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
