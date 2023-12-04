<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Ver Productos | Guardar Producto</title>
    <style>
        span{
            background-color:green;
        }
    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        
            @for ($i = 1; $i <=count($arr); $i++)
                @if($i%2==1)
                    <span>{{$arr[($i-1)]}}</span><br>
                @else
                {{$arr[($i-1)]}}<br>
                @endif
            
            @endfor
        
    </div>
</body>
</html>