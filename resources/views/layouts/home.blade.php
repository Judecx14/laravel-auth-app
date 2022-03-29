<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <nav class="flex py-5 bg-gradient-to-r from-white to-purple-300  text-base font-sans font-bold">
        <div class="w-1/2 px-12 mr-auto">
            <a href="/" class="text-2xl text-violet-800 font-bold">My App</a>
        </div>
        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1 text-white">
            <li class="mx-6">
                <a href="{{ route('login.index') }}" class="font-semibold bg-violet-700 py-3 px-4 rounded-lg hover:bg-violet-900">Log In</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="font-semibold bg-violet-700 hover:bg-violet-900 py-3 px-4 rounded-lg">Register</a>
            </li>
        </ul>
    </nav>

    @yield('content')
</body>

</html>