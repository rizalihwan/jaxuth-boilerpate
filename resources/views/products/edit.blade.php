@extends('layouts.app')

@section('content')
    <form action="{{ route('products.update', $product->id) }}" method="post">
        @csrf
        @method('put')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $product->name ?? old('name') }}" id="name">
        @error('name')
            {{ $message }}
        @enderror
        <label for="price">Price:</label>
        <input type="number" name="price" value="{{ $product->price ?? old('price') }}" id="price">
        @error('price')
            {{ $message }}
        @enderror
        <a href="{{ route('products.index') }}">BACK</a>
        <button type="submit">UPDATE</button>
    </form>
@endsection
