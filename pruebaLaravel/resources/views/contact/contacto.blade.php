<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=, initial-scale=1">
    <title>Laravel</title>

</head>

<body>
    @include('contact.cabecera', ['nombre' => $nombre])
    <h1>{{ $nombre }} deja el Monopoly, que tienes {{ $edad }} años</h1>
    {{ route('contacto') }}
    @if ($edad > 18)
        <br>Eres mayor de edad
    @else
        @if ($nombre = 'Pino')
            <br>
            <h1>Eres un crack, fiera mastodonte</h1>
        @else
            <br>Eres meh
        @endif
        <br>Eres menos de edad
    @endif

    @foreach ($frutas as $co)
        <li>{{ $co }}</li>
    @endforeach
</body>

</html>
