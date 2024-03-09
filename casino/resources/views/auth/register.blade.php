<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Enlace CDN para Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Enlace CDN para Flowbite -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flowbite@^1.2.0/dist/css/flowbite.min.css">

    <link href="/css/index.css" rel="stylesheet">

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body class="font-sans antialiased">
    @include('layouts.navbar')
    <div class="flex flex-col items-center">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current" />
        </a>
        <div class="border border-yellow-500 mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <div class="centrar">
                    <svg width="298" height="23" viewBox="0 0 298 23" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M120 11L3.57628e-06 11" stroke="url(#paint0_linear_67_9241)" />
                        <path d="M178 11L298 11" stroke="url(#paint1_linear_67_9241)" />
                        <path
                            d="M166 4.2632C166 2.84221 164.832 1.67362 163.41 1.67362C161.989 1.67362 160.821 2.84199 160.821 4.2632C160.821 5.49478 161.705 6.53688 162.873 6.78957V11.3685C162.873 11.9368 162.431 12.3791 161.863 12.3791H160.79V9.31594C160.79 8.3053 159.969 7.48436 158.958 7.48436H158.642V6.53694C158.642 4.83179 157.253 3.47379 155.579 3.47379H154.221C153.211 1.42127 151 0 148.411 0C145.821 0 143.579 1.42099 142.6 3.41052H141.211C139.505 3.41052 138.147 4.80005 138.147 6.47367V7.42109H137.832C136.821 7.42109 136 8.24209 136 9.25267V16.6105C136 17.6212 136.821 18.4421 137.832 18.4421H138.147V19.3895C138.147 21.0947 139.537 22.4527 141.211 22.4527H155.579C157.284 22.4527 158.642 21.0632 158.642 19.3895V18.4421H158.958C159.969 18.4421 160.79 17.6211 160.79 16.6105V13.5474H161.832C163.063 13.5474 164.042 12.5368 164.042 11.3369V6.75805C165.179 6.47367 166 5.46326 166 4.2632V4.2632ZM148.411 1.23175C150.274 1.23175 151.916 2.11595 152.831 3.44221H143.989C144.906 2.1159 146.547 1.23175 148.411 1.23175V1.23175ZM139.379 6.50542C139.379 5.49478 140.2 4.64232 141.242 4.64232H155.61C156.621 4.64232 157.474 5.46331 157.474 6.50542V7.45284L139.379 7.45262L139.379 6.50542ZM151.726 8.68419V17.2736H145.095L145.095 8.68419H151.726ZM137.232 16.6736V9.31577C137.232 8.96839 137.516 8.68425 137.863 8.68425H143.895V17.2737H137.832C137.484 17.2737 137.232 17.0213 137.232 16.6739L137.232 16.6736ZM157.442 19.4524C157.442 20.4631 156.621 21.3155 155.579 21.3155H141.211C140.2 21.3155 139.348 20.4945 139.348 19.4524V18.505H157.411V19.4524H157.442ZM159.59 16.6736C159.59 17.021 159.305 17.3052 158.958 17.3052H152.927V8.68413H158.958C159.305 8.68413 159.59 8.96829 159.59 9.31566V16.6736ZM163.411 5.65262C162.653 5.65262 162.021 5.0211 162.021 4.26309C162.021 3.50514 162.653 2.87357 163.411 2.87357C164.169 2.87357 164.8 3.50509 164.8 4.26309C164.8 5.02104 164.169 5.65262 163.411 5.65262Z"
                            fill="#9F8E62" />
                        <path
                            d="M156.495 12.5683H156.053C155.705 12.5683 155.421 12.2842 155.452 11.9051C155.484 11.5892 155.768 11.3683 156.084 11.3683H156.621C156.81 11.3683 156.968 11.4945 157.031 11.6841C157.031 11.7474 157.095 11.7789 157.158 11.7789H157.758C157.821 11.7789 157.884 11.7156 157.884 11.6526C157.821 11.0526 157.347 10.579 156.747 10.5473V9.9472C156.747 9.88398 156.684 9.82098 156.621 9.82098H156.021C155.958 9.82098 155.895 9.8842 155.895 9.9472V10.5473C155.168 10.642 154.6 11.3052 154.663 12.0947C154.726 12.8209 155.389 13.3577 156.147 13.3577H156.526C156.873 13.3577 157.158 13.6419 157.126 14.021C157.095 14.3369 156.81 14.5578 156.495 14.5578H155.958C155.768 14.5578 155.61 14.4316 155.547 14.2419C155.547 14.1787 155.484 14.1472 155.421 14.1472H154.821C154.758 14.1472 154.695 14.2104 154.695 14.2734C154.758 14.8735 155.232 15.3471 155.832 15.3788V15.9789C155.832 16.0421 155.895 16.1051 155.958 16.1051H156.558C156.621 16.1051 156.684 16.0419 156.684 15.9789V15.3788C157.316 15.2841 157.852 14.7787 157.916 14.1158C157.979 13.2946 157.316 12.5683 156.495 12.5683V12.5683Z"
                            fill="#9F8E62" />
                        <path
                            d="M148.253 13.3895H148.632C148.979 13.3895 149.263 13.6737 149.232 14.0528C149.2 14.3686 148.916 14.5896 148.6 14.5896H148.063C147.874 14.5896 147.716 14.4634 147.653 14.2737C147.653 14.2105 147.589 14.179 147.526 14.179H146.926C146.863 14.179 146.8 14.2422 146.8 14.3052C146.863 14.9053 147.337 15.3788 147.937 15.4106V16.0106C147.937 16.0738 148 16.1368 148.063 16.1368H148.663C148.727 16.1368 148.79 16.0736 148.79 16.0106V15.3791C149.421 15.2844 149.958 14.779 150.021 14.1161C150.116 13.2634 149.453 12.5686 148.6 12.5686H148.158C147.811 12.5686 147.527 12.2845 147.558 11.9054C147.589 11.5895 147.874 11.3686 148.189 11.3686H148.726C148.916 11.3686 149.074 11.4948 149.137 11.6844C149.137 11.7477 149.2 11.7792 149.263 11.7792H149.863C149.926 11.7792 149.989 11.7159 149.989 11.6529C149.926 11.0529 149.453 10.5793 148.853 10.5476V9.94751C148.853 9.88429 148.789 9.82129 148.726 9.82129H148.126C148.063 9.82129 148 9.88451 148 9.94751V10.5476C147.274 10.6423 146.705 11.3055 146.768 12.095C146.831 12.8528 147.495 13.3895 148.253 13.3895V13.3895Z"
                            fill="#9F8E62" />
                        <path
                            d="M140.768 12.5683H140.326C139.979 12.5683 139.694 12.2842 139.726 11.9051C139.757 11.5892 140.042 11.3683 140.357 11.3683H140.894C141.084 11.3683 141.242 11.4945 141.305 11.6841C141.305 11.7474 141.368 11.7789 141.431 11.7789H142.031C142.094 11.7789 142.157 11.7156 142.157 11.6526C142.094 11.0526 141.621 10.579 141.021 10.5473V9.9472C141.021 9.88398 140.957 9.82098 140.894 9.82098H140.294C140.231 9.82098 140.168 9.8842 140.168 9.9472V10.5473C139.442 10.642 138.873 11.3052 138.936 12.0947C139 12.8209 139.663 13.3577 140.421 13.3577H140.8C141.147 13.3577 141.431 13.6419 141.4 14.021C141.368 14.3369 141.084 14.5578 140.768 14.5578H140.231C140.042 14.5578 139.884 14.4316 139.821 14.2419C139.821 14.1787 139.757 14.1472 139.694 14.1472H139.094C139.031 14.1472 138.968 14.2104 138.968 14.2734C139.031 14.8735 139.505 15.3471 140.105 15.3788V15.9789C140.105 16.0421 140.168 16.1051 140.231 16.1051H140.831C140.894 16.1051 140.957 16.0419 140.957 15.9789L140.958 15.3788C141.589 15.2841 142.126 14.7787 142.189 14.1158C142.252 13.2946 141.589 12.5683 140.768 12.5683H140.768Z"
                            fill="#9F8E62" />
                        <defs>
                            <linearGradient id="paint0_linear_67_9241" x1="94.868" y1="41.999" x2="53.3601"
                                y2="-12.2738" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFD59A" />
                                <stop offset="1" stop-color="#FFD59A" stop-opacity="0.21" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_67_9241" x1="203.132" y1="-19.9994" x2="251.433"
                                y2="34.6209" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFD59A" />
                                <stop offset="1" stop-color="#FFD59A" stop-opacity="0.21" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <h1 class="text-xl font-bold leading-tight tracking-tight dorado md:text-2xl text-center">
                    Registrarse
                </h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <table>
                        <tr>
                            <td>
                                <div>
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                        :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                            </td>
                            <td>
                                <div class="ml-6">
                                    <x-input-label for="surname" :value="__('Surname')" />
                                    <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname"
                                        :value="old('surname')" required autofocus autocomplete="surname" />
                                    <x-input-error :messages="$errors->get('surname')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div>
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                        :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <x-input-label for="password" :value="__('Password')" />
                                    <x-text-input id="password" class="block mt-1 w-full" type="password"
                                        name="password" required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                            </td>
                            <td>
                                <div class="ml-6">
                                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                    <x-text-input id="password_confirmation" class="block mt-1 w-full " type="password"
                                        name="password_confirmation" required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="flex items-center justify-end m-4">
                                    <a class="underline text-white text-sm hover:text-yellow-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>
                                    <button type="submit"
                                        class="ms-4 inline-flex items-center px-4 py-2 bg-gradient-to-r from-doradoBoton1 to-doradoBoton2 botonGeneral rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                        Registrarse
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    @include('layouts.footer')
    <script src="{{ asset('../js/index.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>
