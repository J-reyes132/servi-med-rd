<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-25px h-25px fill-current text-blue-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4 text-blue-600" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="text-blue-600" />

                <x-text-input id="email" class="block mt-1 w-full bg-white border-blue-300 text-gray-800 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm"
                             type="email"
                             name="email"
                             :value="old('email')"
                             required
                             autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Contraseña')" class="text-blue-600" />

                <x-text-input id="password" class="block mt-1 w-full bg-white border-blue-300 text-gray-800 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm"
                             type="password"
                             name="password"
                             required
                             autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me"
                           type="checkbox"
                           class="rounded border-blue-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                           name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordar credenciales') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-blue-400 hover:text-blue-800" href="{{ route('password.request') }}">
                        {{ __('Olvidó su contraseña?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3 bg-blue-600 hover:bg-blue-500 focus:bg-blue-700">
                    {{ __('Acceder') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
