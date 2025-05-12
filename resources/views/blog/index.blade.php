@extends('master')

@section('main')


@include('partials.whywithus')

<!-- product section -->
<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Our <span>products</span>
          </h2>
       </div>
       <div class="row">
 
        @foreach ($products as $product)
        <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="box">
               <div class="option_container">
                  <div class="options">
                     <a href="" class="option1">
                     Add To Cart
                     </a>
                     <a href="" class="option2">
                     Buy Now
                     </a>
                     <a href="{{ route('shop.detail', $product->slug) }}" class="option3 btn-warning">
                        Details
                        </a>
                  </div>
               </div>
               <div class="img-box">
                  <img src="{{ asset('storage/' . $product->image_path) }}" alt="">
               </div>
               <div class="detail-box">
                  <h5>
                     {{ $product->name }}
                  </h5>
                  <h6>
                    Price {{ $product->price }}
                  </h6>
               </div>
            </div>
         </div>
         @endforeach
       </div>
   
       
       <div class="btn-box">
          <a href="">
          View All products
          </a>
       </div>
    </div>
 </section>
 <!-- end product section -->

 @include('partials.newarival')
 
 @include('partials.subcribe')

<h2>Blog index</h2>

@endsection
