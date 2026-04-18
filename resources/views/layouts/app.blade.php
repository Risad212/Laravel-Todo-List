<!DOCTYPE html>
<html>

<head>
    <title>Todo App</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <x-header />

    <div style="padding:20px;">
        @yield('content')
    </div>

</body>

</html>