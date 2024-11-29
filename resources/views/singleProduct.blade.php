@extends('layouts.app')
@section('content')

<h1>{{ $product->name }}</h1>
<p>{{ $product->image }}</p>
<p>{{ $product->description }}</p>

<form method="post" action="/products/{{ $product->id }}">
    @method('DELETE')
    @csrf
    <input type="submit" value="Delete product" class="relative inline-flex items-center justify-center rounded-md p-1 bg-amber-300 bg-opacity-25 text-amber-800 hover:bg-gray-700 hover:text-amber-600 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"/>
</form>

<button class="mb-4 relative inline-flex items-center justify-center rounded-md p-1 bg-amber-300 bg-opacity-25 text-amber-800 hover:bg-gray-700 hover:text-amber-600 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
<a href="/products/edit/{{$product->id}}">Edit product</a>
</button>

@if (session('status'))
    <p class = "text-green-600">{{session('status')}}</p>
@endif

@endsection
