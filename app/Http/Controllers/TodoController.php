<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Redirect;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('index', compact('todos'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        Todo::create([
            'todo' => $request->todo,
        ]);

        return back()->with('success', 'Todo created successfully!');
    }

    public function destroy($id)
    {
        Todo::findOrFail($id)->delete();
        return back()->with('success', 'Todo deleted successfully!');
    }

    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        return view('edit', compact('todo'));
    }

    public function update(Request $request, $id)
    {

        $todo = Todo::findOrFail($id);

        $todo->update([
            'todo' => $request->todo
        ]);

        return redirect()->route('todos.index');
    }
};
