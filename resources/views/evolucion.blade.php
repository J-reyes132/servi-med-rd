@extends('layout.navbar')

@section('title', 'Evolución de la Tecnología de Automóviles')

@section('content')
    <div class="container mx-auto p-4">
        <!-- Título de la Página -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-blue-500">
                Evolución de la Tecnología de Automóviles
            </h1>
            <p class="mt-4 text-lg text-gray-400">Descubre cómo ha evolucionado la tecnología de los automóviles a lo largo del tiempo.</p>
        </div>

        <!-- Introducción -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-800">Introducción</h2>
            <p class="mt-2 text-gray-500">
                La tecnología de los automóviles ha avanzado significativamente desde la invención del primer coche. A lo largo de los años, hemos visto mejoras notables en términos de seguridad, eficiencia, comodidad y sostenibilidad. Este recorrido nos lleva desde los primeros coches impulsados por vapor hasta los modernos vehículos eléctricos y autónomos.
            </p>
        </section>

        <!-- Historia Temprana -->
        <section class="mb-8 flex flex-wrap items-center">
            <div class="w-full md:w-1/2 md:px-3">
                <h2 class="text-2xl font-semibold text-gray-800">Historia Temprana</h2>
                <p class="mt-2 text-gray-500">
                    La historia del automóvil comienza en 1886 con Karl Benz, quien desarrolló el Benz Patent-Motorwagen, considerado el primer automóvil. Estos primeros coches funcionaban con motores de combustión interna y eran lujos exclusivos para los ricos.
                </p>
            </div>
            <div class="w-full md:w-1/2 md:px-3">
                <img src=https://cdn.autobild.es/sites/navi.axelspringer.es/public/media/image/2016/01/505221-primer-automovil-moderno.jpg?tf=1200x" alt="Coches tempranos" class="rounded-lg shadow-lg mt-4">
            </div>
        </section>

        <!-- Revolución Industrial -->
        <section class="mb-8 flex flex-wrap items-center">
            <div class="w-full md:w-1/2 md:px-3">
                <img src="https://lubridealer.com/wp-content/uploads/2021/07/ford_4-1.jpg" alt="Ford Model T" class="rounded-lg shadow-lg mt-4">
            </div>
            <div class="w-full md:w-1/2 md:px-3">
                <h2 class="text-2xl font-semibold text-gray-800">Revolución Industrial y Producción en Masa</h2>
                <p class="mt-2 text-gray-500">
                    La producción en masa revolucionó la industria automotriz. En 1913, Henry Ford introdujo la línea de ensamblaje para fabricar el Ford Model T, haciendo los coches más asequibles y accesibles para la población general.
                </p>
            </div>
        </section>

        <!-- Innovaciones en Seguridad -->
        <section class="mb-8 flex flex-wrap items-center">
            <div class="w-full md:w-1/2 md:px-3">
                <h2 class="text-2xl font-semibold text-gray-800">Innovaciones en Seguridad</h2>
                <p class="mt-2 text-gray-500">
                    A medida que los coches se volvieron más comunes, la seguridad se convirtió en una prioridad. Innovaciones como los cinturones de seguridad, los airbags y los frenos antibloqueo (ABS) han salvado innumerables vidas y se han convertido en características estándar en los vehículos modernos.
                </p>
            </div>
            <div class="w-full md:w-1/2 md:px-3">
                <img src="https://cdn.urbantecno.com/urbantecno/2021/05/Innovaciones-en-seguridad-automovil%C3%ADstica.jpg?width=1200" alt="Innovaciones en Seguridad" class="rounded-lg shadow-lg mt-4">
            </div>
        </section>

        <!-- Tecnología Moderna y Futuro -->
        <section class="mb-8 flex flex-wrap items-center">
            <div class="w-full md:w-1/2 md:px-3">
                <img src="https://www.ciutatdelmotor.com/wp-content/uploads/avencos-tecnologics-seguretat-automobil.jpg" alt="Coches modernos" class="rounded-lg shadow-lg mt-4">
            </div>
            <div class="w-full md:w-1/2 md:px-3">
                <h2 class="text-2xl font-semibold text-gray-800">Tecnología Moderna y Futuro</h2>
                <p class="mt-2 text-gray-500">
                    Hoy en día, los coches están equipados con tecnología avanzada como sistemas de navegación GPS, cámaras de visión trasera y conectividad Bluetooth. Además, los vehículos eléctricos y autónomos están liderando la transformación hacia un futuro más sostenible y eficiente.
                </p>
            </div>
        </section>

        <!-- Recursos Adicionales -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-800">Recursos Adicionales</h2>
            <p class="mt-2 text-gray-500">
                Aquí encontrarás enlaces a recursos adicionales sobre la evolución de la tecnología de automóviles, incluyendo artículos, tutoriales y videos.
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
