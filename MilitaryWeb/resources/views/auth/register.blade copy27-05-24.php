<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Surname -->
        <div class="mt-4">
            <x-input-label for="surname" :value="__('Apellidos')" />
            <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')"
                required autofocus autocomplete="surname" />
            <x-input-error :messages="$errors->get('surname')" class="mt-2" />
        </div>

        <!-- DNI -->
        <div class="mt-4">
            <x-input-label for="DNI" :value="__('Dni')" />
            <x-text-input id="DNI" class="block mt-1 w-full" type="text" name="DNI" :value="old('DNI')" required
                autofocus autocomplete="DNI" />
            <x-input-error :messages="$errors->get('DNI')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Telefono')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required
                autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- birthdate -->
        <div class="mt-4">
            <x-input-label for="birthdate" :value="__('Fecha de Nacimiento')" />
            <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate"
                :value="old('birthdate')" required autofocus autocomplete="birthdate" />
            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
        </div>

        <!-- Sex -->
        <div class="mt-4">
            <x-input-label for="sex" :value="__('Sexo')" />
            <select id="sex" name="sex"
                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                <option value="" disabled selected>Selecciona una opción</option>
                <option value="M" {{ old('sex')=='M' ? 'selected' : '' }}>M</option>
                <option value="H" {{ old('sex')=='H' ? 'selected' : '' }}>H</option>
                <option value="Otro" {{ old('sex')=='Otro' ? 'selected' : '' }}>Otro</option>
            </select>
            <x-input-error :messages="$errors->get('sex')" class="mt-2" />
        </div>

        <!-- Town -->
        <div class="mt-4">
            <x-input-label for="town" :value="__('Pueblo/Ciudad')" />
            <x-text-input id="town" class="block mt-1 w-full" type="text" name="town" :value="old('town')" required
                autofocus autocomplete="town" />
            <x-input-error :messages="$errors->get('town')" class="mt-2" />
        </div>

        <!-- province -->
        <div class="mt-4">
            <x-input-label for="province" :value="__('Provincia')" />
            <x-text-input id="province" class="block mt-1 w-full" type="text" name="province" :value="old('province')"
                required autofocus autocomplete="province" />
            <x-input-error :messages="$errors->get('province')" class="mt-2" />
        </div>

        <!-- Entry_army_date -->
        <div class="mt-4">
            <x-input-label for="entry_army_date" :value="__('Entrada al Ejercito')" />
            <x-text-input id="entry_army_date" class="block mt-1 w-full" type="text" name="entry_army_date"
                :value="old('entry_army_date')" required autofocus autocomplete="entry_army_date" />
            <x-input-error :messages="$errors->get('entry_army_date')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
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
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
                </x-custom.primary-button>
        </div>
    </form>
</x-guest-layout>