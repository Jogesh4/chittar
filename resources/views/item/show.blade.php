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
                <div class="thumbnail text-center">
                   @if(!empty($item->image1))
                      <img onclick="change_image(this)" src="{{ asset('storage/'.$item->image1) }}" width="70"> 
                   @endif
                   @if(!empty($item->image2))
                   <img onclick="change_image(this)" src="{{ asset('storage/'.$item->image2) }}" width="70"> 
                   @endif
                   @if(!empty($item->image3))
                   <img onclick="change_image(this)" src="{{ asset('storage/'.$item->image3) }}" width="70"> 
                   @endif
                </div>
              </div>
            </div>

            <div class="col-md-6 brands">
              <div class="product p-4">                
                <div class="mt-4 mb-3">
                 
                  <h2 class="item-name-view">{{ $item->name }}</h2>

                  <div class="text-uppercase text-muted  mt-3 mb-3">Model:  {{ $item->model }} <span class="fw-bold m-3"> | </span> <span class="text-uppercase text-muted brand">SKU:  @if($color_variants->count() > 0){{ $size_variants[0]->sku }} @endif</span> </div>
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

                  @if($size_variants->count() > 0)
                      <div class="col-lg-6 product-quantity">
                      <p class="fw-bold">Size </p>
                          @foreach($size_variants as $size)
                            <a class="size-button">{{ $size->variant_name }}</a>
                          @endforeach
                      </div>
                 @endif

                  <div class="col-lg-6 product-quantity">
                  <p class="fw-bold">Quantity </p>
                    <div class="quantity quantity-2 YK-quantity">                   
                        <span class="decrease" onclick="decreaseQty(this, '75|3|83|')">
                        <i class="fas fasu fa-minus"></i></span>
                        <input class="qty-input no-focus YK-qty" data-page="product-view" title="Available Quantity" type="text" id="quantity" value="1" readonly="">
                        <span class="increase" onclick="increaseQty(this, '75|3|83|')"> <i class="fas fasu fa-plus"></i></span>
                    </div>
                  </div>





                </div>
          @if($color_variants->count() > 0)
                <div class="d-flex mt-3">
                              <div class="col-3 text-left">
                              <p class="fw-bold">Variant</p>
                            </div>
                              <div class="col-3 text-left">

                                
                                    @foreach($color_variants as $color)
                                       <a class="color-box" style="background: {{ $color->variant_name }}" href="#"><span ></span></a>
                                     @endforeach
                            </div>
                </div>
          @endif


                
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
                    
                      <button id="add" class="btn-pink text-uppercase mr-2 px-4" onclick="add_cart({{ $item->id }},1)">Add to Cart</button>

                      <button id="added" type="button" disabled class="btn-pink text-uppercase mr-2 px-4 d-none">Added to Cart</button>

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
    <section class="bg-light p-3 mb-3">
