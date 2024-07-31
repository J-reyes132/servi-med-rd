@extends('layout.navbar')

@section('title', 'Arquitecturas de PPD')

@section('content')
    <div class="container mx-auto p-4">
        <!-- Título de la Página -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-blue-500">
                Arquitecturas de Programación Paralela y Distribuida
            </h1>
            <p class="mt-4 text-lg text-gray-400">Explora las principales arquitecturas utilizadas en la programación paralela y distribuida.</p>
        </div>

        <!-- Descripción General -->
        <div class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-800">¿Qué son las arquitecturas de PPD?</h2>
            <p class="mt-2 text-gray-500">
                Las arquitecturas de programación paralela y distribuida (PPD) son estructuras que permiten la ejecución simultánea de múltiples procesos o tareas. Estas arquitecturas pueden ser de varios tipos, incluyendo arquitecturas de memoria compartida, arquitecturas de memoria distribuida, y arquitecturas híbridas. Cada tipo tiene sus propias ventajas y aplicaciones específicas.
            </p>
        </div>

        <!-- Ejemplos de Arquitecturas -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-8">
            <!-- Ejemplo 1 -->
            <div class="bg-slate-300 p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-2 text-gray-800">Memoria Compartida</h3>
                <p class="mb-4 text-gray-500">
                    En una arquitectura de memoria compartida, múltiples procesadores comparten una única memoria física. Esto permite una comunicación rápida entre procesos, pero puede generar problemas de sincronización y coherencia de caché.
                </p>
                <a href="https://www.ibm.com/docs/es/power8?topic=memory-shared" class="text-blue-500 hover:underline">Leer más</a>
            </div>
            <!-- Ejemplo 2 -->
            <div class="bg-slate-300 p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-2 text-gray-800">Memoria Distribuida</h3>
                <p class="mb-4 text-gray-500">
                    En una arquitectura de memoria distribuida, cada procesador tiene su propia memoria local y los procesadores se comunican entre sí a través de una red. Esto elimina los problemas de coherencia de caché, pero puede incrementar la latencia de comunicación.
                </p>
                <a href="https://aws.amazon.com/es/what-is/distributed-computing/" class="text-blue-500 hover:underline">Leer más</a>
            </div>
            <!-- Ejemplo 3 -->
            <div class="bg-slate-300 p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-2 text-gray-800">Arquitectura Híbrida</h3>
                <p class="mb-4 text-gray-500">
                    Una arquitectura híbrida combina elementos de memoria compartida y distribuida. Es utilizada en sistemas modernos para aprovechar las ventajas de ambos enfoques y minimizar sus desventajas.
                </p>
                <a href="https://example.com/arquitectura-hibrida" class="text-blue-500 hover:underline">Leer más</a>
            </div>
        </div>

        <!-- Recursos Adicionales -->
        <div class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-800">Recursos Adicionales</h2>
            <p class="mt-2 text-gray-500">
                Aquí encontrarás enlaces a recursos adicionales sobre las arquitecturas de programación paralela y distribuida, incluyendo artículos, tutoriales y videos.
            </p>
            <div class="flex flex-wrap gap-4 mt-4">
                <a href="https://openaccess.uoc.edu/bitstream/10609/79549/2/Arquitecturas%20de%20computadores%20avanzadas_M%C3%B3dulo%202_Multiprocessadores%20y%20multicomputadores.pdf" class="px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700">Artículo 1</a>
                <a href="https://example.com/articulo2" class="px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700">Artículo 2</a>
                <a href="https://example.com/video1" class="px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700">Video 1</a>
                <a href="https://example.com/video2" class="px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700">Video 2</a>
            </div>
        </div>

        <!-- Contacto -->
        <div class="mt-8 text-center">
            <h2 class="text-2xl font-semibold text-gray-800">Contacto</h2>
            <p class="mt-2 text-lg text-gray-600">Si tienes alguna pregunta o necesitas más información, no dudes en <a href="/contacto" class="text-blue-500 hover:underline">contactarnos</a>.</p>
        </div>
    </div>
@endsection
