@include('common/header')
<h1>La pagina principal</h1>
<br>
<br>
<center>
  <div class="header">
    <h2>Blog Name</h2>
  </div>

  <div>
    @foreach ($posts as $post)
      <div>
        <h5>{{$post->titulo}}</h5>
            <p>{{$post->cuerpo}}</p><br>
            <hr><p>{{$post->User->name}}</p>
      </div>
    @endforeach
    {{$posts->links()}}
  </div>
</center>


@include('common/footer')