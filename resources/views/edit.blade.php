@extends('layouts.app')

@section('content')

<div class="card">
    <h1>Edit Todo ✍️</h1>

    <div class="success-message" style="display:none;"></div>

    <form class="todo-form-edit" data-id="{{ $todo->id }}">
        <input
            class="todo-input"
            type="text"
            value="{{ $todo->todo }}">

        <button  class="btn add-todo-btn" type="button">
            Update Todo
        </button>
    </form>

    <a class="link" href="{{ route('todos.index') }}">← Back to list</a>
</div>

@endsection