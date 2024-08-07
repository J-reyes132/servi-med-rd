<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles de la Cita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Paciente</label>
                        <p class="text-lg text-gray-900">{{ $cita->paciente->nombre }} {{ $cita->paciente->apellido }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Doctor</label>
                        <p class="text-lg text-gray-900">{{ $cita->doctor->nombre }} {{ $cita->doctor->apellido }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Hospital</label>
                        <p class="text-lg text-gray-900">{{ $cita->hospital->nombre }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Fecha</label>
                        <p class="text-lg text-gray-900">{{ $cita->fecha }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Hora</label>
                        <p class="text-lg text-gray-900">{{ $cita->hora }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Motivo</label>
                        <p class="text-lg text-gray-900">{{ $cita->motivo }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Estado</label>
                        <p class="text-lg text-gray-900">{{ ucfirst($cita->status) }}</p>
                    </div>

                    <div class="flex justify-end mt-6">
                        <a href="{{ route('admin.cita.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Volver
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
