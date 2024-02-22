<!-- resources/views/posts/index.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Posts</h1>
<a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create New Post</a>
<ul class="list-group">
    @foreach($posts as $post)
    <li class="list-group-item">
        <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
        <div class="float-right">
            <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
        </div>
    </li>
    @endforeach
</ul>
@endsection