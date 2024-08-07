<x-doctor-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Cita Médica') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('doctor.cita.update', $cita->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="paciente_id" class="block text-sm font-medium text-gray-700">Paciente</label>
                            <select name="paciente_id" id="paciente_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                                @foreach ($pacientes as $paciente)
                                    <option value="{{ $paciente->id }}" {{ $cita->paciente_id == $paciente->id ? 'selected' : '' }}>{{ $paciente->nombre }} {{ $paciente->apellido }}</option>
                                @endforeach
                            </select>
                            @error('paciente_id')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="fecha" class="block text-sm font-medium text-gray-700">Fecha</label>
                            <input type="date" name="fecha" id="fecha" value="{{ old('fecha', $cita->fecha) }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('fecha')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="hora" class="block text-sm font-medium text-gray-700">Hora</label>
                            <input type="time" name="hora" id="hora" value="{{ old('hora', $cita->hora) }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('hora')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="motivo" class="block text-sm font-medium text-gray-700">Motivo</label>
                            <textarea name="motivo" id="motivo" rows="3" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">{{ old('motivo', $cita->motivo) }}</textarea>
                            @error('motivo')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="status" class="block text-sm font-medium text-gray-700">Estado</label>
                            <select name="status" id="status" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                                <option value="pendiente" {{ $cita->status == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                                <option value="confirmada" {{ $cita->status == 'confirmada' ? 'selected' : '' }}>Confirmada</option>
                                <option value="atendida" {{ $cita->status == 'atendida' ? 'selected' : '' }}>Atendida</option>
                                <option value="cancelada" {{ $cita->status == 'cancelada' ? 'selected' : '' }}>Cancelada</option>
                            </select>
                            @error('status')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                                Actualizar Cita
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-doctor-layout>
