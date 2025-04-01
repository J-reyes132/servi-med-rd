<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalle de Historial Médico') }}
        </h2>
    </x-slot>

    <div class="bg-white p-6 rounded shadow">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <h3 class="text-lg font-semibold mb-2">Información del Paciente</h3>
                <p><strong>Nombre:</strong> {{ $historial->paciente->nombre }} {{ $historial->paciente->apellido }}</p>
                <p><strong>Identificación:</strong> {{ $historial->paciente->cedula }}</p>
            </div>

            <div>
                <h3 class="text-lg font-semibold mb-2">Detalles del Registro</h3>
                <p><strong>Fecha:</strong> {{ $historial->fecha }}</p>
                @if($historial->cita)
                <p><strong>Cita asociada:</strong> {{ $historial->cita->fecha }} a las {{ $historial->cita->hora }}</p>
                @endif
            </div>
        </div>

        <div class="mb-6">
            <h3 class="text-lg font-semibold mb-2">Descripción</h3>
            <div class="bg-gray-50 p-4 rounded-lg">
                {!! nl2br(e($historial->descripcion)) !!}
            </div>
        </div>

        @if($historial->documento)
        <div class="mb-6">
            <h3 class="text-lg font-semibold mb-2">Documento Adjunto</h3>
            <a href="{{ asset('storage/'.$historial->documento) }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
                <i class="fas fa-file-pdf mr-2"></i> Ver Documento
            </a>
        </div>
        @endif

        <div class="flex justify-end space-x-">
            <a href="{{ route('admin.historial.index') }}" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-gray-600 transition">
                Volver al listado
            </a>
            <a href="{{ route('admin.historial.edit', $historial->id) }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-yellow-600 transition">
                Editar Registro
            </a>
        </div>
    </div>
</x-admin-layout>
