<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Crear Producto | Guardar Producto</title>
        <!-- styling etc. -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <form method="POST" action="{{ config('app.url')}}/productos">
                    {{ csrf_field() }}
                    <h1> Introduce los Detalles para crear un producto</h1>
                    <div class="form-input">
                        <label>Nombre</label> <input type="text" name="nombre">
                    </div>
                    <div class="form-input">
                        <label>Descripcion</label> <input type="text" name="descripcion">
                    </div>
                    <div class="form-input">
                        <label>Cantidad</label> <input type="number" name="cantidad">
                    </div>
                    <div class="form-input">
                        <label>Precio</label> <input type="number" name="precio">
                    </div>
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </body>
</html>
