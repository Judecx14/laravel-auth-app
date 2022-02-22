<h1>Registro</h1>
<form action="api/v1/signup" method="post">
    @csrf
    <input type="text" name="email" required placeholder="email">
    <input type="text" name="password" required placeholder="contraseña">
    <input type="text" name="password_confirmation" required placeholder="confirmar contraseña">
    <button type="submit">Registrarse</button>
</form>