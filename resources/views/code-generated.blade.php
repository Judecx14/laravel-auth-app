<form action="/api/v1/login" method="post">
    @csrf
    <input type="hidden" name="email" value="{{$email}}">
    <input type="number" name="code" required>
    <button type="submit">Enviar</button>
</form>