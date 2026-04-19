@extends('layouts.app')

@section('content')

<h1 class="welcome-message"> Welcome, {{ Auth::user()->name }} 👋</h1>

<div class="todo-table-wrapper">
    <form method="GET" action="{{ route('todos.index') }}" class="search-box">
        <input
            type="text"
            name="search"
            placeholder="Search todo..."
            value="{{ request('search') }}">
        <button type="submit">Search</button>
    </form>
    <div class="top-bar">
        <h2>Todo List</h2>
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