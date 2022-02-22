<h1>Iniciar Sesión</h1>
<form action="api/v1/generate-code" method="post">
    @csrf
    <input type="text" name="email" required placeholder="email">
    <input type="text" name="password" required placeholder="contraseña">
    <button type="submit">Inicar</button>
</form>
