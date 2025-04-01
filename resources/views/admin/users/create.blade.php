<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Nuevo Usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.users.index') }}"
                   class="px-4 py-2 bg-gray-500 hover:bg-gray-700 rounded-lg text-white">
                    Volver al Listado
                </a>
            </div>

            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 max-w-2xl">
                    <form method="POST" action="{{ route('admin.users.store') }}" class="mt-10">
                        @csrf
                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium text-gray-700">
                                    Nombre Completo *
                                </label>
                                <div class="mt-1">
                                    <input type="text" id="name" name="name" required
                                           class="block w-full rounded-md border-gray-300 shadow-sm
                                                  focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    @error('name')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="email" class="block text-sm font-medium text-gray-700">
                                    Email *
                                </label>
                                <div class="mt-1">
                                    <input type="email" id="email" name="email" required
                                           class="block w-full rounded-md border-gray-300 shadow-sm
                                                  focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    @error('email')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="password" class="block text-sm font-medium text-gray-700">
                                    Contraseña *
                                </label>
                                <div class="mt-1">
                                    <input type="password" id="password" name="password" required
                                           class="block w-full rounded-md border-gray-300 shadow-sm
                                                  focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    @error('password')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                                    Confirmar Contraseña *
                                </label>
                                <div class="mt-1">
                                    <input type="password" id="password_confirmation" name="password_confirmation" required
                                           class="block w-full rounded-md border-gray-300 shadow-sm
                                                  focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="role" class="block text-sm font-medium text-gray-700">
                                    Rol *
                                </label>
                                <div class="mt-1">
                                    <select id="role" name="role" required
                                            class="block w-full rounded-md border-gray-300 shadow-sm
                                                   focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        @foreach(App\Enums\UserRole::cases() as $role)
                                            <option value="{{ $role->value }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="pt-5">
                            <div class="flex justify-end">
                                <button type="submit"
                                        class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent
                                               shadow-sm text-sm font-medium rounded-md text-white bg-blue-500
                                               hover:bg-indigo-700 focus:outline-none focus:ring-2
                                               focus:ring-offset-2 focus:ring-blue-500">
                                    Guardar Usuario
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
