@extends('layouts.app')

@section('content')
    <h1>📝 My Todo List</h1>

    @if (session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    @error('title')
        <div class="error">{{ $message }}</div>
    @enderror

    <form class="add" action="{{ route('todos.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="What needs to be done?" value="{{ old('title') }}" autofocus>
        <button type="submit" class="btn-primary">Add</button>
    </form>

    <ul>
        @forelse ($todos as $todo)
            <li class="{{ $todo->completed ? 'done' : '' }}">
                <form class="inline" action="{{ route('todos.toggle', $todo) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <input type="checkbox" onchange="this.form.submit()" {{ $todo->completed ? 'checked' : '' }}>
                </form>

                <span class="title">{{ $todo->title }}</span>

                <a class="btn-light" href="{{ route('todos.edit', $todo) }}">Edit</a>

                <form class="inline" action="{{ route('todos.destroy', $todo) }}" method="POST"
                      onsubmit="return confirm('Delete this task?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-danger">Delete</button>
                </form>
            </li>
        @empty
            <li class="empty">No tasks yet. Add one above!</li>
        @endforelse
    </ul>
@endsection
