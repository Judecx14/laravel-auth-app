<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="grid gap-4 font-sans mx-auto text-center my-24 px-9 py-10 place-content-center max-h-fit">
        <form action="/api/v1/login" method="post">
            @csrf
            <input type="hidden" name="email" value="{{$email}}">
            <p class="font-semibold text-lg text-purple-800">Ingrese código de verificación</p>
            <br><br>
            <input type="text" class="border-b border-violet-600 mx-4 py-1 px-2" name="code" required>
            <button type="submit" class="font-semibold bg-violet-700 hover:bg-violet-900 py-1 px-4 rounded-lg text-white">Enviar</button>
        </form>
    </div>
</body>

</html>