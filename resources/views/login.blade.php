
@include('common/header')

    <h1>Login</h1>
    <form action="/login" method="post">
        @csrf
        Email: <input type="text" name="email" id=""> <br>
        Password: <input type="password" name="password" id=""> <br>

        <input type="submit" value="Iniciar Sesion">

    </form>

    @if(session('error'))
        <b>Credenciales invalidas</b>
    @endif


    @include('common/footer')