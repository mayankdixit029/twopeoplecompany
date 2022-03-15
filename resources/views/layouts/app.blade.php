<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

    <title>Community Project</title>
</head>

<body>
    <div id='app'>

            @yield('content')

    </div>
    <script defer src="{{ mix('js/app.js') }}"></script>
</body>
