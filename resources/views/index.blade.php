@include('common/header')
  <h1>La pagina principal</h1>
  <center>
    <div>
      <h2>Blog Name</h2>
    </div>
    <div>
      @foreach ($posts as $post)
        <div>
          <h5>{{$post->titulo}}</h5>
              <p>{{$post->cuerpo}}</p><br>
              <hr><p>{{$post->User->name}}</p>
              <hr><p>{{$post->created_at}}</p>
        </div>
      @endforeach
      {{$posts->links()}}
    </div>
  </center>
  <br><br>
@include('common/footer')