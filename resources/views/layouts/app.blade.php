<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <script src="resources/js/spaghetti.js"></script>
    <script src="/path/or/uri/to/tinymce.min.js" referrerpolicy="origin"></script>
    <title>@yield('titles')</title>
</head>

<body class="min-h-screen container mx-auto px-4 bg-white dark:bg-gray-800">
    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <br><br>
    <script src="js/app.js"></script>
    <script src="js\TyniMC.js"></script>
    @include('inc.one_modal')
    @include('inc.two_modal')
</body>

</html>

<style>
    body {
       /*  background-image: url(images/5594016.jpg); */
    }
</style>


