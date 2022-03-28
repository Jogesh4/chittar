@extends('layouts.app')

@section('title', 'Search')

@section('content')
<section class="py-7 border-bottom border-white border-5">
  <div class="container mt-5">
    <div class="row d-flex justify-content-center mb-5">
      <div class="col-md-12">
        <div class="card">
          <div class="row">
            <div class="col-md-6">
              <div class="images p-3">
                <div class="text-center p-4"> <img id="main-image" src="{{ asset('storage/'.$item->image) }}" width="250" /> </div>
                <div class="thumbnail text-center"> <img onclick="change_image(this)" src="{{ asset('storage/'.$item->image) }}" width="70"> <img onclick="change_image(this)" src="{{ asset('storage/'.$item->image) }}" width="70"> </div>
              </div>
            </div>

            <div class="col-md-6 brands">
              <div class="product p-4">                
                <div class="mt-4 mb-3">
                 
                  <h2 class="item-name-view">{{ $item->name }}</h2>

                  <div class="text-uppercase text-muted  mt-3 mb-3">Model:  {{ $item->model }} <span class="fw-bold m-3"> | </span> <span class="text-uppercase text-muted brand">SKU:  {{ $item->sku }}</span> </div>
                  <div class="ssw-stars ssw-stars-large brand">  
                    <i class="fas fa-star fassas"></i><i class="fas fa-star fassas"></i><i class="fas fa-star fassas"></i><i class="fas fa-star fassas"></i><i class="fas fa-star fassas"></i>
                    <!-- <span class="ssw-review-counts" >5 Star </span> -->
                  </div>

                  <div class="price align-items-center mt-3">                    
                    <p class="act-price mb-0" style=" line-height: 1; font-size: 1.8rem; font-weight: 500; color: var(--txt-body); margin-right: 8px; "><span class="fassas">INR </span>{{ $item->price }}</p>                   
                    <p class="mt-0">Price: Excluding of all taxes</p>
                  </div>
                  
                </div>
                <div class="d-flex mt-3">

                  <div class="col-lg-6 product-quantity">
                   <p class="fw-bold">Size </p>
                    <div class="quantity quantity-2 YK-quantity">  
                        <input class="qty-input no-focus YK-qty" data-page="product-view" title="Available Quantity" type="text" name="size" max="1" min="15">
                       </div>
                  </div>

                  <div class="col-lg-6 product-quantity">
                  <p class="fw-bold">Quantity </p>
                    <div class="quantity quantity-2 YK-quantity">                   
                        <span class="decrease" onclick="decreaseQty(this, '75|3|83|')">
                        <i class="fas fasu fa-minus"></i></span>
                        <input class="qty-input no-focus YK-qty" data-page="product-view" title="Available Quantity" type="text" name="quantity" max="10" min="14" value="14" readonly="">
                        <span class="increase" onclick="increaseQty(this, '75|3|83|')"> <i class="fas fasu fa-plus"></i></span>
                    </div>
                  </div>





                </div>

                <div class="d-flex mt-3">
                              <div class="col-3 text-left">
                              <p class="fw-bold">Variant</p>
                            </div>
                              <div class="col-3 text-left">
                              <a href="#"> <img src="/storage/product_image/000.jpg" width="20" height="20" class="color-vari"> </a>
                              <a href="#"> <img src="/storage/product_image/000.jpg" width="20" height="20" class="color-vari"> </a>  
                              <a href="#"> <img src="/storage/product_image/000.jpg" width="20" height="20" class="color-vari"> </a>
                              <a href="#"> <img src="/storage/product_image/000.jpg" width="20" height="20" class="color-vari"> </a>  
                              <a href="#"> <img src="/storage/product_image/000.jpg" width="20" height="20" class="color-vari"> </a>
                            </div>
                              </div>


                
	<!-- <div class="mt-3">
  <a class="product-share fassas" href="">
			<span class="product-share__icon">
      <i class="fas fa-share-alt"></i>
			</span>
			<span class="product-share__lbl">Share</span>
		</a>
	</div> -->


                



                
                <div class="cart mt-4 align-items-center">
                  @if(auth()->check())
                    @if(!\Cart::session(auth()->user()->id)->get($item->id))
                    <form method="POST" action="{{ route('add.to.cart', $item) }}">
                      @csrf
                      <button class="btn-pink text-uppercase mr-2 px-4">Add to Cart</button>
                    </form>
                    @else
                      <button type="button" disabled class="btn-pink text-uppercase mr-2 px-4">Added to Cart</button>
                    @endif
                  @else
                    <a href="{{ route('login') }}" class="btn-pink text-uppercase mr-2 px-4">Login to add</a>
                  @endif
                  
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row mb-5">
      <h2 class="h2 titllee text-center ">Related Products</h2>
      @foreach($similar_items as $s)
      <div class="col-md-3 col-lg-3 col-sm-6 mb-3">
        <div class="card">
          <div class="card-body">
            <img class="img-fluid" style="max-height: 250px;" src="{{ asset('storage/'.$s->image) }}" alt="..." />
            <p class="mb-0">{{ $s->name }}</p>
            <p class="mb-0">${{ $s->price }}</p>


            @if(auth()->check())
              @if(!\Cart::session(auth()->user()->id)->get($s->id))
              <form method="POST" action="{{ route('add.to.cart', $s) }}">
                @csrf
                <button class="btn btn-primary btn-block">Add to Cart</button>
              </form>
              @else
                <button type="button" disabled class="btn btn-primary btn-block">Added to Cart</button>
              @endif
            @else
              <a href="{{ route('login') }}" class="btn btn-primary btn-block">Login</a>
            @endif
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>


<section>
<div class="container">
<p class="h2 titllee text-center ">Description</p>                 
<p class="about">{{ $item->description }}</p>
</div>
</section>                
@endsection

@section('extras')
  <script>
    function change_image(image){
      var container = document.getElementById("main-image");
      container.src = image.src;
    }
    document.addEventListener("DOMContentLoaded", function(event) {
    });
  </script>
@endsection