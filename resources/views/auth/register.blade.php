<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-25 h-25 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nombre')" />
                <x-text-input id="name" class="block mt-1 w-full bg-white border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-gray-900" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Cedula -->
            <div class="mt-4">
                <x-input-label for="cedula" :value="__('Cédula')" />
                <x-text-input id="cedula" class="block mt-1 w-full bg-white border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-gray-900" type="text" name="cedula" :value="old('cedula')" required />
                <x-input-error :messages="$errors->get('cedula')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full bg-white border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-gray-900" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Apellido -->
            <div class="mt-4">
                <x-input-label for="apellido" :value="__('Apellido')" />
                <x-text-input id="apellido" class="block mt-1 w-full bg-white border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-gray-900" type="text" name="apellido" :value="old('apellido')" required />
                <x-input-error :messages="$errors->get('apellido')" class="mt-2" />
            </div>

            <!-- Telefono -->
            <div class="mt-4">
                <x-input-label for="telefono" :value="__('Teléfono')" />
                <x-text-input id="telefono" class="block mt-1 w-full bg-white border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-gray-900" type="text" name="telefono" :value="old('telefono')" required />
                <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
            </div>

            <!-- Fecha de Nacimiento -->
            <div class="mt-4">
                <x-input-label for="fecha_nacimiento" :value="__('Fecha de Nacimiento')" />
                <x-text-input id="fecha_nacimiento" class="block mt-1 w-full bg-white border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-gray-900" type="date" name="fecha_nacimiento" :value="old('fecha_nacimiento')" required />
                <x-input-error :messages="$errors->get('fecha_nacimiento')" class="mt-2" />
            </div>

            <!-- Sexo -->
            <div class="mt-4">
                <x-input-label for="sexo" :value="__('Sexo')" />
                <select id="sexo" name="sexo" class="block mt-1 w-full bg-white border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-gray-900">
                    <option value="masculino" {{ old('sexo') == 'masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="femenino" {{ old('sexo') == 'femenino' ? 'selected' : '' }}>Femenino</option>
                    <option value="otro" {{ old('sexo') == 'otro' ? 'selected' : '' }}>Otro</option>
                </select>
                <x-input-error :messages="$errors->get('sexo')" class="mt-2" />
            </div>

            <!-- Edad -->
            <div class="mt-4">
                <x-input-label for="edad" :value="__('Edad')" />
                <x-text-input id="edad" class="block mt-1 w-full bg-white border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-gray-900" type="number" name="edad" :value="old('edad')" required />
                <x-input-error :messages="$errors->get('edad')" class="mt-2" />
            </div>

            <!-- Dirección -->
            <div class="mt-4">
                <x-input-label for="direccion" :value="__('Dirección')" />
                <x-text-input id="direccion" class="block mt-1 w-full bg-white border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-gray-900" type="text" name="direccion" :value="old('direccion')" required />
                <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
            </div>

            <!-- Peso -->
            <div class="mt-4">
                <x-input-label for="peso" :value="__('Peso')" />
                <x-text-input id="peso" class="block mt-1 w-full bg-white border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-gray-900" type="number" step="0.01" name="peso" :value="old('peso')" required />
                <x-input-error :messages="$errors->get('peso')" class="mt-2" />
            </div>

            <!-- Altura -->
            <div class="mt-4">
                <x-input-label for="altura" :value="__('Altura')" />
                <x-text-input id="altura" class="block mt-1 w-full bg-white border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-gray-900" type="number" step="0.01" name="altura" :value="old('altura')" required />
                <x-input-error :messages="$errors->get('altura')" class="mt-2" />
            </div>

            <!-- Tipo de Sangre -->
            <div class="mt-4">
                <x-input-label for="tipo_sangre" :value="__('Tipo de Sangre')" />
                <x-text-input id="tipo_sangre" class="block mt-1 w-full bg-white border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-gray-900" type="text" name="tipo_sangre" :value="old('tipo_sangre')" required />
                <x-input-error :messages="$errors->get('tipo_sangre')" class="mt-2" />
            </div>

            <!-- Enfermedades -->
            <div class="mt-4">
                <x-input-label for="enfermedades" :value="__('Enfermedades (Opcional)')" />
                <x-text-input id="enfermedades" class="block mt-1 w-full bg-white border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-gray-900" type="text" name="enfermedades" :value="old('enfermedades')" />
                <x-input-error :messages="$errors->get('enfermedades')" class="mt-2" />
            </div>

            <!-- Nombre del Seguro -->
            <div class="mt-4">
                <x-input-label for="nombre_seguro" :value="__('Nombre del Seguro (Opcional)')" />
                <x-text-input id="nombre_seguro" class="block mt-1 w-full bg-white border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-gray-900" type="text" name="nombre_seguro" :value="old('nombre_seguro')" />
                <x-input-error :messages="$errors->get('nombre_seguro')" class="mt-2" />
            </div>

            <!-- Número del Seguro -->
            <div class="mt-4">
                <x-input-label for="numero_seguro" :value="__('Número del Seguro (Opcional)')" />
                <x-text-input id="numero_seguro" class="block mt-1 w-full bg-white border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-gray-900" type="text" name="numero_seguro" :value="old('numero_seguro')" />
                <x-input-error :messages="$errors->get('numero_seguro')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Contraseña')" />
                <x-text-input id="password" class="block mt-1 w-full bg-white border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-gray-900"
                              type="password"
                              name="password"
                              required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full bg-white border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-gray-900"
                              type="password"
                              name="password_confirmation" required />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Ya está registrado?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Registrarse') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
