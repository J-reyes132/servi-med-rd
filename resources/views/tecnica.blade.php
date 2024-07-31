@extends('layout.navbar')

@section('title', 'Técnicas de Programación Paralela')

@section('content')
    <div class="container mx-auto p-4">
        <!-- Título de la Página -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-blue-500">
                Técnicas de Programación Paralela
            </h1>
            <p class="mt-4 text-lg text-gray-400">Explora las principales técnicas utilizadas en la programación paralela.</p>
        </div>

        <!-- Introducción -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-800">Introducción</h2>
            <p class="mt-2 text-gray-500">
                La programación paralela permite ejecutar múltiples procesos simultáneamente, mejorando la eficiencia y el rendimiento de las aplicaciones. A continuación, se presentan algunas de las técnicas más comunes utilizadas en la programación paralela.
            </p>
        </section>

        <!-- Técnicas de Programación Paralela -->
        <section class="mb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Técnica 1: Multithreading -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-2 text-gray-800">Multithreading</h3>
                    <p class="mb-4 text-gray-500">
                        El multithreading permite ejecutar múltiples hilos dentro de un solo proceso. Cada hilo puede ejecutarse de forma concurrente, lo que mejora la eficiencia y el rendimiento de las aplicaciones.
                    </p>
                    <a href="https://example.com/multithreading" class="text-blue-500 hover:underline">Leer más</a>
                </div>
                <!-- Técnica 2: MPI (Message Passing Interface) -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-2 text-gray-800">MPI (Message Passing Interface)</h3>
                    <p class="mb-4 text-gray-500">
                        MPI es un estándar para la programación paralela en sistemas distribuidos. Permite la comunicación entre procesos que se ejecutan en diferentes nodos de una red, facilitando el desarrollo de aplicaciones paralelas en entornos de supercomputación.
                    </p>
                    <a href="https://example.com/mpi" class="text-blue-500 hover:underline">Leer más</a>
                </div>
                <!-- Técnica 3: OpenMP -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-2 text-gray-800">OpenMP</h3>
                    <p class="mb-4 text-gray-500">
                        OpenMP es una API que soporta la programación paralela en memoria compartida. Utiliza directivas en el código fuente para indicar las regiones de código que deben ejecutarse en paralelo, simplificando el desarrollo de aplicaciones paralelas.
                    </p>
                    <a href="https://example.com/openmp" class="text-blue-500 hover:underline">Leer más</a>
                </div>
                <!-- Técnica 4: CUDA -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-2 text-gray-800">CUDA</h3>
                    <p class="mb-4 text-gray-500">
                        CUDA es una plataforma de computación paralela y una API creada por NVIDIA. Permite a los desarrolladores utilizar GPUs para realizar cálculos paralelos, acelerando tareas intensivas en cálculo como el procesamiento de imágenes y la simulación científica.
                    </p>
                    <a href="https://example.com/cuda" class="text-blue-500 hover:underline">Leer más</a>
                </div>
                <!-- Técnica 5: MapReduce -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-2 text-gray-800">MapReduce</h3>
                    <p class="mb-4 text-gray-500">
                        MapReduce es un modelo de programación utilizado para el procesamiento y generación de grandes conjuntos de datos. Divide las tareas en subtareas más pequeñas que se ejecutan en paralelo y luego se combinan para obtener el resultado final.
                    </p>
                    <a href="https://example.com/mapreduce" class="text-blue-500 hover:underline">Leer más</a>
                </div>
            </div>
        </section>

        <!-- Recursos Adicionales -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-800">Recursos Adicionales</h2>
            <p class="mt-2 text-gray-500">
                Aquí encontrarás enlaces a recursos adicionales sobre las técnicas de programación paralela, incluyendo artículos, tutoriales y videos.
            </p>
            <div class="flex flex-wrap gap-4 mt-4">
                <a href="https://example.com/articulo1" class="px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700">Artículo 1</a>
                <a href="https://example.com/articulo2" class="px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700">Artículo 2</a>
                <a href="https://example.com/video1" class="px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700">Video 1</a>
                <a href="https://example.com/video2" class="px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700">Video 2</a>
            </div>
        </section>

        <!-- Contacto -->
        <section class="mt-8 text-center">
            <h2 class="text-2xl font-semibold text-gray-800">Contacto</h2>
            <p class="mt-2 text-lg text-gray-600">Si tienes alguna pregunta o necesitas más información, no dudes en <a href="/contacto" class="text-blue-500 hover:underline">contactarnos</a>.</p>
        </section>
    </div>
@endsection
