@extends('layout.navbar')

@section('title', 'Inicio')

@section('content')
<div class="text-center">
    <h1 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-blue-500">
        Bienvenido al Portal de Programación Paralela y Distribuida
    </h1>
    <p class="mt-4 text-lg text-gray-400">Explora el fascinante mundo de la programación paralela y distribuida.</p>
    <p class="text-gray-500">Creado por: Juan Reyes, Full stack Developer</p>
</div>

<section class="px-2 py-32 bg-white md:px-0">
    <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
        <div class="flex flex-wrap items-center sm:-mx-3">
            <div class="w-full md:w-1/2 md:px-3">
                <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
                    <h3 class="text-xl">¿Qué es este portal?</h3>
                    <h2 class="text-4xl text-red-600">Bienvenidos</h2>
                    <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                        Este portal está dedicado a proporcionar información y recursos sobre la Programación Paralela y Distribuida (PPD). Aquí encontrarás artículos, tutoriales y ejemplos prácticos que te ayudarán a comprender y aplicar técnicas de PPD en tus proyectos.
                    </p>
                    <div class="relative flex">
                        <a href="#_"
                            class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
                            Explorar más
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                    <img src="https://www.unir.net/wp-content/uploads/2024/01/La-computacion-paralela-caracteristicas-tipos-y-usos1.jpg" alt="Computación Paralela" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Secciones Destacadas -->
<section class="px-2 py-16 bg-gray-100 md:px-0">
    <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
        <div class="flex flex-wrap items-center sm:-mx-3">
            <!-- Evolución Tecnológica -->
            <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-2">Evolución Tecnológica</h3>
                    <p class="mb-4">Descubre la historia y evolución de la programación paralela y distribuida.</p>
                    <a href="{{ route('evolucion.index') }}" class="text-blue-500 hover:underline">Leer más</a>
                </div>
            </div>
            <!-- Arquitecturas de Soporte -->
            <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-2">Arquitecturas de Soporte</h3>
                    <p class="mb-4">Conoce las principales arquitecturas utilizadas en PPD.</p>
                    <a href="{{ route('arquitectura.index') }}" class="text-blue-500 hover:underline">Leer más</a>
                </div>
            </div>
            <!-- Técnicas de Programación Paralela -->
            <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-2">Técnicas de Programación Paralela</h3>
                    <p class="mb-4">Aprende sobre las técnicas más empleadas en programación paralela.</p>
                    <a href="{{ route('tecnica.index') }}" class="text-blue-500 hover:underline">Leer más</a>
                </div>
            </div>
            <!-- Aplicaciones de PPD -->
            <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-2">Aplicaciones de PPD</h3>
                    <p class="mb-4">Explora las aplicaciones prácticas de la PPD.</p>
                    <a href="{{ route('aplicacion.index') }}" class="text-blue-500 hover:underline">Leer más</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contacto -->
<section class="px-2 py-16 bg-white md:px-0">
    <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
        <div class="flex flex-wrap items-center sm:-mx-3">
            <div class="w-full text-center">
                <p class="mt-2 text-lg text-gray-600">Si tienes alguna pregunta o necesitas más información, no dudes en <a href="/contacto" class="text-blue-500 hover:underline">contactarnos</a>.</p>
            </div>
        </div>
    </div>
</section>
@endsection
