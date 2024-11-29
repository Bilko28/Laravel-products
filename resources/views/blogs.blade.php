@extends('layouts.app')
@section('content')

<main class="p-2">
    <div class="pb-5">
        <h1 class="text-xl font-bold text-amber-800 border-1">{{ $title }}</h1>
        <h2 class="text-l text-amber-900 border-1">{{ $subtitle }}</h2>
    </div>

    <form method="get">
        <label for="search">Search</label>
        <input class="border-2" type="text" id="search" name="search"/>

        <input type="submit" value="Search" />
    </form>


    @forelse($posts as $post)
        <a href="/blogs/{{$post->id}}">
        <div class="flex-col max-w-lg py-2">
            <h2  class=" text-xl text-amber-900 border-1">{{ $post->title }}</h2>
            <p> {{ \Str::limit ($post->content, 180) }}  </p>
            <p>{{ $post->author }}</p>
        </div>
    @empty <p>No blogs on that subject I'm afraid</p>
    @endforelse
    </a>
</main>

@endsection
