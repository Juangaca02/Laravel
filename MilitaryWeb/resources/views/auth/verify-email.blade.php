<x-pagina-sin-nada-layout>
    <div class="home-Principal flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md p-6 shadow-md rounded-md">
            <div class="mb-4 text-sm text-white">
                {{ __('¡Gracias por registrarte! Antes de comenzar, ¿podrías verificar tu dirección de correo electrónico haciendo clic en el enlace que te acabamos de enviar? Si no recibiste el correo electrónico, con gusto te enviaremos otro.') }}
            </div>
            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                    {{ __('Se ha enviado un nuevo enlace de verificación a la dirección de correo electrónico que proporcionaste durante el registro.') }}
                </div>
            @endif
            <div class="mt-4 flex flex-col items-center">
                <form method="POST" action="{{ route('verification.send') }}" class="w-full mb-4">
                    @csrf
                    {{-- <x-custom.primary-button class="w-full">
                        {{ __('Reenviar correo electrónico de verificación') }}
                    </x-custom.primary-button> --}}
                    <x-custom.custom-button type="submit" class="w-full mt-2">
                        {{ __('Reenviar correo electrónico de verificación') }}
                    </x-custom.custom-button>
                </form>
                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <x-custom.custom-button type="submit" class="w-full mt-2">
                        {{ __('Cerrar Sesión') }}
                    </x-custom.custom-button>
                </form>
            </div>
        </div>
    </div>
</x-pagina-sin-nada-layout>
