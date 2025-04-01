<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($historial) ? __('Editar Historial') : __('Crear Historial') }}
        </h2>
    </x-slot>

    <div class="bg-white p-6 rounded shadow">
        <form method="POST" action="{{ isset($historial) ? route('admin.historial.update', $historial->id) : route('admin.historial.store') }}" enctype="multipart/form-data">
            @csrf
            @if(isset($historial))
                @method('PUT')
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Paciente -->
                <div>
                    <label for="paciente_id" class="block text-sm font-medium text-gray-700 mb-1">Paciente *</label>
                    <select name="paciente_id" id="paciente_id" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="">Seleccione un paciente</option>
                        @foreach($pacientes as $paciente)
                            <option value="{{ $paciente->id }}" {{ (isset($historial) && $historial->paciente_id == $paciente->id) ? 'selected' : '' }}>
                                {{ $paciente->nombre }} {{ $paciente->apellido }} ({{ $paciente->cedula }})
                            </option>
                        @endforeach
                    </select>
                    @error('paciente_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Cita asociada -->
                <div>
                    <label for="cita_id" class="block text-sm font-medium text-gray-700 mb-1">Cita Asociada (Opcional)</label>
                    <select name="cita_id" id="cita_id" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="">Sin cita asociada</option>
                        @foreach($citas as $cita)
                            <option value="{{ $cita->id }}" {{ (isset($historial) && $historial->cita_id == $cita->id) ? 'selected' : '' }}>
                                {{ $cita->fecha }} - {{ $cita->paciente->nombre }}
                            </option>
                        @endforeach
                    </select>
                    @error('cita_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="mb-4">
                    <label for="fecha" class="block text-sm font-medium text-gray-700">Fecha</label>
                    <input type="date" name="fecha" id="fecha" value="{{ old('fecha') }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                    @error('fecha')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Documento -->
                <div>
                    <label for="documento" class="block text-sm font-medium text-gray-700 mb-1">Documento (Opcional)</label>
                    <input type="file" name="documento" id="documento"
                           class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    @error('documento')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    @if(isset($historial) && $historial->documento)
                        <p class="mt-2 text-sm text-gray-500">Documento actual:
                            <a href="{{ asset('storage/'.$historial->documento) }}" target="_blank" class="text-blue-500 hover:underline">Ver</a>
                        </p>
                    @endif
                </div>
            </div>

            <!-- Descripción -->
            <div class="mb-6">
                <label for="descripcion" class="block text-sm font-medium text-gray-700 mb-1">Descripción *</label>
                <textarea name="descripcion" id="descripcion" rows="5" required
                          class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ isset($historial) ? $historial->descripcion : old('descripcion') }}</textarea>
                @error('descripcion')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end space-x-3">
                <a href="{{ route('admin.historial.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition">
                    Cancelar
                </a>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
                    {{ isset($historial) ? 'Actualizar' : 'Guardar' }}
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>
