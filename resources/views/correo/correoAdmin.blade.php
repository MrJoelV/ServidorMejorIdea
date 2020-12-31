<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos de usuario nuevo</title>
</head>
<body>
    <h1>Nuevo usuario</h1>
    
    <p><strong>ID: </strong> {{$details["nombre"]->id}}</p>
    <p><strong>Nombre: </strong> {{$details["nombre"]->nombre}}</p>
    <p><strong>Mensaje: </strong> {{$details["nombre"]->idea}}</p>
    <p><strong>Correo: </strong> {{$details["nombre"]->correo}}</p>
</body>
</html>