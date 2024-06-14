<x-pagina-sin-nada-layout>
    <div class="home-Principal flex items-center justify-center min-h-screen">
        <form method="POST" action="{{ route('password.store') }}" class="w-full max-w-md p-6  shadow-md rounded-md">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)"
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Contraseña')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                {{-- <x-custom.primary-button>
                    {{ __('Reset Password') }}
                </x-custom.primary-button> --}}
                <x-custom.custom-button type="submit" class="md:col-span-3 w-full">
                    {{ __('Cambiar contraseña') }}
                </x-custom.custom-button>
            </div>
        </form>
    </div>
</x-pagina-sin-nada-layout>
