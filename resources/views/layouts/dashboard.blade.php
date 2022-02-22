<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') Dashboard </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="grid gap-4 mx-auto text-center my-5 px-9 py-10 place-content-center max-h-fit">
        <form method="post" action="api/v1/logout">
            <h1 class="text-3xl text-gray-600">Welcome</h1>

            <p class="text-violet-700 text-base my-10">{{$user->email}}</p>
            <br><br><br>
            <button type="submit" class="font-semibold bg-violet-700 hover:bg-violet-900 text-white py-1 px-3 rounded-lg">Log out</button>
        </form>

    </div>
</body>

</html>