<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Información del Perfil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Actualiza la información del perfil de tu cuenta y la dirección de correo electrónico.') }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    <div class="flex sm:flex-row flex-col mt-6 space-y-6">
        <div class="flex-1">
            <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('patch')

                <div>
                    {{-- Nombre --}}
                    <x-input-label for="name" :value="__('Nombre')" />
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                        :value="old('name', $user->name)" required autofocus autocomplete="name" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>

                <div>
                    {{-- Apellidos --}}
                    <x-input-label for="surname" :value="__('Apellidos')" />
                    <x-text-input id="surname" name="surname" type="text" class="mt-1 block w-full"
                        :value="old('surname', $user->surname)" required autofocus autocomplete="surname" />
                    <x-input-error class="mt-2" :messages="$errors->get('surname')" />
                </div>

                <div>
                    {{-- Email --}}
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                        :value="old('email', $user->email)" required autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                        <div>
                            <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                {{ __('Tu dirección de correo electrónico no ha sido verificada.') }}

                                <button form="send-verification"
                                    class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    {{ __('Haz clic aquí para reenviar el correo electrónico de verificación.') }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                    {{ __('Se ha enviado un nuevo enlace de verificación a tu dirección de correo electrónico.') }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>

                <div>
                    {{-- DNI --}}
                    <x-input-label for="DNI" :value="__('Dni')" />
                    <x-text-input id="DNI" name="DNI" type="text" class="mt-1 block w-full"
                        :value="old('DNI', $user->DNI)" required autofocus autocomplete="DNI" />
                    <x-input-error class="mt-2" :messages="$errors->get('DNI')" />
                </div>

                <div>
                    {{-- Telefono --}}
                    <x-input-label for="phone" :value="__('Telefono')" />
                    <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full"
                        :value="old('phone', $user->phone)" required autofocus autocomplete="phone" />
                </div>

                <div>
                    {{-- Fecha de nacimiento --}}
                    <x-input-label for="birthdate" :value="__('Fecha de nacimiento')" />
                    <x-text-input id="birthdate" name="birthdate" type="date" class="mt-1 block w-full"
                        :value="old('birthdate', $user->birthdate)" required autofocus autocomplete="birthdate" />
                    <x-input-error class="mt-2" :messages="$errors->get('birthdate')" />
                </div>

                <div>
                    {{-- sexo --}}
                    <x-input-label for="sex" :value="__('Sexo')" />
                    <select name="sex" id="sex"
                        class="mt-1 block w-full border-gray-700 bg-gray-900 text-gray-300 focus:border-indigo-600 focus:ring-indigo-600 rounded-md shadow-sm">
                        <option value="H" {{ old('sex', $user->sex) == 'H' ? 'selected' : '' }}>
                            Hombre
                        </option>
                        <option value="M" {{ old('sex', $user->sex) == 'M' ? 'selected' : '' }}>
                            Mujer
                        </option>
                        <option value="Otro" {{ old('sex', $user->sex) == 'Otro' ? 'selected' : '' }}>
                            Otro
                        </option>
                    </select>
                    <x-input-error class="mt-2" :messages="$errors->get('sex')" />
                </div>

                <div>
                    {{-- town --}}
                    <x-input-label for="town" :value="__('Pueblo/Ciudad')" />
                    <x-text-input id="town" name="town" type="text" class="mt-1 block w-full"
                        :value="old('town', $user->town)" required autofocus autocomplete="town" />
                    <x-input-error class="mt-2" :messages="$errors->get('town')" />
                </div>

                <div>
                    {{-- municipality --}}
                    <x-input-label for="municipality" :value="__('Municipio')" />
                    <x-text-input id="municipality" name="municipality" type="text" class="mt-1 block w-full"
                        :value="old('municipality', $user->municipality)" required autofocus autocomplete="municipality" />
                    <x-input-error class="mt-2" :messages="$errors->get('municipality')" />
                </div>

                <div>
                    {{-- entry_army_date --}}
                    <x-input-label for="entry_army_date" :value="__('Fecha de ingreso al ejercito')" />
                    <x-text-input id="entry_army_date" name="entry_army_date" type="date" class="mt-1 block w-full"
                        :value="old('entry_army_date', $user->entry_army_date)" required autofocus autocomplete="entry_army_date" />
                    <x-input-error class="mt-2" :messages="$errors->get('entry_army_date')" />
                </div>

                <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('Guardar') }}</x-primary-button>

                    @if (session('status') === 'profile-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>
        </div>
        <div class="flex-1">
            @livewire('user-photo')
        </div>
    </div>
</section>
