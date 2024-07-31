@extends('layout.navbar')

@section('title', 'Aplicaciones de PPD')

@section('content')
    <div class="container mx-auto p-4">
        <!-- Título de la Página -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-blue-500">
                Aplicaciones de Programación Paralela y Distribuida
            </h1>
            <p class="mt-4 text-lg text-gray-400">Explora cómo la programación paralela y distribuida se utiliza en la práctica.</p>
        </div>

        <!-- Descripción General -->
        <div class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-800">¿Dónde se aplica la PPD?</h2>
            <p class="mt-2 text-gray-500">
                La programación paralela y distribuida se aplica en una variedad de campos donde se requiere procesamiento intensivo y eficiencia en el manejo de datos. Desde la simulación científica y la modelización climática hasta la inteligencia artificial y el análisis de big data, la PPD juega un papel crucial en la mejora del rendimiento y la escalabilidad de las aplicaciones.
            </p>
        </div>

        <!-- Ejemplos de Aplicaciones -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-8">
            <!-- Ejemplo 1 -->
            <div class="bg-green-200 p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-2 text-gray-800">Simulación Científica</h3>
                <p class="mb-4 text-gray-500">
                    Las simulaciones científicas, como la modelización climática y la dinámica de fluidos computacional, utilizan PPD para procesar grandes volúmenes de datos y realizar cálculos complejos en paralelo.
                </p>
                <a href="https://cryospain.com/es/dinamica-fluidos-computacional-esta-revolucionando-proyectos-ingenieria" class="text-blue-500 hover:underline">Leer más</a>
            </div>
            <!-- Ejemplo 2 -->
            <div class="bg-green-300 p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-2 text-gray-800">Inteligencia Artificial</h3>
                <p class="mb-4 text-gray-600">
                    Los algoritmos de inteligencia artificial y aprendizaje automático se benefician enormemente de la PPD, permitiendo el entrenamiento de modelos complejos en menor tiempo y con mayores volúmenes de datos.
                </p>
                <a href="https://www.linkedin.com/advice/0/what-some-emerging-trends-applications-parallel?lang=es&originalSubdomain=es" class="text-blue-600 hover:underline">Leer más</a>
            </div>
            <!-- Ejemplo 3 -->
            <div class="bg-green-400 p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-2 text-gray-800">Big Data</h3>
                <p class="mb-4 text-gray-700">
                    El análisis de big data requiere el procesamiento eficiente de grandes conjuntos de datos, lo cual se logra mediante técnicas de PPD para distribuir la carga de trabajo y acelerar los tiempos de procesamiento.
                </p>
                <a href="https://keepcoding.io/blog/que-es-la-computacion-paralela/" class="text-blue-700 hover:underline">Leer más</a>
            </div>
        </div>

        <!-- Recursos Adicionales -->
        <div class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-800">Recursos Adicionales</h2>
            <p class="mt-2 text-gray-500">
                Aquí encontrarás enlaces a recursos adicionales sobre la programación paralela y distribuida, incluyendo artículos, tutoriales y videos.
            </p>
            <div class="flex flex-wrap gap-4 mt-4">
                <a href="https://www.youtube.com/watch?v=OKvWY_2cZAY" class="px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700">Big data, super algoritmos y procesadores: El machine learning que conduce autos</a>
                <a href="https://www.youtube.com/watch?v=Svpgi5Hf26g" class="px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700">Qué es la computación paralela</a>
            </div>
        </div>
    </div>
@endsection
