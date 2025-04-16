<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            margin: 30px;
        }
    </style>
   <h1>listado de stock</h1>
   <ul>
    @foreach($ropita as $x)
    <li> {{$x["nombre"]}} : {{$x['cantidad']}}</li>
    @endforeach

    {{-- <li>{{ $ropita[0] }}</li> --}}
   </ul>

</body>
</html>
