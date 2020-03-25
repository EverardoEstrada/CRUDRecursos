<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edita Cliente</h1>

    <form action="/cliente/{{$cliente->id}}" method="POST">
        @method('PUT')
        @csrf

        <input type="text" name="nombre" value="{{$cliente->nombre}}">
        <input type="text" name="direccion" value="{{$cliente->direccion}}">
        <input type="submit">
    </form>
</body>
</html>
