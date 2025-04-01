<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Cita Médica') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center">
        <div class="w-full max-w-4xl bg-gray-100 shadow-lg rounded-lg p-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-4">
                Editando cita para: <span class="text-indigo-600">{{ $cita->paciente->nombre }} {{ $cita->paciente->apellido }}</span>
            </h3>

            <form method="POST" action="{{ route('admin.cita.update', $cita->id) }}" class="space-y-4">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="paciente_id" class="block text-sm font-medium text-gray-700">Paciente</label>
                        <select name="paciente_id" id="paciente_id" class="w-full mt-1 border-gray-400 rounded-md shadow-sm bg-gray-50">
                            @foreach($pacientes as $paciente)
                                <option value="{{ $paciente->id }}" {{ $cita->paciente_id == $paciente->id ? 'selected' : '' }}>
                                    {{ $paciente->nombre }} {{ $paciente->apellido }}
                                </option>
                            @endforeach
                        </select>
                        @error('paciente_id')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="doctor_id" class="block text-sm font-medium text-gray-700">Doctor</label>
                        <select name="doctor_id" id="doctor_id" class="w-full mt-1 border-gray-400 rounded-md shadow-sm bg-gray-50">
                            @foreach($doctores as $doctor)
                                <option value="{{ $doctor->id }}" {{ $cita->doctor_id == $doctor->id ? 'selected' : '' }}>
                                    {{ $doctor->nombre }} {{ $doctor->apellido }} ({{ $doctor->especialidad }})
                                </option>
                            @endforeach
                        </select>
                        @error('doctor_id')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="fecha" class="block text-sm font-medium text-gray-700">Fecha</label>
                        <input type="date" name="fecha" id="fecha" value="{{ old('fecha', $cita->fecha) }}" class="w-full mt-1 border-gray-400 rounded-md shadow-sm bg-gray-50">
                        @error('fecha')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="hora" class="block text-sm font-medium text-gray-700">Hora</label>
                        <input type="time" name="hora" id="hora" value="{{ old('hora', $cita->hora) }}" class="w-full mt-1 border-gray-400 rounded-md shadow-sm bg-gray-50">
                        @error('hora')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="motivo" class="block text-sm font-medium text-gray-700">Motivo de la consulta</label>
                    <textarea name="motivo" id="motivo" rows="3" class="w-full mt-1 border-gray-400 rounded-md shadow-sm bg-gray-50">{{ old('motivo', $cita->motivo) }}</textarea>
                    @error('motivo')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700">Estado</label>
                    <select name="status" id="status" class="w-full mt-1 border-gray-400 rounded-md shadow-sm bg-gray-50">
                        <option value="pendiente" {{ $cita->status == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                        <option value="confirmada" {{ $cita->status == 'confirmada' ? 'selected' : '' }}>Confirmada</option>
                        <option value="completada" {{ $cita->status == 'completada' ? 'selected' : '' }}>Completada</option>
                        <option value="cancelada" {{ $cita->status == 'cancelada' ? 'selected' : '' }}>Cancelada</option>
                    </select>
                    @error('status')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-between mt-6">
                    <a href="{{ route('admin.cita.index') }}" class="bg-gray-800 hover:bg-gray-800 text-white font-semibold py-2 px-4 rounded-lg transition duration-300 ease-in-out">
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
