<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Detalles del Doctor') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center">
        <div class="w-full max-w-4xl bg-white shadow-md rounded-lg p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="text-sm font-medium text-gray-700">Usuario Asociado</label>
                    <p class="text-lg text-gray-900">{{ $doctor->user->name ?? 'N/A' }}</p>
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700">Cédula</label>
                    <p class="text-lg text-gray-900">{{ $doctor->cedula }}</p>
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700">Nombre</label>
                    <p class="text-lg text-gray-900">{{ $doctor->nombre }}</p>
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700">Apellido</label>
                    <p class="text-lg text-gray-900">{{ $doctor->apellido }}</p>
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700">Email</label>
                    <p class="text-lg text-gray-900">{{ $doctor->email }}</p>
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700">Especialidad</label>
                    <p class="text-lg text-gray-900">{{ $doctor->especialidad }}</p>
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700">Teléfono</label>
                    <p class="text-lg text-gray-900">{{ $doctor->telefono }}</p>
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700">Exequatur</label>
                    <p class="text-lg text-gray-900">{{ $doctor->exequatur }}</p>
                </div>
            </div>

            <div class="flex justify-end mt-6">
                <a href="{{ route('admin.doctor.index') }}" class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg transition">
                    Volver
                </a>
            </div>
        </div>
    </div>
</x-admin-layout>
