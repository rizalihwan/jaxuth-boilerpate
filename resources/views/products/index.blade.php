@extends('layouts.app')

@section('content')
    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        @error('name')
            {{ $message }}
        @enderror
        <label for="price">Price:</label>
        <input type="number" name="price" id="price">
        @error('price')
            {{ $message }}
        @enderror
        <button type="submit">Save</button>
    </form>
    <hr>
    {{-- success session --}}
    @if(session()->has('success'))
        {{ session()->get('success') }}
    @endif
    {{-- error session --}}
    @if(session()->has('error'))
        {{ session()->get('error') }}
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>Name Product</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $key)
            <tr>
                <td>{{ $key->name }}</td>
                <td>{{ $key->price }}</td>
                <td>
                    <a href="{{ route('products.edit', $key->id) }}">Edit</a>
                    <form action="{{ route('products.destroy', $key->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" onclick="return confirm('Apa anda yakin?')">Delete</button>
                    </form>
                </td>
                @empty
                    <th colspan="3" style="color: red;">Data Kosong.</th>
                @endforelse
            </tr>
        </tbody>
    </table>
@endsection
