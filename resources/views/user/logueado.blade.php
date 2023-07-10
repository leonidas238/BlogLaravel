@include('common/header')
<h1>La pagina principal</h1><br><br>
<center>
  <div>
    <h2>Blog Name</h2>
  </div>
  <div>
    @foreach ($posts as $post)
      <div>
          <h5>{{$post->titulo}}</h5>
          <p>{{$post->cuerpo}}</p>
          Autor: <p>{{$post->User->name}}</p><br>
          Publicado: <p>{{$post->created_at}}</p><br>
          <a href="{{ route('post.editar', $post) }}">Editar</a>
      </div>
    @endforeach
    {{$posts->links()}}
  </div>
</center>
<br><br>
@include('common/footer')