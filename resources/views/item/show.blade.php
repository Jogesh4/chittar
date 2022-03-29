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


                <div class="col-12 p-2 mt-3 "><i class="fas fa-cut"> </i> Processing Time: 2-5 days  <i class="fas fa-plane"></i>  Shipping Time: 3-6 Business Days</div>




              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row mb-5">
      <h2 class="h2 titllee text-center fw-bold mb-3">Related Products</h2>
      <!-- @foreach($similar_items as $s)
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
                <button class="bttn" style=" border: 0; background: transparent; "><i class="fas fa-cart-arrow-down" style=" color: #ae0151; font-size: 20px; "></i></button>
              </form>
              @else
              <button type="button" disabled class="bttn" style=" border: 0; background: transparent;" ><i class="fas fa-cart-arrow-down" style=" color: #ccc; font-size: 20px; "></i></button>
              @endif
            @else
            <a href="{{ route('login') }}" class="bttn"><i class="fas fa-cart-arrow-down" style=" color: #ae0151; font-size: 20px; "></i></a>
            @endif
          </div>
        </div>
      </div>
      @endforeach -->

      
              @foreach($similar_items as $s)
              <div class="col-sm-6 col-md-3 col-lg-3 mb-3 mb-md-0 h-100" data-aos="fade-up">
                <div class="card card-span h-100">
                 
                 <div style="max-height: 250px; overflow: hidden;width: 100%;position:relative;">
                   
                      <img class="img-fluid h-100 w-100" src="{{ asset('storage/'.$s->image) }}" alt="..." /></a>
                    <div class="fw-bold favorite-icon">
                      <span class="" id="favorite_icon-{{ $s->id }}" onclick="add_favorite({{ $s->id }})"><i class="fa fa-thin fa-heart"></i></span>
                      <span class="favorite-active d-none" id="favorite_icon1-{{ $s->id }}"><i class="fa fa-thin fa-heart"></i></span>

                    </div>
                  
                </div> 
               
                  <div class="card-body ps-0  text-center">
                    <p class="mb-0" style="text-transform: uppercase;font-size: 19px;font-weight: 500;color: #000;">{{ $s->name }}</p>
                    <div class="fw-bold"><span class="pink-color">INR {{ $s->price }}</span></div>
                  </div>
                 

                  <div class="d-flex"> 
                   
                  <div class="col-8 p-2 info-pt"><i class="fas fa-cut"></i> Processing Time: 2-5 days </br> <i class="fas fa-plane"></i>  Shipping Time: 3-6 Business Days</div>
                  
                  <div class="col-2 p-2 info-pt">
                    <input type="number" id="quantity12" name="quantity" min="1" max="12" value="1">
                  </div>
                  <div class="col-2 p-2">
                
                @if(auth()->check())
                  @if(!\Cart::session(auth()->user()->id)->get($s->id))
                  <form method="POST" action="{{ route('add.to.cart', $s) }}">
                    @csrf
                    <button class="bttn" style=" border: 0; background: transparent; "><i class="fas fa-cart-arrow-down" style=" color: #ae0151; font-size: 20px; "></i></button>
                  </form>
                  @else
                    <button type="button" disabled class="bttn" style=" border: 0; background: transparent;" ><i class="fas fa-cart-arrow-down" style=" color: #ccc; font-size: 20px; "></i></button>
                  @endif
                @else
                  <a href="{{ route('login') }}" class="bttn"><i class="fas fa-cart-arrow-down" style=" color: #ae0151; font-size: 20px; "></i></a>
                @endif
</div>

</div>


                </div>
              </div>
              @endforeach
           



    </div>
  </div>
</section>
<!-- ----------------------------------------------------------------- -->



<section class=" p-4 bg-light ">
  

<div class="d-flex justify-content-center">
    <div class="col-lg-4 col-sm-12 text-center p-2 m-2 ">
    <div class="">
        <div class="h3 titllee text-center fw-bold">Customer Reviews</div>
</div>
        <div class="ratings"> <span class="product-rating" style="font-size: 33px;">4.6</span><span style="font-size: 25px;">/5</span>
            <div class="stars"> <i class="fa fassas0 fase fa-star"></i> <i class="fa fassas1 fase fa-star"></i> <i class="fa fassas2 fase fa-star"></i> <i class="fa fassas3 fase fa-star"></i> </div>
            <div class="rating-text"> <span>46 ratings & 15 reviews</span> </div>
        </div>

        <div class="text-center mt-3">                        
          <button class="btn-pink"> Write A Review</button>              
        </div>


    </div>



    <div class="col-lg-8 col-md-8 col-sm-12 bg-white p-2 m-2">
        

    <div class="review ">
                    <div class="row d-flex">
                        
                            <h5 class="">Emily</h5>
                            <p class="grey-text">30 min ago</p>
                        </div>
                    </div>
                    <div class="row pb-3">  
                    <div class="d-flex align-items-center product"> <span class="fas fassas fa-star"></span> <span class="fas fassas fa-star"></span> <span class="fas fassas fa-star"></span> <span class="fas fassas fa-star"></span> <span class="far fa-star"></span> </div>                       
                            <p class="mb-0 pl-3" style=" color: #b00755 ">Excellent</p>                        
                    </div>
                    <div class="row pb-3">
                        <p>Blue Pine, Artesian water is bottled at the source in the pristine Himalayas. Confined in an aquifer deep beneath the earth, its natural condition is protected from the source to the bottle. Naturally enriched with high amounts of vital organic minerals, Blue Pine makes its way through varying geological rocks that act as a natural purifying filter and also imbue it with a unique blend of natural minerals that give it, its distinct taste.</p>
                    </div>
                    
                </div>



    </div>
</div>

</section> 

<!-- ------------------------------------------------------ -->
<section class="bg-light p-5">
<div class="container  text-justify">
<p class="h3 titllee text-center fw-bold ">PRODUCTS Description</p>                 
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