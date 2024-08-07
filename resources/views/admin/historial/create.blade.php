<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar Registro Médico') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('admin.historial.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <label for="paciente_id" class="block text-sm font-medium text-gray-700">Paciente</label>
                            <select name="paciente_id" id="paciente_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                                @foreach($pacientes as $paciente)
                                    <option value="{{ $paciente->id }}">{{ $paciente->nombre }} {{ $paciente->apellido }}</option>
                                @endforeach
                            </select>
                            @error('paciente_id')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="cita_id" class="block text-sm font-medium text-gray-700">Cita (opcional)</label>
                            <select name="cita_id" id="cita_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                                @foreach($citas as $cita)
                                    <option value="{{ $cita->id }}">{{ $cita->fecha }}</option>
                                @endforeach
                            </select>
                            @error('cita_id')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="fecha" class="block text-sm font-medium text-gray-700">Fecha</label>
                            <input type="date" name="fecha" id="fecha" value="{{ old('fecha') }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('fecha')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                            <textarea name="descripcion" id="descripcion" rows="5" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">{{ old('descripcion') }}</textarea>
                            @error('descripcion')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="documento" class="block text-sm font-medium text-gray-700">Adjuntar Documento (opcional)</label>
                            <input type="file" name="documento" id="documento" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('documento')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                                Guardar Registro
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
