@extends('layouts.app')
@section('content')

<main class="p-2 max-w-screen-sm">
    <div class="pb-5">
        <h1 class="text-xl font-bold text-amber-800 border-1">{{ $blogpost->title }}</h1>
        <h2 class="text-l text-amber-900 border-1"><strong>By:</strong> {{ $blogpost->author }}</h2>
        <p>{{ $blogpost->content }}</p>
    </div>
</main>
@endsection
