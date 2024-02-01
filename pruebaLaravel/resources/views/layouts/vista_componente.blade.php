<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
@php
    $color = 'yellow';
@endphp

<body>
    <div>
        <x-alert :colortext="$color" backgroundcolor="green" class="text-purple-700">
            Cuidado!!
            <x-slot name="texto">
                Que aqui hay cosa peligrosas crack
            </x-slot>
            <x-slot name="texto1">
                Que aqui hay cosa peligrosas crack noooo
            </x-slot>
        </x-alert>
        <x-alert>
            Cuidado!!
            <x-slot name="texto">
                Que aqui hay cosa peligrosas crack
            </x-slot>
            <x-slot name="texto1">
                Que aqui hay cosa peligrosas crack noooo
            </x-slot>
        </x-alert>

        <x-alert2 colorbg="green">
            Titulo de la Alerta
            <x-slot name="texto2">
                Este alert es otro diferente, el 2
            </x-slot>
            <x-slot name="texto4">
                Este alert es otro diferente, el 4
            </x-slot>
            <x-slot name="texto6">
                Este alert es otro diferente, el 6
            </x-slot>
        </x-alert2>
    </div>
</body>

</html>
