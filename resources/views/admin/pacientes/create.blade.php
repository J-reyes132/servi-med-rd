<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Nuevo Paciente') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('admin.paciente.store') }}">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Columna Izquierda -->
                            <div class="space-y-6">
                                <!-- Información Básica -->
                                <div class="border-b border-gray-200 pb-4">
                                    <h3 class="text-lg font-medium text-gray-900 mb-3">Información Básica</h3>

                                    <div class="mb-4">
                                        <label for="user_id" class="block text-sm font-medium text-gray-700">Usuario Asociado</label>
                                        <select name="user_id" id="user_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                            <option value="">Seleccione un usuario</option>
                                            @foreach($usuarios as $usuario)
                                                <option value="{{ $usuario->id }}" {{ old('user_id') == $usuario->id ? 'selected' : '' }}>{{ $usuario->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('user_id')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="grid grid-cols-2 gap-4">
                                        <div>
                                            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre *</label>
                                            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" required
                                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                            @error('nombre')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div>
                                            <label for="apellido" class="block text-sm font-medium text-gray-700">Apellido *</label>
                                            <input type="text" name="apellido" id="apellido" value="{{ old('apellido') }}" required
                                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                            @error('apellido')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-2 gap-4 mt-4">
                                        <div>
                                            <label for="cedula" class="block text-sm font-medium text-gray-700">Cédula</label>
                                            <input type="text" name="cedula" id="cedula" value="{{ old('cedula') }}"
                                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                            @error('cedula')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div>
                                            <label for="sexo" class="block text-sm font-medium text-gray-700">Sexo</label>
                                            <select name="sexo" id="sexo" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                                <option value="Masculino" {{ old('sexo') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                                <option value="Femenino" {{ old('sexo') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                                                <option value="Otro" {{ old('sexo') == 'Otro' ? 'selected' : '' }}>Otro</option>
                                            </select>
                                            @error('sexo')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-2 gap-4 mt-4">
                                        <div>
                                            <label for="fecha_nacimiento" class="block text-sm font-medium text-gray-700">Fecha Nacimiento</label>
                                            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}"
                                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                            @error('fecha_nacimiento')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div>
                                            <label for="edad" class="block text-sm font-medium text-gray-700">Edad</label>
                                            <input type="number" name="edad" id="edad" value="{{ old('edad') }}"
                                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                            @error('edad')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Contacto -->
                                <div class="border-b border-gray-200 pb-4">
                                    <h3 class="text-lg font-medium text-gray-900 mb-3">Información de Contacto</h3>

                                    <div class="mb-4">
                                        <label for="email" class="block text-sm font-medium text-gray-700">Email *</label>
                                        <input type="email" name="email" id="email" value="{{ old('email') }}" required
                                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                        @error('email')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-4">
                                        <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                                        <input type="text" name="telefono" id="telefono" value="{{ old('telefono') }}"
                                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                        @error('telefono')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-4">
                                        <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección</label>
                                        <input type="text" name="direccion" id="direccion" value="{{ old('direccion') }}"
                                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                        @error('direccion')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Columna Derecha -->
                            <div class="space-y-4">
                                <!-- Información Médica -->
                                <div class="border-b border-gray-200 pb-4">
                                    <h3 class="text-lg font-medium text-gray-900 mb-3">Información Médica</h3>

                                    <div class="grid grid-cols-2 gap-4">
                                        <div>
                                            <label for="peso" class="block text-sm font-medium text-gray-700">Peso (kg)</label>
                                            <input type="number" name="peso" id="peso" step="0.01" value="{{ old('peso') }}"
                                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                            @error('peso')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div>
                                            <label for="altura" class="block text-sm font-medium text-gray-700">Altura (m)</label>
                                            <input type="number" name="altura" id="altura" step="0.01" value="{{ old('altura') }}"
                                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                            @error('altura')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <label for="tipo_sangre" class="block text-sm font-medium text-gray-700">Tipo de Sangre</label>
                                        <select name="tipo_sangre" id="tipo_sangre" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                            <option value="">Seleccione...</option>
                                            <option value="A+" {{ old('tipo_sangre') == 'A+' ? 'selected' : '' }}>A+</option>
                                            <option value="A-" {{ old('tipo_sangre') == 'A-' ? 'selected' : '' }}>A-</option>
                                            <option value="B+" {{ old('tipo_sangre') == 'B+' ? 'selected' : '' }}>B+</option>
                                            <option value="B-" {{ old('tipo_sangre') == 'B-' ? 'selected' : '' }}>B-</option>
                                            <option value="AB+" {{ old('tipo_sangre') == 'AB+' ? 'selected' : '' }}>AB+</option>
                                            <option value="AB-" {{ old('tipo_sangre') == 'AB-' ? 'selected' : '' }}>AB-</option>
                                            <option value="O+" {{ old('tipo_sangre') == 'O+' ? 'selected' : '' }}>O+</option>
                                            <option value="O-" {{ old('tipo_sangre') == 'O-' ? 'selected' : '' }}>O-</option>
                                        </select>
                                        @error('tipo_sangre')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mt-4">
                                        <label for="enfermedades" class="block text-sm font-medium text-gray-700">Enfermedades/Alergias</label>
                                        <textarea name="enfermedades" id="enfermedades" rows="3"
                                                  class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">{{ old('enfermedades') }}</textarea>
                                        @error('enfermedades')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Información de Seguro -->
                                <div class="pb-4">
                                    <h3 class="text-lg font-medium text-gray-900 mb-3">Información de Seguro</h3>

                                    <div class="mb-4">
                                        <label for="nombre_seguro" class="block text-sm font-medium text-gray-700">Nombre del Seguro</label>
                                        <input type="text" name="nombre_seguro" id="nombre_seguro" value="{{ old('nombre_seguro') }}"
                                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                        @error('nombre_seguro')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="numero_seguro" class="block text-sm font-medium text-gray-700">Número del Seguro</label>
                                        <input type="text" name="numero_seguro" id="numero_seguro" value="{{ old('numero_seguro') }}"
                                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                        @error('numero_seguro')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end mt-6 pt-4 border-t border-gray-200">
                            <a href="{{ route('admin.paciente.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-medium py-2 px-4 rounded-md mr-3">
                                Cancelar
                            </a>
                            <button type="submit" class="bg-blue-500 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-md">
                                Guardar Paciente
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
