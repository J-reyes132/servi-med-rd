<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Citas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.cita.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Agregar Cita</a>
            </div>
            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Paciente</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Doctor</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Hospital</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Fecha</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Hora</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Motivo</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Estado</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($citas as $cita)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $cita->paciente->nombre }} {{ $cita->paciente->apellido }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $cita->doctor->nombre }} {{ $cita->doctor->apellido }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $cita->hospital->nombre }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $cita->fecha }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $cita->hora }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $cita->motivo }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ ucfirst($cita->status) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{ route('admin.cita.show', $cita->id) }}" class="text-blue-600 hover:text-blue-900">Ver</a>
                                <a href="{{ route('admin.cita.edit', $cita->id) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                <form action="{{ route('admin.cita.destroy', $cita->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
