

@extends('layouts.app')

@section('content')
    <div class="menu-bar">
        <ul>
            <li><a href="{{ route('products.index') }}">Product List</a></li>
            <li><a href="{{ route('products.create') }}">Create Product</a></li>
            <li><a href="{{ route('sales.index') }}">Sales History</a></li>
           
        </ul>
    </div>

    <div class="dashboard-container">
        <div class="card">
            <h2>Today's Sales</h2>
            <p>{{ $todaySales }}</p>
        </div>

        <div class="card">
            <h2>Yesterday's Sales</h2>
            <p>{{ $yesterdaySales }}</p>
        </div>

        <div class="card">
            <h2>This Month's Sales</h2>
            <p>{{ $thisMonthSales }}</p>
        </div>

        <div class="card">
            <h2>Last Month's Sales</h2>
            <p>{{ $lastMonthSales }}</p>
        </div>
    </div>
@endsection


