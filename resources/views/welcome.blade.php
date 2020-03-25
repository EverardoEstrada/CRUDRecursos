<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>

        <br>
        <br>
        <br>
        <h1>Crea pasteles</h1>
        <div class="container">
            <form action="/guardaPastel" method="POST">
                @csrf

                <input type="text" class="form-control" name="sabor" placeholder="sabor">
                <br>
                <input type="number" class="form-control"  name="precio" placeholder="precio">
                <br>
                <input type="submit" class="btn btn-primary">

            </form>

            <br>
            <br>
            <br>

            <table>
                <thead>
                    <tr>
                        <th>Sabor</th>
                        <th>Precio</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pasteles as $p)
                    <tr>
                    <td>{{$p->sabor}}</td>
                    <td>{{$p->precio}}</td>
                    <td><a href="/edita/{{$p->id}}">edita</a> <a href="/borra/{{$p->id}}">Borrar</a></td>
                    </tr>
                    @endforeach

                </tbody>

            </table>

        </div>

    </body>
</html>
