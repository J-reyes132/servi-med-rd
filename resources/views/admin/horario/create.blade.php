<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Nuevo Horario Médico') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-8 sm:p-12 bg-white">
                    <div class="mb-6">
                        <h3 class="text-lg font-bold text-indigo-600">
                            Configurar Horario Médico
                        </h3>
                        <p class="text-sm text-gray-500 mt-1">
                            Complete los datos para crear un nuevo horario de atención
                        </p>
                    </div>

                    <form method="POST" action="{{ route('admin.horario.store') }}">
                        @csrf

                        <!-- Doctor Selection -->
                        <div class="mb-6">
                            <label for="doctor_id" class="block text-sm font-medium text-gray-700 mb-2">
                                Médico <span class="text-red-500">*</span>
                            </label>
                            <select name="doctor_id" id="doctor_id" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                <option value="">Seleccione un médico</option>
                                @foreach($doctores as $doctor)
                                    <option value="{{ $doctor->id }}">
                                        {{ $doctor->nombre }} {{ $doctor->apellido }}
                                    </option>
                                @endforeach
                            </select>
                            @error('doctor_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Days Selection -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Días de la semana <span class="text-red-500">*</span>
                            </label>
                            <div class="space-y-2">
                                @php
                                    $days = [
                                        'Lunes' => 'Lunes',
                                        'Martes' => 'Martes',
                                        'Miércoles' => 'Miércoles',
                                        'Jueves' => 'Jueves',
                                        'Viernes' => 'Viernes',
                                        'Sábado' => 'Sábado',
                                        'Domingo' => 'Domingo'
                                    ];
                                @endphp

                                @foreach($days as $key => $day)
                                <div class="flex items-center">
                                    <input type="checkbox" id="day_of_week" name="dias[]"
                                        value="{{ $day }}"
                                        class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                    <label for="dia_{{ $key }}" class="ml-2 block text-sm text-gray-700">
                                        {{ $day }}
                                    </label>
                                </div>
                                @endforeach
                            </div>
                            @error('dias')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Time Selection -->
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div>
                                <label for="hora_inicio" class="block text-sm font-medium text-gray-700 mb-2">
                                    Hora de inicio <span class="text-red-500">*</span>
                                </label>
                                <input type="time" name="hora_inicio" id="hora_inicio"
                                    required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                @error('hora_inicio')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="hora_fin" class="block text-sm font-medium text-gray-700 mb-2">
                                    Hora de fin <span class="text-red-500">*</span>
                                </label>
                                <input type="time" name="hora_fin" id="hora_fin"
                                    required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                @error('hora_fin')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="flex justify-end space-x-3 pt-4 border-t border-gray-200">
                            <a href="{{ route('admin.horario.index') }}"
                                class="px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-800 rounded-md transition">
                                Cancelar
                            </a>
                            <button type="submit"
                                class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-md transition">
                                Guardar Horario
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
