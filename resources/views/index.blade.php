@extends('layouts.app')

@section('content')

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

            @forelse($todos as $todo)
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
            @empty
            <tr>
                <td colspan="3" style="text-align:center;">
                    No todos found
                </td>
            </tr>
            @endforelse

        </tbody>
    </table>

</div>

@endsection