<div class="container  text-justify">
<p class="h3 titllee text-center fw-bold ">PRODUCTS Description</p>                 
<p class="about">{{ $item->description }}</p>
</div>
</section>

    <div class="row mb-5">
      <h2 class="h2 titllee text-center fw-bold mb-3">Related Products</h2>
      
              @foreach($similar_items as $s)
              <div class="col-sm-6 col-md-3 col-lg-3 mb-3 mb-md-0 h-100" data-aos="fade-up">
                <div class="card card-span h-100">
                 
                 <div style="max-height: 250px; overflow: hidden;width: 100%;position:relative;">
                   
                      <a class="" href="{{ route('item.show', $s) }}"><img class="img-fluid h-100 w-100" src="{{ asset('storage/'.$s->image) }}" alt="..." /></a>
                    <div class="fw-bold favorite-icon">
                      <span class="" id="favorite_icon-{{ $s->id }}" onclick="add_favorite({{ $s->id }})"><i class="fa fa-thin fa-heart"></i></span>
                      <span class="favorite-active d-none" id="favorite_icon1-{{ $s->id }}"><i class="fa fa-thin fa-heart"></i></span>

                    </div>
                  
                </div> 

               <a class="" href="{{ route('item.show', $s) }}">
                  <div class="card-body ps-0  text-center">
                    <p class="mb-0" style="text-transform: uppercase;font-size: 19px;font-weight: 500;color: #000;">{{ $s->name }}</p>
                    <div class="fw-bold"><span class="pink-color">INR {{ $s->price }}</span></div>
                  </div>
               </a>
                 

                  <div class="d-flex"> 
                   
                  <div class="col-8 p-2 info-pt"><i class="fas fa-cut"></i> Processing Time: 2-5 days </br> <i class="fas fa-plane"></i>  Shipping Time: 3-6 Business Days</div>
                  
                  <div class="col-2 p-2 info-pt">
                    {{-- <input type="number" id="quantity12" name="quantity" min="1" max="12" value="1"> --}}
                  </div>
                  <div class="col-2 p-2">
                
                @if(auth()->check())
                  @if(!\Cart::session(auth()->user()->id)->get($s->id))
                  
                    <button id="add-{{ $s->id }}" class="bttn" style=" border: 0; background: transparent; " onclick="add_cart({{ $s->id }},2)"><i class="fas fa-cart-arrow-down" style=" color: #ae0151; font-size: 20px; "></i></button>
                    
                    <button id="added-{{ $s->id }}" type="button" disabled class="bttn d-none" style=" border: 0; background: transparent;" ><i class="fas fa-cart-arrow-down" style=" color: #ccc; font-size: 20px; "></i></button>
                  
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
    <div class="col-lg-4 col-md-4 col-sm-12 text-center p-2 m-2 ">
    <div class="">
        <div class="h3 titllee text-center fw-bold">Customer Reviews</div>
