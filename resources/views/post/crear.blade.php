<h1>Crear Post</h1>
<form action="{{ route('post.store') }}" method="POST" >
    @csrf
    <label>Titulo <br>
    <input type="text"><br></label>
    <label>Cuerpo
    <input type="longtext"><br><label>
    <button type="submit">Enviar</button>
</form