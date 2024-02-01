<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<header>
    <h1 style="background-color: rgb(0, 255, 242)">Holaa, Quien esta jugando?</h1>
    @if (isset($nombre))
        <h2 style="background-color: rgb(0, 255, 242)">{{ $nombre }}</h2>
    @endif
</header>

</html>
