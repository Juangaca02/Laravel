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
<style>
    .centrar {
        text-align: center;
        margin-top: 100px;

    }
</style>

<body class="font-sans antialiased">
    <div class="">
        @include('layouts.navbar')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main class="flex justify-center items-center h-screen">
            {{-- <div class=" centrar max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <p class="text-red-500">Si estas aqui dentro es que algo has hecho mal</p>
                <h1 class="text-3xl font-bold text-red-500">404 | Pagina no encontrada</h1>
            </div> --}}

            <div class="text-center">
                <p class="text-3xl text-red-500 mb-4">Si estas aqui dentro es que algo has hecho mal</p>
                <p class="text-3xl font-bold text-red-500">404 | Pagina no encontrada</p>
            </div>
        </main>
    </div>
    @include('layouts.footer')
    <script src="{{ asset('../js/index.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>
