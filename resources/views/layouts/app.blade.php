<!DOCTYPE html>
<html>

<head>
    <title>Todo App</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <x-header />

    <div style="padding:20px;">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>