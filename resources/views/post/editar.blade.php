<h3>Editar Post</h3>
<form action="{{ route('post.update', $post) }}" method="POST" >
    @csrf
    <label>Titulo <br>
    <input name="titulo" type="text" value="{{ old('titulo',$post->titulo)}}"><br></label>
    <label>Cuerpo<br>
    <textarea name="cuerpo" value="{{ old('cuerpo',$post->cuerpo)}}"></textarea><br><label>
    <button type="submit">Enviar</button>
</form>
