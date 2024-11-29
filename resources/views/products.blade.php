@extends('layouts.app')
@section('content')

<h1  class="text-3xl text-amber-900 border-2">{{ $title }}</h1>
<h2>{{ $subtitle }}</h2>

<form method="get" class="py-5">
    <div>
        <input class="border-2" type="text" id="search" name="search" placeholder="enter search term"/>
    </div>
    <input type="submit" value="Search" class="relative inline-flex items-center justify-center rounded-md p-1 bg-amber-300 bg-opacity-25 text-amber-800 hover:bg-gray-700 hover:text-amber-600 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" />
</form>

<main class="grid grid-cols-3">
    @forelse($products as $product)
        <a href="/products/{{$product->id}}">
            <div class="p-3">
                <h3 class="font-extrabold">{{ $product->name }}</h3>
                <p>{{$product->description}}</p>
                <p class="font-medium">£{{$product->price}}</p>
                @if($product->quantity === 0)
                    <p>Out of stock! Sorry</p>
                @elseif($product->quantity > 80)
                    <p class="font-medium text-red-600">Please buy me! Loads left</p>
                @else <p>Remaining stock: {{$product->quantity}}</p>
                @endif
            </div>
        </a>
        @empty <p>Nowt to see ’ere</p>
    @endforelse
</main>

@endsection
