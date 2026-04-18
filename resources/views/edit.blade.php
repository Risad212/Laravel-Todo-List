@extends('layouts.app')
@section('content')

<div class="card">
    <h1>Edit Todo ✍️</h1>
    <form action="{{ route('todos.update', $todo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="todo" value="{{ $todo->todo }}">

        <button type="submit">Update Todo</button>
    </form>
</div>

@endsection