@extends('layouts.app')

@section('title', 'Search')

@section('content')
  <section class="mb-0">
    <div class="container">
      <div class="row ">

      <div class="col-md-12 bg-light text-center mb-3 p p-3" data-aos="fade-up">
      <div style="text-transform: uppercase;color: #454545;font-weight: 500;margin-left: 9px;" class="h3">{{ request()->name }}</div>
         <div class="m-2"><a href="/" title="Home" class="home-bc">Home</a> <span aria-hidden="true">›</span><span style="text-transform: uppercase;color: #454545;font-weight: 300;margin-left: 9px;">{{ request()->name }}</span> </div>
        </div>

      <div class="col-md-3">
            <div class="t-products p-2">
                <h6 class="text-uppercase">Category</h6>
                <div class="p-lists">
                   @foreach($categories as $category)
                    <div class="d-flex justify-content-between mt-2"> <span>{{ $category->name }}</span></div>
                  @endforeach
                </div>
            </div>
          
            <div class="brand p-2">
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
        </div>





       
        <div class="col-lg-9 col-md-9 col-sm-12">
          <div class="row align-items-center g-2">
            @if($items->count() > 0)
              @foreach($items as $item)
              <div class="col-sm-6 col-md-3 col-lg-3 mb-3 mb-md-0 h-100" data-aos="fade-up">
                <div class="card card-span h-100">
                  <img class="img-fluid h-100" src="{{ asset('storage/'.$item->image) }}" alt="..." style=" max-height: 250px !important; "/>
                  <div class="card-img-overlay ps-0"> </div>
                  <div class="card-body ps-0  text-center">
                    <p class="mb-0" style="text-transform: uppercase;font-size: 19px;font-weight: 500;color: #000;">{{ $item->name }}</p>
                    <div class="fw-bold"><span class="pink-color">INR {{ $item->price }}</span></div>
                  </div>
                  <div class="d-flex"> 
                  <div class="col-8 p-2 info-pt"><i class="fas fa-cut"></i> Processing Time: 2-5 days </br> <i class="fas fa-plane"></i>  Shipping Time: 3-6 Business Days</div>
                  
                  <div class="col-2 p-2 info-pt">
                    <input type="number" id="quantity12" name="quantity" min="1" max="12" value="1">
                  </div>
                  <div class="col-2 p-2">
                  <a class="stretched-link" href="{{ route('item.show', $item) }}"></a>
                
                @if(auth()->check())
                  @if(!\Cart::session(auth()->user()->id)->get($item->id))
                  <form method="POST" action="{{ route('add.to.cart', $item) }}">
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
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- ------------------------------------2nd--------------------------- -->
<section class="mt-0 p-1">
  <div class="container">
<div class="h2 titllee text-center ">Recently Viewed</div>

<div class="row m-4">

<div class="col-lg-12 col-md-12 col-sm-12">
          <div class="row align-items-center">
            @if($items->count() > 0)
              @foreach($items as $item)
              <div class="col-sm-6 col-md-3 col-lg-3 mb-3 mb-md-0 h-100" data-aos="fade-up">
                <div class="card card-span h-100">
                  <img class="img-fluid h-100" src="{{ asset('storage/'.$item->image) }}" alt="..." style=" max-height: 250px !important; "/>
                  <div class="card-img-overlay ps-0"> </div>
                  <div class="card-body ps-0  text-center">
                    <p class="mb-0" style="text-transform: uppercase;font-size: 19px;font-weight: 500;color: #000;">{{ $item->name }}</p>
                    <div class="fw-bold"><span class="pink-color">INR {{ $item->price }}</span></div>
                  </div>
                  <div class="d-flex"> 
                  <div class="col-8 p-2 info-pt"><i class="fas fa-cut"></i> Processing Time: 2-5 days </br> <i class="fas fa-plane"></i>  Shipping Time: 3-6 Business Days</div>
                  
                  <div class="col-2 p-2 info-pt">
                    <input type="number" id="quantity12" name="quantity" min="1" max="12" value="1">
                  </div>
                  <div class="col-2 p-2">
                  <a class="stretched-link" href="{{ route('item.show', $item) }}"></a>
                
                @if(auth()->check())
                  @if(!\Cart::session(auth()->user()->id)->get($item->id))
                  <form method="POST" action="{{ route('add.to.cart', $item) }}">
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
            @endif
          </div>
        </div>
        </div>
</div>
</section>







@endsection