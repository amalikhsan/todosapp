<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <header>
        <div class="container mx-auto p-4">
            <h1 class="text-3xl font-bold text-center">
                Todo App
            </h1>
        </div>
    </header>
    <main class="p-4">
    @yield('test')
    </main>
</body>
</html>