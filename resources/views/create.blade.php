@extends('layouts.app')

@section('content')

<div class="card">
    <h1>Create Todo ✍️</h1>

    @if(session('success'))
      <div id="toast">{{ session('success') }}</div>
    @endif

    <form class="todo-form-add" action="{{ route('todos.store') }}" method="POST">
        @csrf

        <input class="todo-input" type="text" name="todo" placeholder="Enter your todo">

        <button class="btn add-todo-btn" type="submit">Save Todo</button>
    </form>

    <a class="link" href="{{ route('todos.index') }}">← Back to list</a>
</div>

@endsection