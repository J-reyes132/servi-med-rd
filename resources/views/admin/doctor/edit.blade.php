<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Doctor') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center">
        <div class="w-full max-w-4xl bg-gray-100 shadow-lg rounded-lg p-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-4">
                Editando información de: <span class="text-indigo-600">{{ $doctor->nombre }} {{ $doctor->apellido }}</span>
            </h3>

            <form method="POST" action="{{ route('admin.doctor.update', $doctor->id) }}" class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label for="user_id" class="block text-sm font-medium text-gray-700">Usuario Asociado</label>
                    <select name="user_id" id="user_id" class="w-full mt-1 border-gray-400 rounded-md shadow-sm">
                        <option value="">Seleccione un usuario</option>
                        @foreach($usuarios as $usuario)
                            <option value="{{ $usuario->id }}" {{ $doctor->user_id == $usuario->id ? 'selected' : '' }}>
                                {{ $usuario->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('user_id')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="cedula" class="block text-sm font-medium text-gray-700">Cédula</label>
                        <input type="text" name="cedula" id="cedula" value="{{ old('cedula', $doctor->cedula) }}" class="w-full mt-1 border-gray-400 rounded-md shadow-sm bg-gray-50">
                        @error('cedula')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                        <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $doctor->nombre) }}" class="w-full mt-1 border-gray-400 rounded-md shadow-sm bg-gray-50">
                        @error('nombre')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="apellido" class="block text-sm font-medium text-gray-700">Apellido</label>
                        <input type="text" name="apellido" id="apellido" value="{{ old('apellido', $doctor->apellido) }}" class="w-full mt-1 border-gray-400 rounded-md shadow-sm bg-gray-50">
                        @error('apellido')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email', $doctor->email) }}" class="w-full mt-1 border-gray-400 rounded-md shadow-sm bg-gray-50">
                        @error('email')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="especialidad" class="block text-sm font-medium text-gray-700">Especialidad</label>
                        <input type="text" name="especialidad" id="especialidad" value="{{ old('especialidad', $doctor->especialidad) }}" class="w-full mt-1 border-gray-400 rounded-md shadow-sm bg-gray-50">
                        @error('especialidad')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                        <input type="text" name="telefono" id="telefono" value="{{ old('telefono', $doctor->telefono) }}" class="w-full mt-1 border-gray-400 rounded-md shadow-sm bg-gray-50">
                        @error('telefono')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="exequatur" class="block text-sm font-medium text-gray-700">Exequatur</label>
                    <input type="text" name="exequatur" id="exequatur" value="{{ old('exequatur', $doctor->exequatur) }}" class="w-full mt-1 border-gray-400 rounded-md shadow-sm bg-gray-50">
                    @error('exequatur')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-between mt-6">
                    <a href="{{ route('admin.doctor.index') }}" class="bg-gray-800 hover:bg-gray-800 text-white font-semibold py-2 px-4 rounded-lg transition duration-300 ease-in-out">
                        Cancelar
                    </a>
                    <button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-300 ease-in-out">
                        Guardar Cambios
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
