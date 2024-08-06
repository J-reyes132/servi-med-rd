<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles del Doctor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Usuario Asociado</label>
                        <p class="text-lg text-gray-900">{{ $doctor->user->name ?? 'N/A' }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Cédula</label>
                        <p class="text-lg text-gray-900">{{ $doctor->cedula }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Nombre</label>
                        <p class="text-lg text-gray-900">{{ $doctor->nombre }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Apellido</label>
                        <p class="text-lg text-gray-900">{{ $doctor->apellido }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <p class="text-lg text-gray-900">{{ $doctor->email }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Especialidad</label>
                        <p class="text-lg text-gray-900">{{ $doctor->especialidad }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Teléfono</label>
                        <p class="text-lg text-gray-900">{{ $doctor->telefono }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Exequatur</label>
                        <p class="text-lg text-gray-900">{{ $doctor->exequatur }}</p>
                    </div>

                    <div class="flex justify-end mt-6">
                        <a href="{{ route('admin.doctor.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Volver
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
