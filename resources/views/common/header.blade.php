<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Laravel</title>
</head>
<body>
    @if(Auth::check())
      <a href="/">Home</a>
      <a href="/logueado">Ver mis Posts</a>
      <a href="/post.crear">Crear Posts</a>
      <a href="/logout">Cerrar sesión</a><br>
    Bienvenido {{ Auth::user() -> name }}.
    @else 
      <a href="/">Home</a>
      <a href="/login">Iniciar sesion</a>
      <a href="/registrar">Registrar</a> 
    @endif

    @if(session('status'))
        <div>{{ session('status') }}</div>
    @endif