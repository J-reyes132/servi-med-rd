<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Nueva Cita') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-8 sm:p-12 bg-gray-400">
                    <div class="mb-6">
                        <h3 class="text-lg font-bold text-indigo-600">
                            Programar Nueva Cita Médica
                        </h3>
                        <p class="text-sm text-gray-500 mt-1">
                            Complete todos los campos requeridos para registrar una nueva cita
                        </p>
                    </div>

                    <form method="POST" action="{{ route('admin.cita.store') }}">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- Paciente Selection -->
                            <div>
                                <label for="paciente_id" class="block text-sm font-medium text-gray-700 mb-1">
                                    Paciente <span class="text-red-500">*</span>
                                </label>
                                <select name="paciente_id" id="paciente_id" required
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    <option value="">Seleccione un paciente</option>
                                    @foreach($pacientes as $paciente)
                                        <option value="{{ $paciente->id }}" {{ old('paciente_id') == $paciente->id ? 'selected' : '' }}>
                                            {{ $paciente->nombre }} {{ $paciente->apellido }}
                                            @if($paciente->cedula) ({{ $paciente->cedula }}) @endif
                                        </option>
                                    @endforeach
                                </select>
                                @error('paciente_id')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Doctor Selection -->
                            <div>
                                <label for="doctor_id" class="block text-sm font-medium text-gray-700 mb-1">
                                    Médico <span class="text-red-500">*</span>
                                </label>
                                <select name="doctor_id" id="doctor_id" required
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    <option value="">Seleccione un médico</option>
                                    @foreach($doctores as $doctor)
                                        <option value="{{ $doctor->id }}" {{ old('doctor_id') == $doctor->id ? 'selected' : '' }}>
                                            {{ $doctor->nombre }} {{ $doctor->apellido }} ({{ $doctor->especialidad }})
                                        </option>
                                    @endforeach
                                </select>
                                @error('doctor_id')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- Date Selection -->
                            <div>
                                <label for="fecha" class="block text-sm font-medium text-gray-700 mb-1">
                                    Fecha <span class="text-red-500">*</span>
                                </label>
                                <input type="date" name="fecha" id="fecha" min="{{ date('Y-m-d') }}"
                                    value="{{ old('fecha') }}" required
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                @error('fecha')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Time Selection -->
                            <div>
                                <label for="hora" class="block text-sm font-medium text-gray-700 mb-1">
                                    Hora <span class="text-red-500">*</span>
                                </label>
                                <input type="time" name="hora" id="hora"
                                    value="{{ old('hora') }}" required
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                @error('hora')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Consultation Reason -->
                        <div class="mb-6">
                            <label for="motivo" class="block text-sm font-medium text-gray-700 mb-1">
                                Motivo de la consulta <span class="text-red-500">*</span>
                            </label>
                            <textarea name="motivo" id="motivo" rows="3" required
                                class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('motivo') }}</textarea>
                            @error('motivo')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Additional Notes -->
                        <div class="mb-6">
                            <label for="notas" class="block text-sm font-medium text-gray-700 mb-1">
                                Notas adicionales (Opcional)
                            </label>
                            <textarea name="notas" id="notas" rows="2"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('notas') }}</textarea>
                            @error('notas')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Status Selection -->
                        <div class="mb-8">
                            <label for="status" class="block text-sm font-medium text-gray-700 mb-1">
                                Estado <span class="text-red-500">*</span>
                            </label>
                            <select name="status" id="status" required
                                class="w-full md:w-1/3 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                <option value="pendiente" {{ old('status', 'pendiente') == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                                <option value="confirmada" {{ old('status') == 'confirmada' ? 'selected' : '' }}>Confirmada</option>
                                <option value="completada" {{ old('status') == 'completada' ? 'selected' : '' }}>Completada</option>
                                <option value="cancelada" {{ old('status') == 'cancelada' ? 'selected' : '' }}>Cancelada</option>
                            </select>
                            @error('status')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Form Actions -->
                        <div class="flex justify-between items-center pt-6 border-t border-gray-200">
                            <a href="{{ route('admin.cita.index') }}"
                                class="inline-flex items-center px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-800 rounded-md transition">
                                <i class="fas fa-arrow-left mr-2"></i> Cancelar
                            </a>
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md transition">
                                <i class="fas fa-calendar-check mr-2"></i> Programar Cita
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Set minimum time (8am) and maximum time (6pm) for appointment hours
            document.addEventListener('DOMContentLoaded', function() {
                const horaInput = document.getElementById('hora');
                horaInput.min = '08:00';
                horaInput.max = '18:00';

                // Disable weekends in date picker
                const fechaInput = document.getElementById('fecha');
                fechaInput.addEventListener('input', function(e) {
                    const day = new Date(this.value).getUTCDay();
                    if([0, 6].includes(day)) {
                        this.setCustomValidity('No se permiten citas los fines de semana');
                    } else {
                        this.setCustomValidity('');
                    }
                });
            });
        </script>
    @endpush
</x-admin-layout>
