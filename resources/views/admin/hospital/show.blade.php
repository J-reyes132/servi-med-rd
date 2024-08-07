<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles del Hospital') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Nombre</label>
                        <p class="text-lg text-gray-900">{{ $hospital->nombre }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Dirección</label>
                        <p class="text-lg text-gray-900">{{ $hospital->direccion }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Teléfono</label>
                        <p class="text-lg text-gray-900">{{ $hospital->telefono }}</p>
                    </div>

                    <div class="flex justify-end mt-6">
                        <a href="{{ route('admin.hospital.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Volver
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
