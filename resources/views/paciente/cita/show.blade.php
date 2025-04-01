<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles de la Cita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-10 bg-white">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-bold text-indigo-600">
                            Cita #{{ $cita->id }} - {{ ucfirst($cita->status) }}
                        </h3>
                        <span class="px-3 py-1 rounded-full text-sm font-medium
                            @if($cita->status == 'confirmada') bg-green-100 text-green-800
                            @elseif($cita->status == 'pendiente') bg-yellow-100 text-yellow-800
                            @elseif($cita->status == 'cancelada') bg-red-100 text-red-800
                            @else bg-blue-100 text-blue-800 @endif">
                            {{ ucfirst($cita->status) }}
                        </span>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-medium text-gray-500 mb-2">Información del Paciente</h4>
                            <p class="text-lg font-semibold">{{ $cita->paciente->nombre }} {{ $cita->paciente->apellido }}</p>
                            <p class="text-gray-600">{{ $cita->paciente->telefono ?? 'Sin teléfono' }}</p>
                            <p class="text-gray-600">{{ $cita->paciente->email ?? 'Sin email' }}</p>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-medium text-gray-500 mb-2">Información del Doctor</h4>
                            <p class="text-lg font-semibold">{{ $cita->doctor->nombre }} {{ $cita->doctor->apellido }}</p>
                            <p class="text-gray-600">{{ $cita->doctor->especialidad }}</p>
                            <p class="text-gray-600">{{ $cita->doctor->telefono ?? 'Sin teléfono' }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-medium text-gray-500 mb-1">Fecha</h4>
                            <p class="text-lg font-medium">{{ \Carbon\Carbon::parse($cita->fecha)->format('d M Y') }}</p>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-medium text-gray-500 mb-1">Hora</h4>
                            <p class="text-lg font-medium">{{ \Carbon\Carbon::parse($cita->hora)->format('h:i A') }}</p>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-medium text-gray-500 mb-1">Duración</h4>
                            <p class="text-lg font-medium">30 minutos</p>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h4 class="font-medium text-gray-500 mb-2">Motivo de la Consulta</h4>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-800">{{ $cita->motivo ?? 'No especificado' }}</p>
                        </div>
                    </div>

                    @if($cita->notas)
                    <div class="mb-6">
                        <h4 class="font-medium text-gray-500 mb-2">Notas Adicionales</h4>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-800">{{ $cita->notas }}</p>
                        </div>
                    </div>
                    @endif

                    <div class="flex justify-between items-center mt-8 pt-5 border-t border-gray-200">
                        <div class="flex space-x-3">
                            @if($cita->status == 'pendiente')
                            <form action="{{ route('cita.approve', $cita->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                            </form>
                            @endif

                            @if($cita->status != 'cancelada')
                            <form action="{{ route('cita.cancel', $cita->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                            </form>
                            @endif
                        </div>

                        <div class="flex space-x-3">
                            <a href="{{ route('paciente.cita.edit', $cita->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md transition">
                                Editar Cita
                            </a>
                            <a href="{{ route('paciente.cita.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md transition">
                                Volver al Listado
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
