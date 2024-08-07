<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Horarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.horario.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Agregar Horario</a>
            </div>
            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Doctor</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Hospital</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Día</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Hora de Inicio</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Hora de Fin</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($horarios as $horario)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $horario->doctor->nombre }} {{ $horario->doctor->apellido }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $horario->hospital->nombre }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $horario->day_of_week }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $horario->hora_inicio }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $horario->hora_fin }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{ route('admin.horario.show', $horario->id) }}" class="text-blue-600 hover:text-blue-900">Ver</a>
                                <a href="{{ route('admin.horario.edit', $horario->id) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                <form action="{{ route('admin.horario.destroy', $horario->id) }}" method="POST" class="inline-block">
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
