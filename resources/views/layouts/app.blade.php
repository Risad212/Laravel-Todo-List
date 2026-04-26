<!DOCTYPE html>
<html>

<head>
    <title>Todo App</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>

    <x-header />


    <div style="padding:20px;">
        @yield('content')
    </div>


    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- Session Toastr -->
    @if(session('success'))
    <script>
        toastr.success("{{ session('success') }}")
    </script>
    @endif

    @if(session('error'))
    <script>
        toastr.error("{{ session('error') }}")
    </script>
    @endif

    <!-- Your JS -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>