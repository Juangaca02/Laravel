<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    @section('header')
        Cabezera del Master
    @show

    <div>
        @yield('contenido')
    </div>

    @section('footer')
        Pie del Master
    @show
</body>

</html>
