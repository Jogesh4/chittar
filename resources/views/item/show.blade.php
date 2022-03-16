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
            <div class="col-md-6">
              <div class="product p-4">
                {{-- <div class="d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span class="ml-1">Back</span> </div>
                  <i class="fa fa-shopping-cart text-muted"></i>
                </div> --}}
                <div class="mt-4 mb-3">
                  <span class="text-uppercase text-muted brand">{{ $item->model }}</span>
                  <h5 class="text-uppercase">{{ $item->name }}</h5>
                  <div class="price d-flex flex-row align-items-center">
                    <span class="act-price">${{ $item->price }}</span>
                    {{-- <div class="ml-2"> <small class="dis-price">${{ $item->price }}</small> <span>40% OFF</span> </div> --}}
                  </div>
                </div>
                <p class="about">{{ $item->description }}</p>
                {{-- <div class="sizes mt-5">
                  <h6 class="text-uppercase">Size</h6>
                  <label class="radio"> <input type="radio" name="size" value="S" checked> <span>S</span> </label> <label class="radio"> <input type="radio" name="size" value="M"> <span>M</span> </label> <label class="radio"> <input type="radio" name="size" value="L"> <span>L</span> </label> <label class="radio"> <input type="radio" name="size" value="XL"> <span>XL</span> </label> <label class="radio"> <input type="radio" name="size" value="XXL"> <span>XXL</span> </label>
                </div> --}}
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
                  
                  {{-- <button class="btn-pink text-uppercase mr-2 px-4">Add to cart</button> <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-5">
      <h2 class="text-center">More Items</h2>
      @foreach($similar_items as $s)
      <div class="col-md-3 mb-3">
        <div class="card">
          <div class="card-body">
            <img class="img-fluid" style="height: 250px;" src="{{ asset('storage/'.$s->image) }}" alt="..." />
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