</div>
        <div class="ratings"> <span class="product-rating" style="font-size: 33px;">4.6</span><span style="font-size: 25px;">/5</span>
            <div class="align-items-center product"> <span class="fas fassas fa-star"></span> <span class="fas fassas fa-star"></span> <span class="fas fassas fa-star"></span> <span class="fas fassas fa-star"></span> <span class="far fa-star"></span> </div>                       
            <div class="rating-text"> <span>0 ratings & {{ $reviews->count() }} reviews</span> </div>
        </div>

        <div class="text-center mt-3">
                 @if(auth()->check())
                   <button class="btn-pink" onclick="review_click()"> Write A Review</button>  
                  @else
                  <a href="{{ route('login') }}" class="btn-pink"> Write A Review</a>
                @endif            
        </div>


    </div>



    <div class="col-lg-8 col-md-8 col-sm-12 bg-white p-2 m-2" id="review_view">
        
              @if($reviews->count() > 0)
                 @foreach($reviews as $review)
                    <div>
                        <div class="review">
                            <div class="row ">
                                
                                    <h5 class="">{{ $review->user->name }}<span onclick="edit_review({{ $review->id }})"><i class="fas fasu fa-pen p-1"></i></span></h5>
                                    <p class="grey-text">1 min ago</p>
                                </div>
                            </div>
                            <div class="row pb-3">  
                            <div class="d-flex align-items-center product"> <span class="fas fassas fa-star"></span> <span class="fas fassas fa-star"></span> <span class="fas fassas fa-star"></span> <span class="fas fassas fa-star"></span> <span class="far fa-star"></span> </div>                       
                                    {{-- <p class="mb-0 pl-3" style=" color: #b00755 ">Excellent</p>                         --}}
                            </div>
                            <div class="row pb-3">
                                <p>{{ $review->description }}.</p>
                            </div>

    <div class="review ">
                    <div class="row ">
                        
                            <h5 class="">Emily</h5>
                            <p class="grey-text">30 min ago</p>
                             <div class="row mt-2">
                                     <div class="col-md-12 col-lg-12 form-outline mb-2">
                                        @if(!empty($review->image))
                                          <div class="position-relative d-inline p-1">
                                              <img src="{{ !empty($review->image) ? asset('storage/'.$review->image) : '#' }}" alt="your image" width="80" height="80"/>
                                          </div>
                                        @endif
                                        @if(!empty($review->image1))
                                          <div class="position-relative d-inline p-1">
                                              <img src="{{ !empty($review->image1) ? asset('storage/'.$review->image1) : '#' }}" alt="your image" width="80" height="80"/>
                                          </div>
                                        @endif
                                        @if(!empty($review->image2))
                                          <div class="position-relative d-inline p-1">
                                              <img src="{{ !empty($review->image2) ? asset('storage/'.$review->image2) : '#' }}" alt="your image" width="80" height="80"/>
                                          </div>
                                        @endif
                                        @if(!empty($review->image3))
                                          <div class="position-relative d-inline p-1">
                                              <img src="{{ !empty($review->image3) ? asset('storage/'.$review->image3) : '#' }}" alt="your image" width="80" height="80"/>
                                          </div>
                                        @endif
                                          
                                    </div>
                             </div>

                      </div>
                      <hr/>
                  @endforeach
              @else

                        <div class="text-center mt-5">
                            <h3>No Reviews Found</h3>
                        </div>

              @endif

     </div>



     <div class="col-lg-8 col-md-8 col-sm-12 bg-white p-2 m-2 d-none" id="review_form">
        
      <form method="POST" action="{{ route('save_review') }}" enctype="multipart/form-data">
        @csrf
           <div class="text-center mb-5">
               <h3>Write a Review</h3>
           </div>
           <input type="hidden" name="item_id" value="{{ $item->id }}"/>
           <input type="hidden" name="review_id" id="review_id" value=""/>

                <div class="ssw-stars ssw-stars-large brand">  
                    <i class="fas fa-star fassas"></i><i class="fas fa-star fassas"></i><i class="fas fa-star fassas"></i><i class="fas fa-star fassas"></i><i class="fas fa-star fassas"></i>
                    <!-- <span class="ssw-review-counts" >5 Star </span> -->
                  </div>

                <div class="row mt-5">
                     <textarea id="description" name="review" class="form-control2" placeholder="Share details of your own experience at this place" spellcheck="false"></textarea>
                </div>
                <div class="row mt-3">
                     <div class="col-lg-4">
                        <input type="file" name="review_image[]" id="imgInp" accept="image/*" class="file-box" onchange="image_upload()" multiple/>
                      </div>
                </div>

                <div class="row mt-3">
                 <div class="col-md-12 col-lg-12 form-outline mb-2">
                     <div class="position-relative d-inline p-1">
                      <img class="d-none" id="blah0" src="#" alt="your image" width="20%" height="100%"/><i id="icon0" class="far fa-times-circle cross-icon d-none"></i>
                    </div>
                     <div class="position-relative d-inline p-1">
                       <img class="d-none" id="blah1" src="#" alt="your image" width="20%" height="100%"/><i id="icon1" class="far fa-times-circle cross-icon d-none"></i>
                     </div>
                     <div class="position-relative d-inline p-1">
                       <img class="d-none" id="blah2" src="#" alt="your image" width="20%" height="100%"/><i id="icon2" class="far fa-times-circle cross-icon d-none"></i>
                      </div>
                      <div class="position-relative d-inline p-1">
                       <img class="d-none" id="blah3" src="#" alt="your image" width="20%" height="100%"/><i id="icon3" class="far fa-times-circle cross-icon d-none"></i>
                      </div>
                  </div>
            </div>

                <div class="row mt-5">
                  <div class="col-4">
                  </div>
                  <div class="col-8">
                    <button class="btn-pink text-end" onclick="review_cancel()" style="background: #a9788e;">Cancel</button>
                       <button class="btn-pink">Submit</button>
                  </div>
                </div>
       </form>

     </div>

                



    </div>
</div>

</section> 

<!-- ------------------------------------------------------ -->
                
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

