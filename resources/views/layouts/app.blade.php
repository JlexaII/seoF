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
    <script src="js/spaghetti.js"></script>
    <script src="https://cdn.tiny.cloud/1/c1g5w3w7559wrijhribzwtvgp8yk7tu33gcawzyha94xhoc1/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <title>@yield('titles')</title>

    <script type="text/javascript">
        tinymce.init({
            selector: '#texted',
            width: 600,
            height: 300,
            plugins: [
                'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
                'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen',
                'insertdatetime',
                'media', 'table', 'emoticons', 'template', 'help'
            ],
            toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
                'forecolor backcolor emoticons | help',
            menubar: 'file edit view insert format tools table help',
            content_css: 'css/content.css',
            language: 'ru'
        });
    </script>
</head>

<body class="min-h-screen container mx-auto px-4 bg-white dark:bg-gray-800">
    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <br><br>

    @include('inc.one_modal')
    @include('inc.two_modal')
    <script src="js/app.js"></script>
    <script type="modules" src="js/TyniMC.js"></script>
</body>

</html>

<style>
    body {
        /*  background-image: url(images/5594016.jpg); */
    }
</style>
