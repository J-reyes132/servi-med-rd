<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestión de Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between m-2 p-2">
                <a href="{{ route('admin.dashboard') }}"
                   class="px-4 py-2 bg-gray-500 hover:bg-gray-700 rounded-lg text-white">
                    Volver al Dashboard
                </a>
                <a href="{{ route('admin.users.create') }}"
                   class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">
                    + Nuevo Usuario
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="overflow-x-auto relative">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3 px-6">Nombre</th>
                                    <th scope="col" class="py-3 px-6">Email</th>
                                    <th scope="col" class="py-3 px-6">Rol</th>
                                    <th scope="col" class="py-3 px-6">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $user->name }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $user->email }}
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="px-2 py-1 text-xs font-semibold rounded-full
                                            {{ $user->role === 'admin' ? 'bg-purple-100 text-purple-800' :
                                               ($user->role === 'doctor' ? 'bg-blue-100 text-blue-800' : 'bg-green-100 text-green-800') }}">
                                            {{ $user->role }}
                                        </span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex space-x-2">
                                            <a href="{{ route('admin.users.show', $user->id) }}"
                                               class="text-blue-500 hover:text-blue-700">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.users.edit', $user->id) }}"
                                               class="text-yellow-500 hover:text-yellow-700">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                                  onsubmit="return confirm('¿Estás seguro de eliminar este usuario?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-700">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
