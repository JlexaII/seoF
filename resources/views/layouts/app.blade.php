<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    @vite('resources/css/app.css')
    <title>@yield('titles')</title>
</head>

<body class="min-h-screen bg-gray-50">
    @yield('sidebar')

    @yield('content')
</body>

</html>

<style>
    body {
        background-image: url(images/5594016.jpg);
    }
</style>
