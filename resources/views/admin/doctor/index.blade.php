<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Doctores') }}
        </h2>
    </x-slot>

    <div class="bg-white p-6 rounded shadow">
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-bold">Doctores</h2>
            <a href="{{ route('admin.doctor.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-purple-700 transition">
                + Agregar Doctor
            </a>
        </div>
        <table class="w-full mt-4 border-collapse bg-white shadow rounded-lg overflow-hidden">
            <thead class="bg-gray-200">
                <tr>
                    <th class="p-3 text-left">Cédula</th>
                    <th class="p-3 text-left">Nombre</th>
                    <th class="p-3 text-left">Apellido</th>
                    <th class="p-3 text-left">Email</th>
                    <th class="p-3 text-left">Especialidad</th>
                    <th class="p-3 text-left">Teléfono</th>
                    <th class="p-3 text-left">Exequatur</th>
                    <th class="p-3 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doctors as $doctor)
                <tr class="border-b hover:bg-gray-100 transition">
                    <td class="p-3 text-gray-700">{{ $doctor->cedula }}</td>
                    <td class="p-3 text-gray-700">{{ $doctor->nombre }}</td>
                    <td class="p-3 text-gray-700">{{ $doctor->apellido }}</td>
                    <td class="p-3 text-gray-700">{{ $doctor->email }}</td>
                    <td class="p-3 text-gray-700">{{ $doctor->especialidad }}</td>
                    <td class="p-3 text-gray-700">{{ $doctor->telefono }}</td>
                    <td class="p-3 text-gray-700">{{ $doctor->exequatur }}</td>
                    <td class="p-3 flex justify-center gap-2">
                        <a href="{{ route('admin.doctor.show', $doctor->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-700 transition text-sm">
                            Ver
                        </a>
                        <a href="{{ route('admin.doctor.edit', $doctor->id) }}" class="bg-gray-500 text-white px-3 py-1 rounded hover:bg-yellow-700 transition text-sm">
                            Editar
                        </a>
                        <form action="{{ route('admin.doctor.destroy', $doctor->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700 transition text-sm" onclick="return confirm('¿Estás seguro?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</x-admin-layout>



