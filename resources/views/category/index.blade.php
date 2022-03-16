@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<section class="py-9 border-bottom border-white border-5">
  <div class="container mt-5 mb-5">
    <div class="container-fluid mt-5 mb-5">
      <div class="row g-2">
        <div class="col-md-3">
          {{-- <div class="t-products p-2">
            <h6 class="text-uppercase">Jutti</h6>
            <div class="p-lists">
              <div class="d-flex justify-content-between mt-2"> <span>Punjabi Jutti</span> <span>23</span> </div>
              <div class="d-flex justify-content-between mt-2"> <span>Flory</span> <span>46</span> </div>
              <div class="d-flex justify-content-between mt-2"> <span>Pearl</span> <span>13</span> </div>
            </div>
          </div> --}}
          <div class="brand p-2">
            <div class="heading d-flex justify-content-between align-items-center">
              <h6 class="text-uppercase">Categories</h6>
              <span>--</span>
            </div>
            @foreach($categories as $cat)
            <div class="d-flex justify-content-between mt-2">
              {{-- <div class="form-check"> <input class="form-check-input" type="radio" value="" id="flexCheckDefault-{{ $cat->id }}"> <label class="form-check-label" for="flexCheckDefault-{{ $cat->id }}">{{ $cat->name }} </label> </div> --}}
              <a href="{{ route('category.index', $cat) }}">{{ $cat->name }}</a>
            </div>
            @endforeach
          </div>
          {{-- <div class="type p-2 mb-2">
            <div class="heading d-flex justify-content-between align-items-center">
              <h6 class="text-uppercase">Type</h6>
              <span>--</span>
            </div>
            <div class="d-flex justify-content-between mt-2">
              <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Name </label> </div>
              <span>23</span>
            </div>
            <div class="d-flex justify-content-between mt-2">
              <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Name </label> </div>
              <span>24</span>
            </div>
          </div> --}}
        </div>
        <div class="col-md-9">
          <div class="row g-2">
            <div class="col-md-4">
              @if($category->items->count() > 0)
              @foreach($category->items as $item)
              <div class="product py-4">
                {{-- <span class="off bg-success">-25% OFF</span> --}}
                <div class="text-center"> <a href="{{ route('item.show', $item) }}"><img src="{{ asset('storage/'.$item->image) }}" width="200"> </a></div>
                <div class="about text-center">
                  <h5>{{ $item->name }}</h5>
                  <span>${{ $item->price }}</span>
                </div>
                <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center">
                  {{-- <button class="btn-pink text-uppercase">Add to cart</button>
                  <div class="add"> <span class="product_fav"><i class="fa fa-heart"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div> --}}
                  @if(auth()->check())
                    @if(!\Cart::session(auth()->user()->id)->get($item->id))
                    <form method="POST" action="{{ route('add.to.cart', $item) }}">
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
              @endforeach
              @else
              <h3 class="text-center">No items</h3>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection