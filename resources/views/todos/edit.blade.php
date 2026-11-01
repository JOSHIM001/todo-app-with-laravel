@extends('layouts.app')

@section('content')
    <h1>✏️ Edit Task</h1>

    @error('title')
        <div class="error">{{ $message }}</div>
    @enderror

    <form class="add" action="{{ route('todos.update', $todo) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ old('title', $todo->title) }}" autofocus>
        <button type="submit" class="btn-primary">Save</button>
        <a class="btn-light" href="{{ route('todos.index') }}">Cancel</a>
    </form>
@endsection
