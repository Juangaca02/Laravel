<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    Hola Prof
    <br>
    [ [-] [-] ] <br>
    [/\/\/\/\]
    <br>
    @foreach ($alumnos as $alum)
        <br>DNI: {{ $alum->dni }}<br>
        Nombre: {{ $alum->nombre }}<br>
        Apellidos: {{ $alum->apelidos }}<br>
        Email: {{ $alum->email }}<br>
        Curso: {{ $alum->curso }}<br>
        Asignatura: {{ $alum->pivot->asignatura }}<br>
        Nota: {{ $alum->pivot->nota }}<br>
        ================================
    @endforeach
    {{ $alumnos->links() }}
</body>

</html>
