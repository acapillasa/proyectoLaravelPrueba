<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Ver Productos | Guardar Producto</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h1>Aquí está la lista de productos disponibles:</h1>
                <table>
                    <thead>
                        <td>Nombre</td>
                        <td>Descripcion</td>
                        <td>Cantidad</td>
                        <td>Precio</td>
                    </thead>
                    <tbody>
                        @foreach ($todosLosProductos as $product)
                        <tr>
                            <td>{{ $product->nombre }}</td>
                            <td class="inner-table">{{ $product->descripcion }}</td>
                            <td class="inner-table">{{ $product->cantidad }}</td>
                            <td class="inner-table">{{ $product->precio }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>