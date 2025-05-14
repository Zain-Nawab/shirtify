@extends('master') <!-- Your main layout -->

@section('main')
<div class="container my-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6">
            <img src="{{ asset('storage/' . $product->image_path) }}" class="img-fluid rounded shadow w-100" alt="{{ $product->name }}">
        </div>

        <!-- Product Details -->
        <div class="col-md-6">
            <h2 class="fw-bold mb-3">{{ $product->name }}</h2>
            <p class="mb-3"> <i class="bi bi-tags --bs-dark-bg-subtle"></i> <Strong>Category:</Strong>  {{ $product->category->name }}</p> 
                 
            <p><strong>Price :  </strong> {{ $product->price }} <sub class=" text-danger ">RS/-</sub></p>
            <p><strong>Discount :</strong> {{ $product->discounted_price }}  <sub class=" text-danger ">RS/-</sub> </p>
            <p><strong>Available Stock :</strong> {{ $product->stock }}</p>
           <p><strong>Color :</strong> {{ ucfirst($product->color) }}</p>
           <p><strong>Category :</strong> {{ $product->category->name }}</p>
           <p><strong>Size :</strong> {{ strtoupper($product->size) }}</p>
             
            <div class="mt-3 break-words whitespace-normal" style="word-wrap: break-word ; overflow-wrap: break-word;">
                <strong>Description:</strong>{!! $product->description !!}
            </div>
            <a href="#" class="btn btn-primary btn-md">Add to Cart <i class="bi bi-cart"></i></a>
        </div>
    </div>
</div>

@include('partials.footer')
@endsection
