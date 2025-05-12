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
            <p class="mb-3"> <i class="bi bi-tags --bs-dark-bg-subtle"></i> <Strong>Category:</Strong>  {{ $product->category->name }}</p>            

            <ul class="list-group list-group-flush mb-2">
                <li class="list-group-item"><strong>Price</strong> {{ $product->price }}</li>
                <li class="list-group-item"><strong>Discount</strong> {{ $product->discounted_price }}</li>
                <li class="list-group-item"><strong>Available Stock:</strong> {{ $product->stock }}</li>
                <li class="list-group-item"><strong>Color:</strong> {{ ucfirst($product->color) }}</li>
                <li class="list-group-item"><strong>Category:</strong> {{ $product->category->name }}</li>
                <li class="list-group-item"><strong>Size:</strong> {{ strtoupper($product->size) }}</li>
            </ul>

            <p class="text-muted mb-4" style="word-wrap: break-word ; overflow-wrap: break-word;"></p>

            <div class="mt-3" style="word-wrap: break-word ; overflow-wrap: break-word;">
                <strong>Description:</strong>{!! $product->description !!}
            </div>
            <a href="#" class="btn btn-primary btn-lg">Add to Cart</a>
        </div>
    </div>
</div>
@endsection
