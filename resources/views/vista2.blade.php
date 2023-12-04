<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISTA 2</title>
</head>
<body>
    <form method="post" action="/vista3">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos"><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>