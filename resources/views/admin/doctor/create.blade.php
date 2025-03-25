<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Crear Doctor') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center">
        <div class="w-full max-w-4xl bg-white shadow-md rounded-lg p-6">
            <form method="POST" action="{{ route('admin.doctor.store') }}">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="user_id" class="text-sm font-medium text-gray-700">Usuario Asociado</label>
                        <select name="user_id" id="user_id" class="w-full mt-1 p-2 border-gray-300 rounded-md shadow-sm">
                            <option value="">Seleccione un usuario</option>
                            @foreach($usuarios as $usuario)
                                <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                            @endforeach
                        </select>
                        @error('user_id') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="cedula" class="text-sm font-medium text-gray-700">Cédula</label>
                        <input type="text" name="cedula" id="cedula" value="{{ old('cedula') }}" class="w-full mt-1 p-2 border-gray-300 rounded-md shadow-sm">
                        @error('cedula') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="nombre" class="text-sm font-medium text-gray-700">Nombre</label>
                        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="w-full mt-1 p-2 border-gray-300 rounded-md shadow-sm">
                        @error('nombre') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="apellido" class="text-sm font-medium text-gray-700">Apellido</label>
                        <input type="text" name="apellido" id="apellido" value="{{ old('apellido') }}" class="w-full mt-1 p-2 border-gray-300 rounded-md shadow-sm">
                        @error('apellido') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="email" class="text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full mt-1 p-2 border-gray-300 rounded-md shadow-sm">
                        @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="especialidad" class="text-sm font-medium text-gray-700">Especialidad</label>
                        <input type="text" name="especialidad" id="especialidad" value="{{ old('especialidad') }}" class="w-full mt-1 p-2 border-gray-300 rounded-md shadow-sm">
                        @error('especialidad') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="telefono" class="text-sm font-medium text-gray-700">Teléfono</label>
                        <input type="text" name="telefono" id="telefono" value="{{ old('telefono') }}" class="w-full mt-1 p-2 border-gray-300 rounded-md shadow-sm">
                        @error('telefono') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="exequatur" class="text-sm font-medium text-gray-700">Exequatur</label>
                        <input type="text" name="exequatur" id="exequatur" value="{{ old('exequatur') }}" class="w-full mt-1 p-2 border-gray-300 rounded-md shadow-sm">
                        @error('exequatur') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="flex justify-between mt-6">
                    <a href="{{ route('admin.doctor.index') }}" class="bg-gray-800 hover:bg-gray-800 text-white font-semibold py-2 px-4 rounded-lg transition">
                        Cancelar
                    </a>

                    <button type="submit" class="bg-blue-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg transition">
                        Guardar Doctor
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
