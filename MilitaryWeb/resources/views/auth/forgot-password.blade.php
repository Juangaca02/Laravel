<x-pagina-sin-nada-layout>
    <div class="home-Principal flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md p-6 shadow-md rounded-md">
            <div class="mb-4 text-sm text-white">
                {{ __('¿Olvidaste tu contraseña? No hay problema. Solo déjanos saber tu dirección de correo electrónico y te enviaremos un enlace para restablecer la contraseña que te permitirá elegir una nueva.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    {{-- <x-custom.primary-button>
                        {{ __('Email Password Reset Link') }}
                    </x-custom.primary-button> --}}
                    <x-custom.custom-button type="submit" class="md:col-span-3 w-full">
                        {{ __('Enviar enlace para restablecer la contraseña') }}
                    </x-custom.custom-button>
                </div>
            </form>
        </div>
    </div>
</x-pagina-sin-nada-layout>
