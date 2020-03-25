<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <form action="/GuardaEdicion" method="POST">
            @csrf
        <input type="hidden" name="id" value="{{$pastel->id}}">

        <input type="text" class="form-control" name="sabor" placeholder="sabor" value="{{$pastel->sabor}}">
            <br>
        <input type="number" class="form-control"  name="precio" placeholder="precio" value="{{$pastel->precio}}">
            <br>
            <input type="submit" class="btn btn-primary">

        </form>
    </div>
</body>
</html>
