<x-paciente-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalle del Historial Médico') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Fecha</label>
                        <p class="text-lg text-gray-900">{{ $historial->fecha }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Descripción</label>
                        <p class="text-lg text-gray-900">{{ $historial->descripcion }}</p>
                    </div>

                    @if($historial->documento)
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Documento</label>
                        <a href="{{ Storage::url($historial->documento) }}" target="_blank" class="text-indigo-600 hover:text-indigo-900">Ver Documento</a>
                    </div>
                    @endif

                    <div class="flex justify-end mt-6">
                        <a href="{{ route('paciente.historial.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Volver
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-paciente-layout>
