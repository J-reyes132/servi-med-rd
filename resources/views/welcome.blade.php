<x-guest-layout>
    <!-- Main Hero Content -->
    <div class="container max-w-7xl px-4 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center"
        style="background-image: url('images/istockphoto-1159199214-612x612.jpg'); background-size: cover; background-blend-mode: multiply; opacity: 0.8; background-color: rgba(219, 234, 254, 0.7);">
        <h1 class="font-mono text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-800 md:text-center sm:leading-none lg:text-5xl">
            <span class="inline md:block">Bienvenido a Servi Med RD</span>
        </h1>
        <p class="mx-auto font-bold mt-2 text-gray-100 md:text-center lg:text-lg">
            Tu plataforma de confianza para la gestión de servicios médicos.
            <br>Accede y gestiona citas, pacientes y hospitales de manera eficiente y segura.
        </p>
        <div class="flex flex-col items-center mt-12 text-center">
            <span class="relative inline-flex w-full md:w-auto">
                <a href="{{ route('login') }}" type="button"
                    class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-blue-600 rounded-full lg:w-full md:w-auto hover:bg-blue-500 focus:outline-none">
                    Acceder
                </a>
            </span>
        </div>
    </div>
    <!-- End Main Hero Content -->

    <section class="px-2 py-32 bg-white text-gray-800 md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
                        <h3 class="text-xl">Sobre Servi Med RD</h3>
                        <h2 class="text-4xl text-blue-600">Bienvenidos</h2>
                        <p class="mx-auto text-base text-gray-600 sm:max-w-md lg:text-xl md:max-w-3xl">
                            Servi Med RD es una plataforma innovadora diseñada para optimizar la gestión de citas médicas,
                            la administración de pacientes y la coordinación con hospitales. Con un enfoque en la eficiencia y la seguridad,
                            nuestro objetivo es simplificar los procesos médicos para mejorar la experiencia tanto de los pacientes como de los profesionales de la salud.
                        </p>
                        <div class="relative flex">
                            <a href="{{ route('register') }}"
                                class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-blue-600 rounded-md sm:mb-0 hover:bg-blue-500 sm:w-auto">
                                Registrarse
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
                        <img src="images/medicine-doctor-hand-working-with-modern-computer-interface-1-scaled.jpg" alt="Gestión Médica" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-blue-50 text-gray-800">
        <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
            <div class="flex flex-wrap items-center -mx-3">
                <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                    <div class="w-full lg:max-w-md">
                        <h2 class="mb-4 text-2xl font-bold">Características</h2>
                        <h2 class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-blue-700">
                            ¿Por qué elegir Servi Med RD?</h2>
                        <p class="mb-4 font-medium tracking-tight text-gray-600 xl:mb-6">
                            Nuestra plataforma ofrece una gestión integral y segura de servicios médicos,
                            facilitando la comunicación entre pacientes, doctores y hospitales.
                        </p>
                        <ul>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                                    </path>
                                </svg>
                                <span class="font-medium text-gray-600">Procesamiento rápido y seguro</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-blue-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="font-medium text-gray-600">Interfaz intuitiva</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                                <span class="font-medium text-gray-600">Seguridad y privacidad garantizadas</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img
                        class="mx-auto sm:max-w-sm lg:max-w-full"
                        src="images/ramas-medicina-wide.jpg"
                        alt="Seguridad Médica"></div>
            </div>
        </div>
    </section>

    <section class="mt-8 bg-white text-gray-800">
        <div class="mt-4 text-center">
            <h3 class="text-2xl font-bold">Módulos del Sistema</h3>
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-blue-700">
                Gestión integral de servicios médicos</h2>
        </div>
        <div class="container w-full px-5 py-6 mx-auto">
            <div class="grid lg:grid-cols-3 gap-y-6">
                <!-- Módulo 1 -->
                <div class="max-w-xs mx-16 mb-3 rounded-lg shadow-lg bg-blue-50">
                    <div class="px-6 py-4">
                        <h4 class="mb-3 text-xl font-semibold tracking-tight text-gray-800">Gestión de Citas</h4>
                        <p class="leading-normal text-gray-600">Administra y organiza todas tus citas médicas de manera eficiente.</p>
                    </div>
                    <div class="flex items-center justify-between p-4">
                        <a href="#" class="text-xl text-blue-600 hover:text-blue-800">Leer más</a>
                    </div>
                </div>
                <!-- Módulo 2 -->
                <div class="max-w-xs mx-16 mb-2 rounded-lg shadow-lg bg-blue-50">
                    <div class="px-6 py-4">
                        <h4 class="mb-3 text-xl font-semibold tracking-tight text-gray-800">Gestión de Pacientes</h4>
                        <p class="leading-normal text-gray-600">Mantén un registro detallado de todos los pacientes y sus historiales médicos.</p>
                    </div>
                    <div class="flex items-center justify-between p-4">
                        <a href="#" class="text-xl text-blue-600 hover:text-blue-800">Leer más</a>
                    </div>
                </div>
                <!-- Módulo 3 -->
                <div class="max-w-xs mx-16 mb-2 rounded-lg shadow-lg bg-blue-50">
                    <div class="px-6 py-4">
                        <h4 class="mb-3 text-xl font-semibold tracking-tight text-gray-800">Gestión de Hospitales</h4>
                        <p class="leading-normal text-gray-600">Coordina y gestiona la información de los hospitales asociados.</p>
                    </div>
                    <div class="flex items-center justify-between p-4">
                        <a href="#" class="text-xl text-blue-600 hover:text-blue-800">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    </section>
</x-guest-layout>
