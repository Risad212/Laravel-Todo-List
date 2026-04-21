<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $query = Todo::where('user_id', Auth::id());

        if ($request->filled('search')) {
            $query->where('todo', 'like', '%' . $request->search . '%');
        }

        $todos = $query->paginate(10)->withQueryString();

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

        return response()->json([
            'success' => true,
            'message' => 'Todo created successfully!',
            'todo' => $request->todo
        ]);
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

        return view('edit', compact('todo'));
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

        return response()->json([
            'success' => true,
            'message' => 'Todo update successfully!',
            'todo' => $todo
        ]);
    }
};
