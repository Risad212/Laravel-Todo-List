<!DOCTYPE html>
<html>

<head>
    <title>Create Todo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="card">
        <h1>Create Todo ✍️</h1>

        @if(session('success'))
        <div style="background: green; color: white; padding: 10px; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('todos.store') }}" method="POST">
            @csrf

            <input type="text" name="todo" placeholder="Enter your todo">

            <button type="submit">Save Todo</button>
        </form>

        <a class="link" href="{{ route('todos.index') }}">← Back to list</a>
    </div>

</body>

</html>