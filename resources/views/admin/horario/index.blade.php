<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Horarios Médicos') }}
        </h2>
    </x-slot>

    <div class="bg-white p-6 rounded shadow">
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-bold">Horarios</h2>
            <a href="{{ route('admin.horario.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-purple-700 transition">
                + Agregar Horario
            </a>
        </div>

        <table class="w-full mt-4 border-collapse bg-white shadow rounded-lg overflow-hidden">
            <thead class="bg-gray-200">
                <tr>
                    <th class="p-3 text-left">Doctor</th>
                    <th class="p-3 text-left">Día</th>
                    <th class="p-3 text-left">Hora Inicio</th>
                    <th class="p-3 text-left">Hora Fin</th>
                    <th class="p-3 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($horarios as $horario)
                <tr class="border-b hover:bg-gray-100 transition">
                    <td class="p-3 text-gray-700">{{ $horario->doctor->nombre }} {{ $horario->doctor->apellido }}</td>

                    <td class="p-3 text-gray-700">{{ $horario->day_of_week }}</td>
                    <td class="p-3 text-gray-700">{{ $horario->hora_inicio }}</td>
                    <td class="p-3 text-gray-700">{{ $horario->hora_fin }}</td>
                    <td class="p-3 flex justify-center gap-2">
                        <a href="{{ route('admin.horario.show', $horario->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition">
                            <i class="fas fa-eye"></i> Ver
                        </a>
                        <a href="{{ route('admin.horario.edit', $horario->id) }}" class="bg-gray-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                        <form action="{{ route('admin.horario.destroy', $horario->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition" onclick="return confirm('¿Estás seguro de eliminar este horario?');">
                                <i class="fas fa-trash"></i> Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin-layout>
