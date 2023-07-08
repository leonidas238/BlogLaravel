<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="/home">Home</a>
<a href="/privada">Privada</a> 
<a href="/privada2">Privada 2</a> 

@if(Auth::check())
    Bienvenido {{ Auth::user() -> name }}. 
    <a href="/post">Ver Posts</a>
    <a href="/logout">Cerrar sesión</a>
@else 
    <a href="/login">Iniciar sesion</a>

@endif