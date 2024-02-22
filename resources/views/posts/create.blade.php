<!-- resources/views/posts/create.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Create New Post</h1>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create Post</button>
</form>
@endsection