<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Horario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('admin.horario.update', $horario->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="doctor_id" class="block text-sm font-medium text-gray-700">Doctor</label>
                            <select name="doctor_id" id="doctor_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                                @foreach($doctores as $doctor)
                                    <option value="{{ $doctor->id }}" {{ $horario->doctor_id == $doctor->id ? 'selected' : '' }}>
                                        {{ $doctor->nombre }} {{ $doctor->apellido }}
                                    </option>
                                @endforeach
                            </select>
                            @error('doctor_id')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="mb-4">
                            <label for="day_of_week" class="block text-sm font-medium text-gray-700">Día de la Semana</label>
                            <input type="text" name="day_of_week" id="day_of_week" value="{{ old('day_of_week', $horario->day_of_week) }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('day_of_week')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="hora_inicio" class="block text-sm font-medium text-gray-700">Hora de Inicio</label>
                            <input type="time" name="hora_inicio" id="hora_inicio" value="{{ old('hora_inicio', $horario->hora_inicio) }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('hora_inicio')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="hora_fin" class="block text-sm font-medium text-gray-700">Hora de Fin</label>
                            <input type="time" name="hora_fin" id="hora_fin" value="{{ old('hora_fin', $horario->hora_fin) }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('hora_fin')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                                Actualizar Horario
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
