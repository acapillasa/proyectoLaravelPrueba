<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISTA 3</title>
</head>
<body>
    <!--@if(request()->isMethod('get'))
        <p name="mensaje">Hello <i>Anonymous User</i></p>
    @elseif(request()->isMethod('post'))
        <p name="mensaje">Hola {{ $nombre }} {{ $apellidos }}</p>

    @endif-->

    <form action="/vista4" method="post">
        @csrf
        @if(request()->isMethod('get'))
            <p name="mensaje">Hello <i>Anonymous User</i></p>
        @elseif(request()->isMethod('post'))
            <p name="mensaje">Hola {{ $nombre }} {{ $apellidos }}</p>
        @endif

        <label>Age</label>
        <input type="number" name="edad">
        @if (request()->isMethod('post'))
        <input type="hidden" name="oculto" value="{{ $nombre }} {{ $apellidos }}">
        @endif

        <input type="submit" value="ENVIAR">
    </form>
    
</body>
</html>