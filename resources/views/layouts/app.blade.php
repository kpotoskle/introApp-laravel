<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="banner">
        IAI togo laravel
    </div>
    <div style="display: flex; flex-grow: 1;">
        <div class="sidebar">
          @include('layouts.menu')
        </div>
        <div class="page-content">
            @yield('content')
        </div>
    </div>
</body>

</html>
