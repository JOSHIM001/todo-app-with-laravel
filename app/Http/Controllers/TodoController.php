<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::latest()->get();

        return view('todos.index', compact('todos'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Todo::create($data);

        return redirect()->route('todos.index')->with('success', 'Task added!');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $todo->update($data);

        return redirect()->route('todos.index')->with('success', 'Task updated!');
    }

    public function toggle(Todo $todo)
    {
        $todo->update(['completed' => ! $todo->completed]);

        return redirect()->route('todos.index');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->route('todos.index')->with('success', 'Task deleted!');
    }
}
