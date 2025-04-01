<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles del Paciente') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Información del Paciente -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <!-- Columna Izquierda -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-900 border-b pb-2">Información Personal</h3>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">Usuario Asociado</label>
                                <p class="mt-1 text-sm text-gray-900">{{ $paciente->user->name ?? 'N/A' }}</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">Nombre Completo</label>
                                <p class="mt-1 text-sm text-gray-900">{{ $paciente->nombre }} {{ $paciente->apellido }}</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">Cédula</label>
                                <p class="mt-1 text-sm text-gray-900">{{ $paciente->cedula }}</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">Fecha de Nacimiento</label>
                                <p class="mt-1 text-sm text-gray-900">{{ \Carbon\Carbon::parse($paciente->fecha_nacimiento)->format('d/m/Y') }} ({{ $paciente->edad }} años)</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">Sexo</label>
                                <p class="mt-1 text-sm text-gray-900">{{ $paciente->sexo }}</p>
                            </div>
                        </div>

                        <!-- Columna Derecha -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-900 border-b pb-2">Información de Contacto</h3>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">Email</label>
                                <p class="mt-1 text-sm text-gray-900">{{ $paciente->email }}</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">Teléfono</label>
                                <p class="mt-1 text-sm text-gray-900">{{ $paciente->telefono }}</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">Dirección</label>
                                <p class="mt-1 text-sm text-gray-900">{{ $paciente->direccion ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Información Médica -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-900 border-b pb-2">Datos Médicos</h3>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">Peso/Altura</label>
                                <p class="mt-1 text-sm text-gray-900">
                                    {{ $paciente->peso }} kg / {{ $paciente->altura }} cm
                                    @if($paciente->peso && $paciente->altura)
                                    @endif
                                </p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">Tipo de Sangre</label>
                                <p class="mt-1 text-sm text-gray-900">{{ $paciente->tipo_sangre ?? 'N/A' }}</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">Enfermedades/Alergias</label>
                                <p class="mt-1 text-sm text-gray-900 whitespace-pre-line">{{ $paciente->enfermedades ?? 'Ninguna registrada' }}</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-900 border-b pb-2">Información de Seguro</h3>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">Nombre del Seguro</label>
                                <p class="mt-1 text-sm text-gray-900">{{ $paciente->nombre_seguro ?? 'N/A' }}</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">Número del Seguro</label>
                                <p class="mt-1 text-sm text-gray-900">{{ $paciente->numero_seguro ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Historial Médico -->
                    <div class="mb-8">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-900">Historial Médico</h3>
                            <a href="{{ route('admin.historial.create', ['paciente_id' => $paciente->id]) }}"
                               class="px-3 py-1 bg-blue-500 text-white text-sm rounded hover:bg-blue-600 transition">
                                + Agregar Registro
                            </a>
                        </div>

                        @if($paciente->historiales->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Descripción</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Documentos</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($paciente->historiales as $historial)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ \Carbon\Carbon::parse($historial->fecha)->format('d/m/Y') }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-900">
                                            {{ Str::limit($historial->descripcion, 50) }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            @if($historial->documento)
                                            <a href="{{ asset('storage/'.$historial->documento) }}" target="_blank"
                                               class="text-blue-500 hover:underline flex items-center">
                                                <i class="fas fa-file-pdf mr-1"></i> Ver
                                            </a>
                                            @else
                                            <span class="text-gray-400">N/A</span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <div class="flex space-x-2">
                                                <a href="{{ route('admin.historial.show', $historial->id) }}"
                                                   class="text-blue-500 hover:text-blue-700">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.historial.edit', $historial->id) }}"
                                                   class="text-yellow-500 hover:text-yellow-700">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.historial.destroy', $historial->id) }}" method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('¿Eliminar este registro?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                        <div class="bg-gray-50 p-4 rounded-lg text-center text-gray-500">
                            No hay registros de historial médico para este paciente
                        </div>
                        @endif
                    </div>

                    <!-- Acciones -->
                    <div class="flex justify-between items-center pt-4 border-t border-gray-200">
                        <a href="{{ route('admin.paciente.index') }}"
                           class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-md transition">
                            Volver al listado
                        </a>
                        <div class="space-x-2">
                            <a href="{{ route('admin.paciente.edit', $paciente->id) }}"
                               class="px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white rounded-md transition">
                                Editar Paciente
                            </a>
                            <a href="{{ route('admin.cita.create', ['paciente_id' => $paciente->id]) }}"
                               class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-md transition">
                                Crear Cita
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
