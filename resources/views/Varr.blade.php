<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Ver Productos | Guardar Producto</title>
</head>
<body>
    <div class="flex-center position-ref full-height">
        <h1>
            @foreach ($arr as $valor)
                {{ $valor }}<br>
            
            @endforeach
        </h1>
    </div>
</body>
</html>
