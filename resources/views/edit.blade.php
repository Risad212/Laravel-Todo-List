<!DOCTYPE html>
<html>

<head>
    <title>Edit Todo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="todo-form-wrapper">

        <h2>Edit Todo</h2>

        @if(session('success'))
        <div class="success-msg">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('todos.update', $todo->id) }}" method="POST">
            @csrf
            @method('PUT')

            <input type="text" name="todo" value="{{ $todo->todo }}">

            <button type="submit" class="save-btn">
                Update Todo
            </button>
        </form>

    </div>

</body>

</html>