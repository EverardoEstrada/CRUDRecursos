<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Cliente</h1>
<br><br>
<a href="/cliente/create">Crea Cliente</a>


<table>
<thead>

    <tr>
        <td>Nombre</td>
        <td>Direccion</td>
        <td>Accion</td>
    </tr>
</thead>

<tbody>
    @foreach ($clientes as $c)
    <tr>
    <td>{{$c->nombre}}</td>
    <td>{{$c->direccion}}</td>
    <td>
        <a href="/cliente/{{$c->id}}/edit">Editar</a>
        <form action="/cliente/{{$c->id}}" method="POST">@method('DELETE') @csrf <input type="submit" value="delete"></form>
    </td>
    </tr>
    @endforeach

</tbody>


</table>
</body>
</html>
