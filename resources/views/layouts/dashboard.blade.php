<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') Dashboard </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="grid gap-4 mx-auto text-center my-24 px-9 py-10 place-content-center max-h-fit">
        <h1 class="text-2xl">Welcome</h1>
        <p class="text-violet-700 text-sm">{{$data->email}}</p>
        <a href="logout">Log out</a>
    </div>
</body>

</html>