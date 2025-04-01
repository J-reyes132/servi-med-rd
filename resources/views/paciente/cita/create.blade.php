<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar Cita Médica') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('paciente.cita.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="doctor_id" class="block text-sm font-medium text-gray-700">Doctor</label>
                            <select name="doctor_id" id="doctor_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                                @foreach ($doctores as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->nombre }} {{ $doctor->apellido }}</option>
                                @endforeach
                            </select>
                            @error('doctor_id')
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
                            <label for="hora" class="block text-sm font-medium text-gray-700">Hora</label>
                            <input type="time" name="hora" id="hora" value="{{ old('hora') }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                            @error('hora')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="motivo" class="block text-sm font-medium text-gray-700">Motivo</label>
                            <textarea name="motivo" id="motivo" rows="3" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">{{ old('motivo') }}</textarea>
                            @error('motivo')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="status" class="block text-sm font-medium text-gray-700">Estado</label>
                            <select name="status" id="status" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                                <option value="pendiente">Pendiente</option>
                                <option value="confirmada">Confirmada</option>
                                <option value="atendida">Atendida</option>
                                <option value="cancelada">Cancelada</option>
                            </select>
                            @error('status')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                                Guardar Cita
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
