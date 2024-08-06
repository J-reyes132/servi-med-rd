<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Doctor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('admin.doctor.update', $doctor->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="user_id" class="block text-sm font-medium text-gray-700">Usuario Asociado</label>
                            <select name="user_id" id="user_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                                <option value="">Seleccione un usuario</option>
                                @foreach($usuarios as $usuario)
                                    <option value="{{ $usuario->id }}" {{ $doctor->user_id == $usuario->id ? 'selected' : '' }}>
                                        {{ $usuario->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('user_id')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="cedula" class="block text-sm font-medium text-gray-700">Cédula</label>
                            <input type="text" name="cedula" id="cedula" value="{{ old('cedula', $doctor->cedula) }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('cedula')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                            <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $doctor->nombre) }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('nombre')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="apellido" class="block text-sm font-medium text-gray-700">Apellido</label>
                            <input type="text" name="apellido" id="apellido" value="{{ old('apellido', $doctor->apellido) }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('apellido')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email', $doctor->email) }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('email')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="especialidad" class="block text-sm font-medium text-gray-700">Especialidad</label>
                            <input type="text" name="especialidad" id="especialidad" value="{{ old('especialidad', $doctor->especialidad) }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('especialidad')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                            <input type="text" name="telefono" id="telefono" value="{{ old('telefono', $doctor->telefono) }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('telefono')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="exequatur" class="block text-sm font-medium text-gray-700">Exequatur</label>
                            <input type="text" name="exequatur" id="exequatur" value="{{ old('exequatur', $doctor->exequatur) }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('exequatur')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                                Actualizar Doctor
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
