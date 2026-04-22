@extends('layouts.app')

@section('title', 'Our Products')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-8">
                <h2>Furniture Collection</h2>
            </div>
            <div class="col-md-4 text-end">
                <a href="{{ route('products.create') }}" class="btn btn-primary">Add New Product</a>
            </div>
        </div>

        <div class="row">
            @foreach($products as $product)
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ $product->image ? asset('storage/'.$product->image) : asset('images/product-placeholder.jpg') }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="text-muted">${{ number_format($product->price, 2) }}</p>
                        <a href="#" class="btn btn-outline-dark btn-sm">Add to Cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection