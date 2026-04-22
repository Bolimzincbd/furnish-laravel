@extends('layouts.app')

@section('title', 'Our Products')

@section('content')
<section class="py-lg-8 py-5 text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="display-5 mb-3">Product List</h1>
                <p class="text-muted lead">Manage and view your entire furniture collection.</p>
                <a href="{{ route('products.create') }}" class="btn btn-primary mt-3">Add New Product</a>
            </div>
        </div>
    </div>
</section>

<section class="py-lg-8 py-5">
    <div class="container">
        <div class="row">
            <aside class="col-lg-3 mb-4">
                <h3 class="fw-semibold mb-3 h5">Filters</h3>
                <div class="mb-4 bg-light border bg-opacity-50 p-4">
                    <h6 class="fw-semibold mb-3 text-xs text-uppercase">Category</h6>
                    <ul class="list-unstyled lh-lg small mb-0">
                        <li><a href="#" class="text-dark">Living Room</a></li>
                        <li><a href="#" class="text-dark">Bedroom</a></li>
                    </ul>
                </div>
            </aside>

            <div class="col-lg-9">
                <div class="row g-4">
                    
                    @forelse($products as $product)
                    <div class="col-sm-6 col-md-4">
                        <div class="card product-card h-100 shadow-sm border-0">
                            <img src="{{ $product->image ? asset('storage/'.$product->image) : asset('images/product-img-1.jpg') }}" class="card-img-top" alt="{{ $product->name }}" style="height: 250px; object-fit: cover;">
                            <div class="card-body d-flex flex-column">
                                <p class="text-muted mb-2 text-uppercase text-xs">Furnish</p>
                                <div class="mb-3 flex-grow-1">
                                    <h3 class="h5 mb-1">{{ $product->name }}</h3>
                                    <div class="fw-semibold text-primary">${{ number_format($product->price, 2) }}</div>
                                    <p class="small text-muted mt-2">{{ Str::limit($product->description, 50) }}</p>
                                </div>
                                
                                <div class="d-flex gap-2 mt-auto">
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-outline-dark btn-sm flex-grow-1">Edit</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline flex-grow-1">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm w-100" onclick="return confirm('Delete this product?')">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center py-5">
                        <h4 class="text-muted">No products found.</h4>
                        <p>Click "Add New Product" to get started.</p>
                    </div>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</section>
@endsection