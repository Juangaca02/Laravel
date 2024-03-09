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

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <!-- Page Heading -->
    @include('layouts.navbar')

    <!-- Page Content -->
    <main class="mt-40">
        <div class="max-w-7xl mx-auto px-4 space-y-8">
            @if (session('status'))
                <x-my-alert textColor="text-green-800" bgColor="bg-green-50">
                    {{ session('status') }}
                </x-my-alert>
            @endif
            <div class="p-4 sm:p-8 border border-yellow-500 shadow sm:rounded-lg">
                {{-- <div class="max-w-xl"> --}}
                @include('profile.partials.update-profile-information-form')
                {{-- </div> --}}
            </div>

            <div class="p-4 sm:p-8 border border-yellow-500 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 border border-yellow-500 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </main>


    @include('layouts.footer')

    <script src="{{ asset('../js/index.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>
