<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Listados de Frutas</h1>
    <ul>
        @foreach ($frutas as $f)
            <li>Nombre: {{ $f->nombreFruta }}</li>
            <li>Temporada: {{ $f->temporada }}</li>
            <li>Pais: {{ $f->pais }}</li>
            ===========================
        @endforeach
    </ul>
    <a href="{{ route('anime', ['nom' => 'Kimetsu']) }}">Ir a Anime</a><br>
    <a href="{{ url('/deportes') }}">Ir a Deportes</a><br>

    <h1>Formulario</h1>

    @if (session('msg'))
        {{ session('msg') }}
    @endif

    <form action="{{ route('guardarFruta') }}" method="POST">
        @csrf
        Nombre: <input type="text" name="nombre" value="{{ old('nombre') }}"><br>
        @foreach ($errors->get('nombre') as $error)
            {{ $error }} <br>
        @endforeach
        Error con @ error <br>
        @error('nombre')
            {{ $message }} <br>
        @enderror
        Descripcion:
        <textarea name="descripcion" id="" cols="30" rows="10" value="{{ old('descripcion') }}"></textarea><br>
        {{ $errors->first('descripcion') }} <br>
        Temporada: <br>
        <input type="checkbox" name="temp[]" value="primavera"
            @if (in_array('primavera', old('temp', []))) checked @endif>Primavera<br>
        <input type="checkbox" name="temp[]" value="verano" @if (in_array('verano', old('temp', []))) checked @endif>Verano<br>
        <input type="checkbox" name="temp[]" value="otoño" @if (in_array('otoño', old('temp', []))) checked @endif>Otoño<br>
        <input type="checkbox" name="temp[]" value="invierno"
            @if (in_array('invierno', old('temp', []))) checked @endif>Invierno<br>
        <input type="submit" name="enviar" value="enviar">
    </form>

    @if ($errors->any())
        <h2>Errores:</h2>
        @foreach ($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    @endif


</body>

</html>
