<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles del Paciente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Usuario Asociado</label>
                        <p class="text-lg text-gray-900">{{ $paciente->user->name ?? 'N/A' }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Cédula</label>
                        <p class="text-lg text-gray-900">{{ $paciente->cedula }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Nombre</label>
                        <p class="text-lg text-gray-900">{{ $paciente->nombre }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Apellido</label>
                        <p class="text-lg text-gray-900">{{ $paciente->apellido }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <p class="text-lg text-gray-900">{{ $paciente->email }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Teléfono</label>
                        <p class="text-lg text-gray-900">{{ $paciente->telefono }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Fecha de Nacimiento</label>
                        <p class="text-lg text-gray-900">{{ $paciente->fecha_nacimiento }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Sexo</label>
                        <p class="text-lg text-gray-900">{{ $paciente->sexo }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Edad</label>
                        <p class="text-lg text-gray-900">{{ $paciente->edad }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Dirección</label>
                        <p class="text-lg text-gray-900">{{ $paciente->direccion }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Peso</label>
                        <p class="text-lg text-gray-900">{{ $paciente->peso }} kg</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Altura</label>
                        <p class="text-lg text-gray-900">{{ $paciente->altura }} cm</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Tipo de Sangre</label>
                        <p class="text-lg text-gray-900">{{ $paciente->tipo_sangre }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Enfermedades</label>
                        <p class="text-lg text-gray-900">{{ $paciente->enfermedades ?? 'Ninguna' }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Nombre del Seguro</label>
                        <p class="text-lg text-gray-900">{{ $paciente->nombre_seguro ?? 'N/A' }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Número del Seguro</label>
                        <p class="text-lg text-gray-900">{{ $paciente->numero_seguro ?? 'N/A' }}</p>
                    </div>

                    <div class="flex justify-end mt-6">
                        <a href="{{ route('admin.paciente.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Volver
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
