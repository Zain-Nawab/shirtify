@extends('master') <!-- Your main layout -->

@section('main')
<div class="container my-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6">
            <img src="{{ asset('storage/' . $product->image_path) }}" class="img-fluid rounded shadow" alt="{{ $product->name }}">
        </div>

        <!-- Product Details -->
        <div class="col-md-6">
            <h2 class="fw-bold mb-3">{{ $product->name }}</h2>
            <p class="text-muted mb-4 text-break" style="max-width: 100%; overflow-wrap: break-word;">{!! $product->description !!}</p>

            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item"><strong>Rice</strong> {{ $product->price }}</li>
                <li class="list-group-item"><strong>Discount</strong> {{ $product->discounted_price }}</li>
                <li class="list-group-item"><strong>Available Stock:</strong> {{ $product->stock }}</li>
                <li class="list-group-item"><strong>Color:</strong> {{ ucfirst($product->color) }}</li>
                <li class="list-group-item"><strong>Category:</strong> {{ $product->category->name }}</li>
                <li class="list-group-item"><strong>Size:</strong> {{ strtoupper($product->size) }}</li>
            </ul>

            <a href="#" class="btn btn-primary btn-lg">Add to Cart</a>
        </div>
    </div>
</div>
@endsection
