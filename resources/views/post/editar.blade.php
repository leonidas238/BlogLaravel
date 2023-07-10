<h1>Editar Post</h1>
<form method="POST" action="{{ route('post.update', $post) }}">
    @csrf @method('PATCH')
      <div>
          <label>Titulo <br>
          <input type="text" value="{{ $post->nombre }}"><br></label>
          <label>Cuerpo
          <input type="longtext" value="{{ $u->cuerpo }}"><br></label>
      </div>
      <button type="submit">Actualizar</button>
</form>
