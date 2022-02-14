<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/global.css') }}">
    <link rel="stylesheet" href="{{ asset('style/pages/app.css') }}">
    <link rel="stylesheet" href="{{ asset('style/pages/home.css') }}">
    <link rel="stylesheet" href="{{ asset('style/pages/exercises.css') }}">
    <title>Home page</title>
</head>
    <body>
        @yield('content')
    </body>
</html>
