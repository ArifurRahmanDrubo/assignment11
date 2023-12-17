

@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>

    @include('partials.messages')

    <form method="post" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')

        <label for="name">Product Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" required>
        
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" value="{{ $product->quantity }}" required>
        
        <label for="price">Price:</label>
        <input type="number" name="price" value="{{ $product->price }}" step="0.01" required>

        <button type="submit">Update Product</button>
    </form>

    <a href="{{ route('products.index') }}">Back to Product List</a>
@endsection
