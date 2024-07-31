@extends('layout.navbar')

@section('title', 'Referencias')

@section('content')
    <div class="container mx-auto p-4">
        <!-- Título de la Página -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-blue-500">
                Referencias
            </h1>
            <p class="mt-4 text-lg text-gray-400">Recursos y referencias utilizados en este portal.</p>
        </div>

        <!-- Lista de Referencias -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-800">Lista de Referencias</h2>
            <p class="mt-2 text-gray-500">
                A continuación, se presentan los recursos y referencias que han sido utilizados para compilar la información en este portal.
            </p>
            <ul class="list-disc list-inside mt-4 text-gray-500">
                <li><a href="https://example.com/articulo1" class="text-blue-500 hover:underline">Artículo 1: Historia Temprana del Automóvil</a></li>
                <li><a href="https://example.com/articulo2" class="text-blue-500 hover:underline">Artículo 2: Evolución de la Seguridad en Automóviles</a></li>
                <li><a href="https://example.com/video1" class="text-blue-500 hover:underline">Video 1: La Revolución del Ford Model T</a></li>
                <li><a href="https://example.com/video2" class="text-blue-500 hover:underline">Video 2: Innovaciones Modernas en Automóviles</a></li>
                <li><a href="https://example.com/tutorial1" class="text-blue-500 hover:underline">Tutorial 1: Cómo Funcionan los Vehículos Eléctricos</a></li>
                <li><a href="https://example.com/tutorial2" class="text-blue-500 hover:underline">Tutorial 2: Introducción a los Coches Autónomos</a></li>
                <!-- Añade más referencias según sea necesario -->
            </ul>
        </section>

        <!-- Recursos Adicionales -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-800">Recursos Adicionales</h2>
            <p class="mt-2 text-gray-500">
                Aquí encontrarás enlaces a recursos adicionales que pueden ser de interés para profundizar en los temas tratados en este portal.
            </p>
            <div class="flex flex-wrap gap-4 mt-4">
                <a href="https://example.com/adicional1" class="px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700">Recurso Adicional 1</a>
                <a href="https://example.com/adicional2" class="px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700">Recurso Adicional 2</a>
                <a href="https://example.com/adicional3" class="px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700">Recurso Adicional 3</a>
            </div>
        </section>

        <!-- Contacto -->
        <section class="mt-8 text-center">
            <h2 class="text-2xl font-semibold text-gray-800">Contacto</h2>
            <p class="mt-2 text-lg text-gray-600">Si tienes alguna pregunta o necesitas más información, no dudes en <a href="/contacto" class="text-blue-500 hover:underline">contactarnos</a>.</p>
        </section>
    </div>
@endsection
