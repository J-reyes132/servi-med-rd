<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Historiales Médicos') }}
        </h2>
    </x-slot>

    <div class="bg-white p-6 rounded shadow">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-bold">Registros de Historial</h2>
            <a href="{{ route('admin.historial.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                + Nuevo Registro
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse bg-white shadow rounded-lg overflow-hidden">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="p-3 text-left">Codigo</th>
                        <th class="p-3 text-left">Paciente</th>
                        <th class="p-3 text-left">Fecha</th>
                        <th class="p-3 text-left">Cita Asociada</th>
                        <th class="p-3 text-left">Documento</th>
                        <th class="p-3 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($historials as $historial)
                    <tr class="border-b hover:bg-gray-50 transition">
                        <td class="p-3 text-gray-700">
                           {{ $historial->codigo }}
                        </td>
                        <td class="p-3 text-gray-700">
                            {{ $historial->paciente->nombre }} {{ $historial->paciente->apellido }}
                        </td>
                        <td class="p-3 text-gray-700">{{ $historial->fecha}}</td>
                        <td class="p-3 text-gray-700">
                            @if($historial->cita)
                            {{ $historial->cita->fecha}} - {{ $historial->cita->hora }}
                            @else
                            Sin cita asociada
                            @endif
                        </td>
                        <td class="p-3 text-gray-700">
                            @if($historial->documento)
                            <a href="{{ asset('storage/'.$historial->documento) }}" target="_blank" class="text-blue-500 hover:underline">
                                Ver documento
                            </a>
                            @else
                            Sin documento
                            @endif
                        </td>
                        <td class="p-3 flex justify-center gap-2">
                            <a href="{{ route('admin.historial.show', $historial->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.historial.edit', $historial->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.historial.destroy', $historial->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition" onclick="return confirm('¿Eliminar este registro?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="p-3 text-center text-gray-500">No hay registros de historial</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</x-admin-layout>
