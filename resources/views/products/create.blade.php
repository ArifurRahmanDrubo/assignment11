

@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>
    
    @include('partials.messages')

    <form method="post" action="{{ route('products.store') }}">
        @csrf
        <label for="name">Product Name:</label>
        <input type="text" name="name" required>
        
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" required>
        
        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" required>

        <button type="submit">Create Product</button>
    </form>
@endsection
