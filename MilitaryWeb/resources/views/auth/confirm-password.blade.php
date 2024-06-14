<x-pagina-sin-nada-layout>
    <div class="home-Principal flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md p-6 shadow-md rounded-md">
            <div class="mb-4 text-sm text-white">
                {{ __('Esta es una zona segura de la aplicación. Por favor, confirma tu contraseña antes de continuar.') }}
            </div>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Contraseña')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex justify-end mt-4">
                    {{-- <x-custom.primary-button>
                        {{ __('Confirmar') }}
                    </x-custom.primary-button> --}}
                    <x-custom.custom-button type="submit" class="md:col-span-3 w-full">
                        {{ __('Confirmar') }}
                    </x-custom.custom-button>
                </div>
            </form>
        </div>
    </div>
</x-pagina-sin-nada-layout>
