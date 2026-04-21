@extends('layouts.app')

@section('content')

<h1 class="welcome-message">
    Welcome, {{ Auth::user()->name }} 👋
</h1>

<div class="todo-table-wrapper">

    <!-- 🔍 AJAX Search Input -->
    <div class="search-box">
        <input
            type="text"
            id="search"
            placeholder="Search todo...">
    </div>

    <div class="top-bar">
        <h2>Todo List</h2>
        <a href="{{ route('todos.create') }}" class="add-btn">+ Add Todo</a>
    </div>

    <!-- 📦 AJAX TARGET AREA -->
    <div id="todo-results">

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
                <tr data-id="{{ $todo->id }}">
                    <td>{{ $todo->id }}</td>
                    <td>{{ $todo->todo }}</td>

                    <td class="actions">

                        <a href="{{ route('todos.edit', $todo->id) }}" class="edit-link">
                            Edit
                        </a>

                        <button type="button" class="delete btn" data-id="{{ $todo->id }}">
                            Delete
                        </button>

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
    <!-- 📄 Pagination -->
    <div class="pagination-wrapper">
        {{ $todos->links() }}
    </div>
</div>

@endsection