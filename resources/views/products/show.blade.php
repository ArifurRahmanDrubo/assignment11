

@extends('layouts.app')

@section('content')
    <h1>Product Details</h1>

    @include('partials.messages')

    <p><strong>ID:</strong> {{ $product->id }}</p>
    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Quantity:</strong> {{ $product->quantity }}</p>
    <p><strong>Price:</strong> {{ $product->price }}</p>

    <a href="{{ route('products.index') }}">Back to Product List</a>
@endsection
