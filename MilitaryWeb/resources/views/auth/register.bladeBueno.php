{{-- <x-guest-layout> --}}
<x-pagina-sin-nada-layout>
    <div
        class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-900 bg-gradient-to-t from-black via-slate-800 to-slate-800">
        {{-- <div>
            <a href="/">
                <img src="{{ asset('storage/images/MilitaryWebLogo.png') }}" class="h-30" alt="Flowbite Logo" />
            </a>
        </div> --}}

        <div class="relative flex flex-col sm:flex-row my-[100px] shadow-md overflow-hidden sm:rounded-lg bg-cover bg-center h-[900px] w-[1400px]"
            style="background-image: url('storage/images/images-Login_Register/register.jpg');">

            <!-- Capa oscura -->
            <div class="absolute inset-0 bg-black opacity-30"></div>

            <div class="relative flex flex-col text-white justify-center items-center w-full sm:w-1/2 bg-opacity-80 backdrop-blur-md rounded-l-lg p-5 shadow-md"
                style="box-shadow: 5px 0 15px rgba(0, 0, 0, 0.5);">
                <p class="text-6xl font-medium font-['Montserrat']">Registrarse</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <table>
                        <tr>
                            <div class="grid grid-cols-2 gap-4">
                                <!-- Name -->
                                <div class="mt-4">
                                    <x-input-label for="name" :value="__('Nombre')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                        :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <!-- Surname -->
                                <div class="mt-4">
                                    <x-input-label for="surname" :value="__('Apellidos')" />
                                    <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname"
                                        :value="old('surname')" required autofocus autocomplete="surname" />
                                    <x-input-error :messages="$errors->get('surname')" class="mt-2" />
                                </div>
                            </div>
                        </tr>
                        <tr>
                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </tr>
                        <tr>
                            <div class="grid grid-cols-2 gap-4">
                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Contraseña')" />
                                    <x-text-input id="password" class="block mt-1 w-full" type="password"
                                        name="password" required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />
                                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                        name="password_confirmation" required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                            </div>
                        </tr>
                        <tr>
                            <div class="grid grid-cols-3 gap-4">
                                <!-- Entry_army_date -->
                                <div class="mt-4">
                                    <x-input-label for="entry_army_date" :value="__('Fecha de Entrada al Ejercito')" />
                                    <x-text-input id="entry_army_date" class="block mt-1 w-full" type="date"
                                        name="entry_army_date" :value="old('entry_army_date')" required autofocus
                                        autocomplete="entry_army_date" />
                                    <x-input-error :messages="$errors->get('entry_army_date')" class="mt-2" />
                                </div>
                                <!-- Army_id -->
                                <div class="mt-4">
                                    <!-- Campo "Armada" -->
                                    <x-input-label for="army_id" :value="__('Armada')" />
                                    <select id="army_id" name="army_id" required
                                        class="block mt-1 w-full border-gray-700 bg-gray-900 text-gray-300 focus:border-indigo-600 focus:ring-indigo-600 rounded-md shadow-sm">
                                        <option value="" disabled selected>Selecciona una Armada</option>
                                        <option value="2" {{ old('army_id') == '2' ? 'selected' : '' }}>Tierra
                                        </option>
                                        <option value="4" {{ old('army_id') == '4' ? 'selected' : '' }}>Aire
                                        </option>
                                        <option value="3" {{ old('army_id') == '3' ? 'selected' : '' }}>Naval
                                        </option>
                                    </select>
                                    <x-input-error :messages="$errors->get('army_id')" class="mt-2" />
                                </div>
                                {{-- Range_id --}}
                                <div class="mt-4">
                                    <x-input-label for="range_id" :value="__('Rango')" />
                                    <select id="range_id" name="range_id" required
                                        class="block mt-1 w-full border-gray-700 bg-gray-900 text-gray-300 focus:border-indigo-600 focus:ring-indigo-600 rounded-md shadow-sm">
                                        <option value="" disabled selected>Selecciona un rango</option>
                                        <option value="2" {{ old('range_id') == '2' ? 'selected' : '' }}>Soldado
                                        </option>
                                        <option value="3" {{ old('range_id') == '3' ? 'selected' : '' }}>Cabo
                                        </option>
                                        <option value="4" {{ old('range_id') == '4' ? 'selected' : '' }}>Cabo
                                            primero</option>
                                        <option value="5" {{ old('range_id') == '5' ? 'selected' : '' }}>Sargento
                                        </option>
                                        <option value="6" {{ old('range_id') == '6' ? 'selected' : '' }}>Sargento
                                            primero</option>
                                        <option value="7" {{ old('range_id') == '7' ? 'selected' : '' }}>Brigada
                                        </option>
                                        <option value="8" {{ old('range_id') == '8' ? 'selected' : '' }}>
                                            Subteniente</option>
                                        <option value="9" {{ old('range_id') == '9' ? 'selected' : '' }}>Teniente
                                        </option>
                                        <option value="10" {{ old('range_id') == '10' ? 'selected' : '' }}>Capitán
                                        </option>
                                        <option value="11" {{ old('range_id') == '11' ? 'selected' : '' }}>
                                            Comandante</option>
                                        <option value="12" {{ old('range_id') == '12' ? 'selected' : '' }}>Teniente
                                            coronel</option>
                                        <option value="13" {{ old('range_id') == '13' ? 'selected' : '' }}>Coronel
                                        </option>
                                        <option value="14" {{ old('range_id') == '14' ? 'selected' : '' }}>General
                                            de brigada</option>
                                        <option value="15" {{ old('range_id') == '15' ? 'selected' : '' }}>General
                                            de división</option>
                                        <option value="16" {{ old('range_id') == '16' ? 'selected' : '' }}>Teniente
                                            general</option>
                                        <option value="17" {{ old('range_id') == '17' ? 'selected' : '' }}>General
                                            de ejército</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('range_id')" class="mt-2" />
                                </div>
                            </div>
                        </tr>
                        <tr>
                            <td><!-- DNI -->
                                <div class="mt-4">
                                    <x-input-label for="DNI" :value="__('Dni')" />
                                    <x-text-input id="DNI" class="block mt-1 w-full" type="text" name="DNI"
                                        :value="old('DNI')" required autofocus autocomplete="DNI" />
                                    <x-input-error :messages="$errors->get('DNI')" class="mt-2" />
                                </div>
                            </td>
                            <td><!-- Phone -->
                                <div class="mt-4">
                                    <x-input-label for="phone" :value="__('Telefono')" />
                                    <x-text-input id="phone" class="block mt-1 w-full" type="text"
                                        name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
                                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                </div>
                            </td>
                            <td><!-- birthdate -->
                                <div class="mt-4">
                                    <x-input-label for="birthdate" :value="__('Fecha de Nacimiento')" />
                                    <x-text-input id="birthdate" class="block mt-1 w-full" type="date"
                                        name="birthdate" :value="old('birthdate')" required autofocus
                                        autocomplete="birthdate" />
                                    <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> <!-- province -->
                                <div class="mt-4">
                                    <x-input-label for="province" :value="__('Provincia')" />
                                    <x-text-input id="province" class="block mt-1 w-full" type="text"
                                        name="province" :value="old('province')" required autofocus
                                        autocomplete="province" />
                                    <x-input-error :messages="$errors->get('province')" class="mt-2" />
                                </div>
                            </td>
                            <td> <!-- Town -->
                                <div class="mt-4">
                                    <x-input-label for="town" :value="__('Pueblo/Ciudad')" />
                                    <x-text-input id="town" class="block mt-1 w-full" type="text"
                                        name="town" :value="old('town')" required autofocus autocomplete="town" />
                                    <x-input-error :messages="$errors->get('town')" class="mt-2" />
                                </div>
                            </td>
                            <td><!-- Sex -->
                                <div class="mt-4">
                                    <x-input-label for="sex" :value="__('Sexo')" />
                                    <select id="sex" name="sex" required
                                        class="border-gray-700 bg-gray-900 text-gray-300 focus:border-indigo-600 focus:ring-indigo-600 rounded-md shadow-sm">
                                        <option value="" disabled selected>Selecciona una opción</option>
                                        <option value="M" {{ old('sex') == 'M' ? 'selected' : '' }}>Mujer
                                        </option>
                                        <option value="H" {{ old('sex') == 'H' ? 'selected' : '' }}>Hombre
                                        </option>
                                        <option value="Otro" {{ old('sex') == 'Otro' ? 'selected' : '' }}>Otro
                                        </option>
                                    </select>
                                    <x-input-error :messages="$errors->get('sex')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                    </table>

                    <div class="flex flex-col items-center justify-end mt-4">
                        <button class="buttonLogin w-full">
                            <span class="text">{{ __('Registrarse') }}</span>
                        </button>
                        <a class=" mt-3 hover:underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800"
                            href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </div>
                </form>
                {{-- Linea de separación con Or --}}
                <style>
                    .container {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                    }

                    .line {
                        height: 1px;
                        background-color: white;
                    }

                    .line-container {
                        width: 40%;
                        /* 2/5 del contenedor */
                    }

                    .or {
                        width: 20%;
                        /* 1/5 del contenedor */
                        text-align: center;
                    }
                </style>
                <div class="container mt-5">
                    <div class="line-container">
                        <div class="line"></div>
                    </div>
                    <div class="or">Or</div>
                    <div class="line-container">
                        <div class="line"></div>
                    </div>
                </div>
                {{-- Botones de Logien -> Actualemnte no se usa --}}
                <div class="flex justify-center gap-6 p-5">
                    <a href="#"
                        class="social twitter flex items-center justify-center w-12 h-12 rounded-full border border-gray-300">
                        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 512 512">
                            <path
                                d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="social facebook flex items-center justify-center w-12 h-12 rounded-full border border-gray-300">
                        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 320 512">
                            <path
                                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="social google-plus flex items-center justify-center w-12 h-12 rounded-full border border-gray-300">
                        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 640 512">
                            <path
                                d="M386.061 228.496c1.834 9.692 3.143 19.384 3.143 31.956C389.204 370.205 315.599 448 204.8 448c-106.084 0-192-85.915-192-192s85.916-192 192-192c51.864 0 95.083 18.859 128.611 50.292l-52.126 50.03c-14.145-13.621-39.028-29.599-76.485-29.599-65.484 0-118.92 54.221-118.92 121.277 0 67.056 53.436 121.277 118.92 121.277 75.961 0 104.513-54.745 108.965-82.773H204.8v-66.009h181.261zm185.406 6.437V179.2h-56.001v55.733h-55.733v56.001h55.733v55.733h56.001v-55.733H627.2v-56.001h-55.733z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="social instagram flex items-center justify-center w-12 h-12 rounded-full border border-gray-300">
                        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 448 512">
                            <path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                    </a>
                </div>
            </div>

            <div
                class="flex flex-col justify-center items-center text-center text-white mx-auto w-full sm:w-1/2 relative z-10">
                <p class="text-6xl font-medium font-['Montserrat']">Bienvenido</p>
                <p class="text-4xl font-medium font-['Montserrat']">Regístrate para acceder a información vital y
                    recursos estratégicos.</p>
                <p>¿Ya tienes una cuenta?</p>
                <button class="buttonLogin mt-5">
                    <span class="text"><a href="{{ route('login') }}">{{ __('Inicia Sesion') }}</a></span>
                </button>
            </div>
        </div>
    </div>
</x-pagina-sin-nada-layout>
{{-- </x-guest-layout> --}}
