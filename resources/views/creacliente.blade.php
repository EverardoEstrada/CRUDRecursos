<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Crea cliente</h1>
    <form action="/cliente" method="POST">
        @csrf

        <input type="text" name="nombre">
        <input type="text" name="direccion">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>
