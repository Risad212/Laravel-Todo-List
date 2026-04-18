<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::where('user_id', Auth::id())->get();
        return view('index', compact('todos'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        $user = Auth::user();

        Todo::create([
            'todo' => $request->todo,
            'user_id' => $user->id
        ]);

        return back()->with('success', 'Todo created successfully!');
    }

    public function destroy($id)
    {
        $todo = Todo::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $todo->delete();
        return back()->with('success', 'Todo deleted successfully!');
    }

    public function edit($id)
    {
        $todo = Todo::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'todo' => 'required'
        ]);

        $todo = Todo::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $todo->update([
            'todo' => $request->todo
        ]);

        return redirect()->route('todos.index');
    }
};
