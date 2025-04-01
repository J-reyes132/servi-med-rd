<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Servi Med RD') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-blue-500 text-white p-4 flex flex-col space-y-4">
            <h1 class="text-lg font-bold">SERVI MED RD</h1>
            <nav class="space-y-2">
                <x-admin-nav-link href="{{ route('admin.paciente.index') }}">{{ __('Pacientes')}}</x-admin-nav-link>
                <x-admin-nav-link href="{{ route('admin.doctor.index') }}">Doctores</x-admin-nav-link>
                <x-admin-nav-link href="{{ route('admin.cita.index') }}">Citas</x-admin-nav-link>
                <x-admin-nav-link href="{{ route('admin.horario.index') }}">Horarios</x-admin-nav-link>
                <x-admin-nav-link href="{{ route('admin.historial.index') }}">Historiales Médicos</x-admin-nav-link>
                <x-admin-nav-link href="{{ route('admin.users.index') }}">Usuarios</x-admin-nav-link>
            </nav>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="w-full bg-red-500 text-white p-2 rounded">Cerrar sesión</button>
            </form>
        </div>

        <!-- Main Content -->
    <!-- Contenido Principal -->
    <main class="flex-1 p-6">
        @if (session()->has('danger'))
            <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg">
                <span class="font-medium">{{ session()->get('danger') }}!</span>
            </div>
        @endif
        @if (session()->has('success'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg">
                <span class="font-medium">{{ session()->get('success') }}!</span>
            </div>
        @endif
        @if (session()->has('warning'))
            <div class="p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg">
                <span class="font-medium">{{ session()->get('warning') }}!</span>
            </div>
        @endif

        {{ $slot }}
    </main>
    </div>
</body>
</html>
