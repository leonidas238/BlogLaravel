@include('common/header')
  <br><br>
  <center>
      <form action="{{ route('registrar') }}" method="POST" autofocus='autofocus'>
        @csrf
        Nombre: <input type="text" name="name"><br>
        Correo: <input type="email" name="email"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Registrar">
      </form><br>
      @if(session('registrado'))
      <b>Usuario registrado</b>
      @endif
   </center>


@include('common/footer')