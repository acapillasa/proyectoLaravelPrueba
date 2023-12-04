<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISTA 4</title>
</head>
<body>
    @if (isset($oculto))
        <h2>Hola {{ $oculto }}</h2>
    @else
        <p>Hello <i>Anonymous User</i></p>
    @endif
    

    <p>Your age: {{ $edad }}</p>
    <a href="/vista1">
        <input type="button" value="VOLVER">
    </a>
    
</body>
</html>