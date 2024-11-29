@extends('layouts.app')
@section('content')

<form method="post" action="/blogs/add" class="flex-col max-w-56">
    @csrf
    <label for="title">Title</label>
    <input class="border-2" type="text" id="title" name="title" />
    @error('title')
    <p class = "text-red-600">{{$message}}</p>
    @enderror

    <label for="content">Content</label>
    <input class="border-2" type="text" id="content" name="content" />
    @error('content')
    <p class = "text-red-600">{{$message}}</p>
    @enderror

    <label for="author">Author name</label>
    <input class="border-2" type="text" id="author" name="author" />
    @error('author')
    <p class = "text-red-600">{{$message}}</p>
    @enderror

    <input class="border-2" type="submit" value="Add Blog" />

</form>
@endsection