@section('extras')
  <script>

    function edit_review(id){
        
             $.ajax({
                    type: "Post",
                    url: '{{route('edit_review')}}',
                    datatype: 'json',
                    data: {
                      "_token": "{{ csrf_token() }}",
                        'id' : id,
                    },
                    success: function (data) {
                        const obj = JSON.parse(data);

                             document.getElementById('description').value = obj.new.description;
                             document.getElementById('review_id').value = id;
                         
                             document.getElementById('review_view').classList.add('d-none');
                             document.getElementById('review_form').classList.remove('d-none');

                      },
                    complete: function () {
                    },
                    error: function () {
                    }
                });

    }

    function image_upload(){
      const fileInput = document.getElementById('imgInp');
      var files = [...fileInput.files];
      var i = 0;
      for (const f of files) { 
        document.getElementById('blah'+i).classList.remove('d-none');
        document.getElementById('icon'+i).classList.remove('d-none');
         document.getElementById('blah'+i).src = URL.createObjectURL(f);

         i++;
      }
      
}

    function review_click(){
        document.getElementById('review_view').classList.add('d-none');
        document.getElementById('review_form').classList.remove('d-none');
    }

    function review_cancel(){
        document.getElementById('review_view').classList.remove('d-none');
        document.getElementById('review_form').classList.add('d-none');
    }

    function change_image(image){
      var container = document.getElementById("main-image");
      container.src = image.src;
    }
    document.addEventListener("DOMContentLoaded", function(event) {
    });

    function increaseQty(){
       var quantity = document.getElementById('quantity').value;
       
       document.getElementById('quantity').value = parseInt(quantity) + 1;

    }

    function decreaseQty(){
       var quantity = document.getElementById('quantity').value;

       if(quantity > 1){
          document.getElementById('quantity').value = parseInt(quantity) - 1;
       }
    }

    function add_cart(id,$type){

     var cart_no = document.getElementById('cart_no').textContent;

     if($type == 1){
         var quantity = document.getElementById('quantity').value;
     }
     else{
        var quantity = 1;
     }
            $.ajax({
                    type: "Post",
                    url: '{{route('add.to.cart')}}',
                    datatype: 'json',
                    data: {
                      "_token": "{{ csrf_token() }}",
                        'item_id' : id,
                        'quantity' : quantity,
                    },
                    success: function (data) {
                        const obj = JSON.parse(data);
                         
                        if($type == 1){
                             document.getElementById('add').classList.add('d-none');
                           document.getElementById('added').classList.remove('d-none');
                           document.getElementById('cart_no').textContent = parseInt(cart_no) + 1;
                        }
                        else{
                            document.getElementById('add-'+id).classList.add('d-none');
                           document.getElementById('added-'+id).classList.remove('d-none');
                           document.getElementById('cart_no').textContent = parseInt(cart_no) + 1;
                        }
                           

                      },
                    complete: function () {
                    },
                    error: function () {
                    }
                });
    }

  $( document ).ready(function() {
   
    $("#icon0").click(function(){
  const fileInput = document.getElementById('imgInp');
  console.log(fileInput)
      var files = [...fileInput.files];
      console.log(files);
            files.splice(0, 1);
        document.getElementById('blah0').classList.add('d-none');
        document.getElementById('icon0').classList.add('d-none');
});

$("#icon1").click(function(){
  const fileInput = document.getElementById('imgInp');
  console.log(fileInput)
      var files = [...fileInput.files];
      console.log(files);
            files.splice(1, 1);
        document.getElementById('blah1').classList.add('d-none');
        document.getElementById('icon1').classList.add('d-none');
});

$("#icon2").click(function(){
  const fileInput = document.getElementById('imgInp');
  console.log(fileInput)
      var files = [...fileInput.files];
      console.log(files);
            files.splice(2, 1);
        document.getElementById('blah2').classList.add('d-none');
        document.getElementById('icon2').classList.add('d-none');

});

$("#icon3").click(function(){
  const fileInput = document.getElementById('imgInp');
  console.log(fileInput)
      var files = [...fileInput.files];
      console.log(files);
            files.splice(2, 1);
        document.getElementById('blah3').classList.add('d-none');
        document.getElementById('icon3').classList.add('d-none');

});
});


  </script>
@endsection