<!DOCTYPE html>
<html>

<head>
    <title>Edit Todo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="card">
        <h1>Edit Todo ✍️</h1>
        <form action="{{ route('todos.update', $todo->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="todo" value="{{ $todo->todo }}">

            <button type="submit">Update Todo</button>
        </form>
    </div>

</body>

</html>