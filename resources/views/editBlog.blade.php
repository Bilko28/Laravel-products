@extends('layouts.app')
@section('content')
<form method="post" action="/blogs/edit/{{ $blog->id }}" class="flex-col max-w-56">
    @method('PUT')
    @csrf

    <label for="title">Title</label>
    <input class="border-2" type="text" id="title" name="title" value="{{ $blog->title }}"/>
    @error('title')
    <p class = "text-red-600">{{$message}}</p>
    @enderror

    <label for="author">Author</label>
    <input class="border-2" type="text" id="author" name="author" value="{{$blog->author }}"/>
    @error('author')
    <p class = "text-red-600">{{$message}}</p>
    @enderror

    <label for="content">Content</label>
    <input class="h-48 border-2 " type="text" id="content" name="content" value="{{$blog->content}}" />
    @error('content')
    <p class = "text-red-600">{{$message}}</p>
    @enderror

    <input class="my-2 p-1 bg-amber-200 bg-opacity-50 rounded" type="submit" value="Edit blog"></input>

</form>
@endsection
