<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles del Horario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Doctor</label>
                        <p class="text-lg text-gray-900">{{ $horario->doctor->nombre }} {{ $horario->doctor->apellido }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Día de la Semana</label>
                        <p class="text-lg text-gray-900">{{ $horario->day_of_week }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Hora de Inicio</label>
                        <p class="text-lg text-gray-900">{{ $horario->hora_inicio }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Hora de Fin</label>
                        <p class="text-lg text-gray-900">{{ $horario->hora_fin }}</p>
                    </div>

                    <div class="flex justify-end mt-6">
                        <a href="{{ route('admin.horario.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Volver
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
