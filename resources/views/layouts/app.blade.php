<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>laravel.local - @yield('title')</title>
</head>
<body class="bg-white">
    <div class="container mt-5">
        @yield('content')
    </div>


<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>