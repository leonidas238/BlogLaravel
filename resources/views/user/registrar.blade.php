@include('common/header')
  <br><br>
  <center>
      <form action="/registrar" method="post">
        @csrf
        Nombre: <input type="text" name="name" id=""> <br>
        Correo: <input type="text" name="email" id=""> <br>
        Password: <input type="password" name="password" id=""> <br>
        <input type="submit" value="Registrar">
      </form><br>
      @if(session('registrado'))
      <b>Usuario registrado</b>
      @endif
   </center>


@include('common/footer')