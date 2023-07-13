@include('common/header')
  <center>
    <h2>Login</h2>
    <form action="/login" method="POST">
      @csrf
      Email: <input type="text" name="email" id=""> <br>
      Password: <input type="password" name="password" id=""> <br>
      <input type="submit" value="Iniciar Sesion">
    </form>
  </center>
@if(session('error'))
  <b>Credenciales invalidas</b>
@endif
@include('common/footer')