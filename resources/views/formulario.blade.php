<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>
    <form method="post" action="/procesar-formulario">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos"><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
