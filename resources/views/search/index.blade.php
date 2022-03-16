@extends('layouts.app')

@section('title', 'Search')

@section('content')
  <section class="py-9">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 mx-auto text-center mb-5" data-aos="fade-up">
          <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">SEARCH RESULTS FOR "{{ request()->name }}"</h5>
        </div>
        <div class="col-12">
          <div class="row align-items-center g-2">
            @if($items->count() > 0)
              @foreach($items as $item)
              <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100" data-aos="fade-up">
                <div class="card card-span h-100">
                  <img class="img-fluid h-100" src="{{ asset('storage/'.$item->image) }}" alt="..." />
                  <div class="card-img-overlay ps-0"> </div>
                  <div class="card-body ps-0 bg-200 text-center">
                    <p class="mb-0">{{ $item->name }}</p>
                    <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">${{ $item->price }}</span><span class="pink-color">${{ $item->price }}</span></div>
                  </div>
                  {{-- <a class="stretched-link" href="product-filter.html"></a> --}}
                </div>
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
              @endforeach
            @endif
            
            {{-- <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100" data-aos="fade-up">
              <div class="card card-span h-100">
                <img class="img-fluid h-100" src="{{ asset('images/1.jpg') }}" alt="..." />
                <div class="card-img-overlay ps-0"> </div>
                <div class="card-body ps-0 bg-200 text-center">
                  <!-- <h5 class="fw-bold text-1000 text-truncate">Flat Hill Slingback</h5>-->
                  <p class="mb-0">RIMJHIM: Pastels and Pop XAnushreeReddy</p>
                  <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="pink-color">$175</span></div>
                </div>
                <a class="stretched-link" href="product-page.html"></a>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100" data-aos="fade-up">
              <div class="card card-span h-100">
                <img class="img-fluid h-100" src="{{ asset('images/1.jpg') }}" alt="..." />
                <div class="card-img-overlay ps-0"> </div>
                <div class="card-body ps-0 bg-200 text-center">
                  <!-- <h5 class="fw-bold text-1000 text-truncate">Flat Hill Slingback</h5>-->
                  <p class="mb-0">RIMJHIM: Pastels and Pop XAnushreeReddy</p>
                  <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="pink-color">$175</span></div>
                </div>
                <a class="stretched-link" href="product-filter.html"></a>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100" data-aos="fade-up">
              <div class="card card-span h-100">
                <img class="img-fluid h-100" src="{{ asset('images/1.jpg') }}" alt="..." />
                <div class="card-img-overlay ps-0"> </div>
                <div class="card-body ps-0 bg-200 text-center">
                  <!--  <h5 class="fw-bold text-1000 text-truncate">Flat Hill Slingback</h5>-->
                  <p class="mb-0">RIMJHIM: Pastels and Pop XAnushreeReddy</p>
                  <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="pink-color">$175</span></div>
                </div>
                <a class="stretched-link" href="#"></a>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100" data-aos="fade-up">
              <div class="card card-span h-100">
                <img class="img-fluid h-100" src="{{ asset('images/1.jpg') }}" alt="..." />
                <div class="card-img-overlay ps-0"> </div>
                <div class="card-body ps-0 bg-200 text-center">
                  <!-- <h5 class="fw-bold text-1000 text-truncate">Flat Hill Slingback</h5>-->
                  <p class="mb-0">RIMJHIM: Pastels and Pop XAnushreeReddy</p>
                  <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="pink-color">$175</span></div>
                </div>
                <a class="stretched-link" href="#"></a>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100" data-aos="fade-up">
              <div class="card card-span h-100">
                <img class="img-fluid h-100" src="{{ asset('images/1.jpg') }}" alt="..." />
                <div class="card-img-overlay ps-0"> </div>
                <div class="card-body ps-0 bg-200 text-center">
                  <!-- <h5 class="fw-bold text-1000 text-truncate">Flat Hill Slingback</h5>-->
                  <p class="mb-0">RIMJHIM: Pastels and Pop XAnushreeReddy</p>
                  <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="pink-color">$175</span></div>
                </div>
                <a class="stretched-link" href="#"></a>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100" data-aos="fade-up">
              <div class="card card-span h-100">
                <img class="img-fluid h-100" src="{{ asset('images/1.jpg') }}" alt="..." />
                <div class="card-img-overlay ps-0"> </div>
                <div class="card-body ps-0 bg-200 text-center">
                  <!-- <h5 class="fw-bold text-1000 text-truncate">Flat Hill Slingback</h5>-->
                  <p class="mb-0">RIMJHIM: Pastels and Pop XAnushreeReddy</p>
                  <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="pink-color">$175</span></div>
                </div>
                <a class="stretched-link" href="#"></a>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100" data-aos="fade-up">
              <div class="card card-span h-100">
                <img class="img-fluid h-100" src="{{ asset('images/1.jpg') }}" alt="..." />
                <div class="card-img-overlay ps-0"> </div>
                <div class="card-body ps-0 bg-200 text-center">
                  <!-- <h5 class="fw-bold text-1000 text-truncate">Flat Hill Slingback</h5>-->
                  <p class="mb-0">RIMJHIM: Pastels and Pop XAnushreeReddy</p>
                  <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="pink-color">$175</span></div>
                </div>
                <a class="stretched-link" href="#"></a>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection