@extends('layouts.app')

@section('title', 'Search')

@section('content')
  <section class="mb-0">
    <div class="container">
      <div class="row ">

      <div class="col-md-12 bg-light text-center mb-3 p p-3" data-aos="fade-up">
      <div style="text-transform: uppercase;color: #454545;font-weight: 500;margin-left: 9px;" class="h3">
            @if(!empty(request()->name)) 
               {{ request()->name }}
            @elseif($category_name != "") 
               {{ $category_name }}
            @else
               All Products
            @endif
      </div>
         <div class="m-2"><a href="/" title="Home" class="home-bc">Home</a> <span aria-hidden="true">›</span><span style="text-transform: uppercase;color: #454545;font-weight: 300;margin-left: 9px;">
               @if(!empty(request()->name)) 
               {{ request()->name }}
            @elseif($category_name != "")
               {{ $category_name }}
            @else
               All Products
            @endif
        </span> </div>
        </div>

      <div class="col-md-3">
            <div class="t-products brand p-2 mb-2">
                <h4 class="text-uppercase">Category</h4>
                <div class="p-lists">
                   @foreach($categories as $category)
                    <div class="d-flex justify-content-between mt-2 text-uppercase" style=" border-bottom: 1px dashed #ccc;">
                      @if($category_name == $category->name)
                        <a href="/search/?category={{ $category->name }}"><span style="color:#ae0151;">{{ $category->name }}</span></a>
                      @else
                        <a href="/search/?category={{ $category->name }}"><span>{{ $category->name }}</span></a>
                      @endif
                    </div>
                  @endforeach
                </div>
            </div>

          
            <div class="brand p-2 mb-2">
                <div class="heading d-flex justify-content-between align-items-center">
                    <h6 class="text-uppercase">Brand</h6> <span>--</span>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Name </label> </div> <span>13</span>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked=""> <label class="form-check-label" for="flexCheckChecked"> Name </label> </div> <span>4</span>
                </div>
                
            </div>
            <div class="type p-2 mb-2">
                <div class="heading d-flex justify-content-between align-items-center">
                    <h6 class="text-uppercase">Type</h6> <span>--</span>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Name </label> </div> <span>23</span>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked=""> <label class="form-check-label" for="flexCheckChecked"> Name </label> </div> <span>24</span>
                </div>
                
            </div>



            <div class="type p-2 mb-2">
                <div class="heading d-flex justify-content-between align-items-center">
                    <h6 class="text-uppercase">Product Condition</h6> <span>--</span>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Name </label> </div> <span>23</span>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked=""> <label class="form-check-label" for="flexCheckChecked"> Name </label> </div> <span>24</span>
                </div>
                
            </div>



            <div class="type p-2 mb-2">
                <div class="heading d-flex justify-content-between align-items-center">
                    <h6 class="text-uppercase">Price Range</h6> <span>--</span>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault">INR 400 -  600 </label> </div>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked=""> <label class="form-check-label" for="flexCheckChecked">INR 600 -  1000</label> </div>
                </div>

                <div class="d-flex justify-content-between mt-2">
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" > <label class="form-check-label" for="flexCheckChecked">INR 1000 -  1500</label> </div>
                </div>

                <div class="d-flex justify-content-between mt-2">
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" > <label class="form-check-label" for="flexCheckChecked">INR 1500 -  3000</label> </div>
                </div>
                

            </div>





        </div>
       
        <div class="col-lg-9 col-md-9 col-sm-12">
          <div class="row align-items-center g-2">
            @if($items->count() > 0)
              @foreach($items as $item)
              <div class="col-sm-6 col-md-3 col-lg-4 mb-3 mb-md-0 h-100" data-aos="fade-up">
                <div class="card card-span h-100">
                 
                 <div style="overflow: hidden;width: 100%;position:relative;">
                   <a class="" href="{{ route('item.show', $item) }}">
                   <div class="img-style-low">
                      <img class="img-fluid h-100 w-100" src="{{ asset('storage/'.$item->image) }}" alt="..." /></div ></a>
                    <div class="fw-bold favorite-icon">
                       @if(auth()->check())
                                  <span class="" id="favorite_icon-{{ $item->id }}" onclick="add_favorite({{ $item->id }})"><i class="fa fa-thin fa-heart"></i></span>
                                 <span class="favorite-active d-none" id="favorite_icon1-{{ $item->id }}"><i class="fa fa-thin fa-heart"></i></span>
                        @else
                                  <span class="" id="favorite_icon-{{ $item->id }}" onclick="add_favorite({{ $item->id }})"><a href="{{ route('login') }}"><i class="fa fa-thin fa-heart"></i></a></span>

                        @endif
                    </div>
                  
                </div> 
                <a class="" href="{{ route('item.show', $item) }}">
                  <div class="card-body ps-0  text-center">
                    <p class="mb-0" style="text-transform: uppercase;font-size: 19px;font-weight: 500;color: #000;">{{ $item->name }}</p>
                    <div class="fw-bold"><span class="pink-color">INR {{ $item->price }}</span></div>
                  </div>
                  </a>

                  <div class="d-flex"> 
                   
                  <div class="col-8 p-2 info-pt"><i class="fas fa-cut"></i> Processing Time: 2-5 days </br> <i class="fas fa-plane"></i>  Shipping Time: 3-6 Business Days</div>
                  
                  <div class="col-2 p-2 info-pt">
                    {{-- <input type="number" id="quantity12" name="quantity" min="1" max="12" value="1"> --}}
                  </div>
                  <div class="col-2 p-2">
                
                @if(auth()->check())
                  @if(!\Cart::session(auth()->user()->id)->get($item->id))
                  
                    <button id="add-{{ $item->id }}" class="bttn" type="button" style=" border: 0; background: transparent;" onclick="add_cart({{ $item->id }})"><i class="fas fa-cart-arrow-down" style=" color: #ae0151; font-size: 20px; "></i></button>
                    
                    <button id="added-{{ $item->id }}" type="button" disabled class="bttn d-none" style=" border: 0; background: transparent;" ><i class="fas fa-cart-arrow-down" style=" color: #ccc; font-size: 20px; "></i></button>
                    
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
            @else
                   <div class="text-center" style="margin-top: 20%;">
                       <h3>No Product Found</h3>
                   </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- ------------------------------------2nd--------------------------- -->
<section class="mt-0 p-1">
  <div class="container">
<div class="h2 titllee text-center ">Recently Viewed <span class="line-tt"></span></div>

<div class="row m-4">

<div class="col-lg-12 col-md-12 col-sm-12">
          <div class="row align-items-center g-2">
            @if($recent_items->count() > 0)
              @foreach($recent_items as $item)
              <div class="col-sm-6 col-md-3 col-lg-3 mb-3 mb-md-0 h-100" data-aos="fade-up">
                <div class="card card-span h-100">
                 
                 <div style="overflow: hidden;width: 100%;position:relative;">
                   <a class="" href="{{ route('item.show', $item) }}">
                   <div class="img-style-low">
                      <img class="img-fluid h-100 w-100" src="{{ asset('storage/'.$item->image) }}" alt="..." /></div ></a>
                    <div class="fw-bold favorite-icon">
                       @if(auth()->check())
                                  <span class="" id="recent_favorite_icon-{{ $item->id }}" onclick="add_favorite_recent({{ $item->id }})"><i class="fa fa-thin fa-heart"></i></span>
                                 <span class="favorite-active d-none" id="recent_favorite_icon1-{{ $item->id }}"><i class="fa fa-thin fa-heart"></i></span>
                        @else
                                  <span class="" id="recent_favorite_icon-{{ $item->id }}" onclick="add_favorite_recent({{ $item->id }})"><a href="{{ route('login') }}"><i class="fa fa-thin fa-heart"></i></a></span>

                        @endif
                    </div>
                  
                </div> 
                <a class="" href="{{ route('item.show', $item) }}">
                  <div class="card-body ps-0  text-center">
                    <p class="mb-0" style="text-transform: uppercase;font-size: 19px;font-weight: 500;color: #000;">{{ $item->name }}</p>
                    <div class="fw-bold"><span class="pink-color">INR {{ $item->price }}</span></div>
                  </div>
                  </a>

                  <div class="d-flex"> 
                   
                  <div class="col-8 p-2 info-pt"><i class="fas fa-cut"></i> Processing Time: 2-5 days </br> <i class="fas fa-plane"></i>  Shipping Time: 3-6 Business Days</div>
                  
                  <div class="col-2 p-2 info-pt">
                    {{-- <input type="number" id="quantity12" name="quantity" min="1" max="12" value="1"> --}}
                  </div>
                  <div class="col-2 p-2">
                
                @if(auth()->check())
                  @if(!\Cart::session(auth()->user()->id)->get($item->id))
                  
                    <button id="recent_add-{{ $item->id }}" class="bttn" type="button" style=" border: 0; background: transparent;" onclick="add_cart_recent({{ $item->id }})"><i class="fas fa-cart-arrow-down" style=" color: #ae0151; font-size: 20px; "></i></button>
                    
                    <button id="recent_added-{{ $item->id }}" type="button" disabled class="bttn d-none" style=" border: 0; background: transparent;" ><i class="fas fa-cart-arrow-down" style=" color: #ccc; font-size: 20px; "></i></button>
                    
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
            @else
                   <div class="text-center" style="margin-top: 20%;">
                       <h3>No Product Found</h3>
                   </div>
            @endif
          </div>
        </div>
        </div>
</div>
</section>


@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>






<script>

   function add_cart(id){

     var cart_no = document.getElementById('cart_no').textContent;

            $.ajax({
                    type: "Post",
                    url: '{{route('add.to.cart')}}',
                    datatype: 'json',
                    data: {
                      "_token": "{{ csrf_token() }}",
                        'item_id' : id,
                    },
                    success: function (data) {
                        const obj = JSON.parse(data);
                         
                           document.getElementById('add-'+id).classList.add('d-none');
                           document.getElementById('added-'+id).classList.remove('d-none');
                           document.getElementById('cart_no').textContent = parseInt(cart_no) + 1;

                      },
                    complete: function () {
                    },
                    error: function () {
                    }
                });

    }

function add_favorite(id){
       
            $.ajax({
                    type: "Get",
                    url: '{{route('add_favorite')}}',
                    datatype: 'json',
                    data: {
                        'item_id' : id,
                    },
                    success: function (data) {
                        const obj = JSON.parse(data);
                         
                           document.getElementById('favorite_icon-'+id).classList.add('d-none');
                           document.getElementById('favorite_icon1-'+id).classList.remove('d-none');

                      },
                    complete: function () {
                    },
                    error: function () {
                    }
                });

    }

    function add_cart_recent(id){

     var cart_no = document.getElementById('cart_no').textContent;

            $.ajax({
                    type: "Post",
                    url: '{{route('add.to.cart')}}',
                    datatype: 'json',
                    data: {
                      "_token": "{{ csrf_token() }}",
                        'item_id' : id,
                    },
                    success: function (data) {
                        const obj = JSON.parse(data);
                         
                           document.getElementById('recent_add-'+id).classList.add('d-none');
                           document.getElementById('recent_added-'+id).classList.remove('d-none');
                           document.getElementById('cart_no').textContent = parseInt(cart_no) + 1;

                      },
                    complete: function () {
                    },
                    error: function () {
                    }
                });

    }

function add_favorite_recent(id){
       
            $.ajax({
                    type: "Get",
                    url: '{{route('add_favorite')}}',
                    datatype: 'json',
                    data: {
                        'item_id' : id,
                    },
                    success: function (data) {
                        const obj = JSON.parse(data);
                         
                           document.getElementById('recent_favorite_icon-'+id).classList.add('d-none');
                           document.getElementById('recent_favorite_icon1-'+id).classList.remove('d-none');

                      },
                    complete: function () {
                    },
                    error: function () {
                    }
                });

    }

</script>