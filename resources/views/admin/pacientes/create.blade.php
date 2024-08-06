<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Paciente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('admin.paciente.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="user_id" class="block text-sm font-medium text-gray-700">Usuario Asociado</label>
                            <select name="user_id" id="user_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                                <option value="">Seleccione un usuario</option>
                                @foreach($usuarios as $usuario)
                                    <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                                @endforeach
                            </select>
                            @error('user_id')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="cedula" class="block text-sm font-medium text-gray-700">Cédula</label>
                            <input type="text" name="cedula" id="cedula" value="{{ old('cedula') }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('cedula')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('nombre')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="apellido" class="block text-sm font-medium text-gray-700">Apellido</label>
                            <input type="text" name="apellido" id="apellido" value="{{ old('apellido') }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('apellido')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('email')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                            <input type="text" name="telefono" id="telefono" value="{{ old('telefono') }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('telefono')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="fecha_nacimiento" class="block text-sm font-medium text-gray-700">Fecha de Nacimiento</label>
                            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('fecha_nacimiento')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="sexo" class="block text-sm font-medium text-gray-700">Sexo</label>
                            <select name="sexo" id="sexo" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                                <option value="Masculino" {{ old('sexo') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                <option value="Femenino" {{ old('sexo') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                                <option value="Otro" {{ old('sexo') == 'Otro' ? 'selected' : '' }}>Otro</option>
                            </select>
                            @error('sexo')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="edad" class="block text-sm font-medium text-gray-700">Edad</label>
                            <input type="number" name="edad" id="edad" value="{{ old('edad') }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('edad')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección</label>
                            <input type="text" name="direccion" id="direccion" value="{{ old('direccion') }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('direccion')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="peso" class="block text-sm font-medium text-gray-700">Peso</label>
                            <input type="number" name="peso" id="peso" step="0.01" value="{{ old('peso') }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('peso')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="altura" class="block text-sm font-medium text-gray-700">Altura</label>
                            <input type="number" name="altura" id="altura" step="0.01" value="{{ old('altura') }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('altura')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="tipo_sangre" class="block text-sm font-medium text-gray-700">Tipo de Sangre</label>
                            <input type="text" name="tipo_sangre" id="tipo_sangre" value="{{ old('tipo_sangre') }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('tipo_sangre')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="enfermedades" class="block text-sm font-medium text-gray-700">Enfermedades</label>
                            <textarea name="enfermedades" id="enfermedades" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">{{ old('enfermedades') }}</textarea>
                            @error('enfermedades')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="nombre_seguro" class="block text-sm font-medium text-gray-700">Nombre del Seguro</label>
                            <input type="text" name="nombre_seguro" id="nombre_seguro" value="{{ old('nombre_seguro') }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('nombre_seguro')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="numero_seguro" class="block text-sm font-medium text-gray-700">Número del Seguro</label>
                            <input type="text" name="numero_seguro" id="numero_seguro" value="{{ old('numero_seguro') }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('numero_seguro')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                                Guardar Paciente
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
