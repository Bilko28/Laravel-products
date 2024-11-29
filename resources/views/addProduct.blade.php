@extends('layouts.app')
@section('content')
<form method="post" action="/products/add" class="flex-col max-w-56">
    @csrf
    <label for="name">Name</label>
    <input class="border-2" type="text" id="name" name="name" value="{{old('name')}}"/>
    @error('name')
    <p class = "text-red-600">{{$message}}</p>
    @enderror

    <label for="description">Description</label>
    <input class="border-2" type="text" id="description" name="description" value="{{old('description')}}"/>
    @error('description')
    <p class = "text-red-600">{{$message}}</p>
    @enderror

    <label for="image">Image URL</label>
    <input class="border-2" type="text" id="image" name="image" value="{{old('image')}}" />
    @error('image')
    <p class = "text-red-600">{{$message}}</p>
    @enderror

    <label for="quantity">Quantity</label>
    <input class="border-2" type="text" id="quantity" name="quantity" value="{{old('quantity')}}"/>
    @error('quantity')
    <p class = "text-red-600">{{$message}}</p>
    @enderror

    <label for="price">Price</label>
    <input class="border-2" type="text" id="price" name="price" value="{{old('price')}}"/>
    @error('price')
    <p class = "text-red-600">{{$message}}</p>
    @enderror


    <input class="border-2" type="submit" value="Submit product"/>

</form>
@endsection
