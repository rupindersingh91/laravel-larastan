<!-- resources/views/posts/show.blade.php -->

@extends('layouts.app')

@section('content')
<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>
<a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Edit</a>
<form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
@endsection