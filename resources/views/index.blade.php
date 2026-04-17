<!DOCTYPE html>
<html>

<head>
    <title>Todo List</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="todo-table-wrapper">

        <div class="top-bar">
            <h1>Todo List</h1>
            <a href="{{ route('todos.create') }}" class="add-btn">+ Add Todo</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
            <tbody>
                @foreach($todos as $todo)
                <tr>
                    <td>{{ $todo->id }}</td>
                    <td>{{ $todo->todo }}</td>

                    <td class="actions">
                        <a href="{{ route('todos.edit', $todo->id) }}" class="edit-link">
                            Edit
                        </a>
                        <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')

                            <button class="btn delete">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </tbody>

        </table>

    </div>

</body>

</html>