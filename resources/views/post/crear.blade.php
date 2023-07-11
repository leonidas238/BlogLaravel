<h3>Crear Post</h3>
<form action="{{ route('post.store') }}" method="POST" >
    @csrf
    <label>Titulo <br>
    <input name="titulo" type="text"><br></label>
    <label>Cuerpo<br>
    <textarea name="cuerpo"></textarea><br><label>
    <button type="submit">Enviar</button>
</form>