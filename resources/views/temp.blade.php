<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Chittarr</title>
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('style.css') }}" rel="stylesheet" />
  </head>
  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      @include('partials.header')
      <section class="py-9 border-bottom border-white border-5">
        <div class="bg-holder" style="background-image:url(images/banner.jpg);background-size:cover;">
        </div>
        <!--/.bg-holder-->
        <div class="container">
          <div class="row flex-center">
            <div class="col-12 mb-10">
              <div class="d-flex align-items-center flex-column bg-rangle" data-aos="zoom-in">
                <div class="pt-5 mt-6"><img src="{{ asset('images/jutti.png') }}"></div>
                <p class="small-heading"> EXCLUSIVE COLLECTION OF PUNJABI JUTTIS</p>
                <h1 class="fs-4 fs-md-6 fw-bold mb-0">HANDCRAFTED</h1>
                <p class="bottom-heading">TO PERFECTION</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ============================================-->
      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0">
        <div class="container">
          <div class="row">
            <div class="col-md-4 p-0" data-aos="flip-left">
              <div class="d-flex pt-4 ms-1 me-1 mt-5 p-3" style="background:#f38fb5;">
                <div class="col-3"><img src="{{ asset('images/1.png') }}"></div>
                <div class="col-9">
                  <h5 class="text-light">WORLD WIDE SHIPPING</h5>
                  <p class="text-light">We provide world wide shipping to almost all the main countries of the world.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 p-0" data-aos="flip-left">
              <div class="d-flex pt-4 p-3 ms-1 me-1 mt-5" style="background:#bfd066;">
                <div class="col-3"><img src="{{ asset('images/2.png') }}"></div>
                <div class="col-9">
                  <h5 class="text-light">WORLD WIDE SHIPPING</h5>
                  <p class="text-light">We provide world wide shipping to almost all the main countries of the world.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 p-0" data-aos="flip-left">
              <div class="d-flex pt-4 ms-1 me-1 mt-5  p-3" style="background:#f38fb5;">
                <div class="col-3"><img src="{{ asset('images/3.png') }}"></div>
                <div class="col-9">
                  <h5 class="text-light">WORLD WIDE SHIPPING</h5>
                  <p class="text-light">We provide world wide shipping to almost all the main countries of the world.</p>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-4">
              <div class="card card-span text-white"><img class="card-img h-100" src="assets/img/gallery/hat.png" alt="..." />
                <div class="card-img-overlay bg-dark-gradient">
                  <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="#!" role="button">Hats
                      <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                      </svg></a></div>
                </div>
              </div>
              </div>-->
            <!-- <div class="col-md-4">
              <div class="card card-span text-white"><img class="card-img h-100" src="assets/img/gallery/high-heels.png" alt="..." />
                <div class="card-img-overlay bg-dark-gradient">
                  <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="#!" role="button">High Heels
                      <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                      </svg></a></div>
                </div>
              </div>
              </div>-->
            <!--<div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>-->
          </div>
        </div>
        <!-- end of .container-->
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
      <section class="py-5">
        <!--/.bg-holder-->
        <div class="container">
          <div class="row">
            <div class="p-md-8" data-aos="fade-up" style="background-image:url(images/banner2.jpg);background-position:center;background-size:cover;">
              <div class="p-5 ps-md-11 text-center d-flex flex-column flex-end-center align-items-baseline h-100">
                <h1 class="fs-md-4 fs-lg-7 pink-color">Flaunt with New Pair of Unique Fusion Jutti </h1>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pt-2 pb-7">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 mx-auto text-center mb-5" data-aos="fade-up">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">WOMEN CATEGORIES</h5>
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
      <!-- ============================================-->
      <section style="background-image:url(images/banner4.jpg);background-position:center;background-size:cover;">
        <div class="container">
          <div class="row h-100 g-0">
            <div class="col-md-6 position-relative" data-aos="fade-up">
              <div class="row  m-3">
                <div class="col-md-6 p-0">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="{{ asset('images/7.jpg') }}" alt="..."><a class="stretched-link" href="#!"></a></div>
                  <div class="sale-div">Sale</div>
                </div>
                <div class="col-md-6 p-0">
                  <div class="bg-300 p-4 h-100 d-flex flex-column text-center justify-content-center">
                    <p class="mb-0">Mules</p>
                    <h4 class="fw-semi-bold ">Diamond Pearl </h4>
                    <div class="fw-bold">
                      <h4 class="text-600 me-2 text-decoration-line-through">$200</h4>
                      <h4 class="pink-color">$175</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 position-relative" data-aos="fade-up">
              <div class="row  m-3">
                <div class="col-md-6 p-0">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="{{ asset('images/8.jpg') }}" alt="..."><a class="stretched-link" href="#!"></a></div>
                  <div class="sale-div">Sale</div>
                </div>
                <div class="col-md-6 p-0">
                  <div class="bg-300 p-4 h-100 d-flex flex-column text-center justify-content-center">
                    <p class="mb-0">Mules</p>
                    <h4 class="fw-semi-bold ">Diamond Pearl </h4>
                    <div class="fw-bold">
                      <h4 class="text-600 me-2 text-decoration-line-through">$200</h4>
                      <h4 class="pink-color">$175</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->
      </section>
      <section id="categoryWomen">
        <div class="container">
          <div class="row h-100">
            <div class="col-lg-7 mx-auto text-center mb-6" data-aos="fade-up">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Shop By Category</h5>
            </div>
            <div class="col-12" data-aos="fade-up">
              <nav>
                @if($categories->count() > 0)
                <div class="nav nav-tabs majestic-tabs mb-4 justify-content-center" id="nav-tab" role="tablist">
                  @foreach($categories as $category)
                  <a href="?category_id={{ $category->id }}&category={{ $category->name }}" class="nav-link @if($category->id == $currentCategoryId) active @endif" id="nav-{{ \Str::slug($category->name, '-') }}-tab" data-bs-toggle="tab" data-bs-target="#nav-{{ \Str::slug($category->name, '-') }}" type="button" role="tab" aria-controls="nav-{{ \Str::slug($category->name, '-') }}" aria-selected="true">{{ $category->name }}</a>
                  @endforeach
                 
                  {{-- <button class="nav-link" id="nav-men-tab" data-bs-toggle="tab" data-bs-target="#nav-men" type="button" role="tab" aria-controls="nav-men" aria-selected="false">For Men</button> --}}
                </div>
                
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="pills-wshoes" role="tabpanel" aria-labelledby="pills-wshoes-tab">
                        <div class="carousel slide" id="carouselCategoryWShoes" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row h-100 align-items-center g-2">
                                
                                @foreach($categoryItems as $item)
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white">
                                    <img class="img-fluid h-100" src="{{ asset('storage/'.$item->image) }}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200 text-center">
                                      <h5 class="fw-bold text-1000 text-truncate">{{ $item->name }}</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">${{ $item->price }}</span><span class="text-primary">${{ $item->price }}</span></div>
                                    </div>
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                @endforeach
                              </div>
                            </div>
                            {{-- <div class="carousel-item" data-bs-interval="5000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white">
                                    <img class="img-fluid h-100" src="{{ asset('images/5.jpg') }}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200 text-center">
                                      <h5 class="fw-bold text-1000 text-truncate">Jutti</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div>
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white">
                                    <img class="img-fluid h-100" src="{{ asset('images/5.jpg') }}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200 text-center">
                                      <h5 class="fw-bold text-1000 text-truncate">Jutti</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div>
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white">
                                    <img class="img-fluid h-100" src="{{ asset('images/5.jpg') }}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200 text-center">
                                      <h5 class="fw-bold text-1000 text-truncate">Jutti</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div>
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white">
                                    <img class="img-fluid h-100" src="{{ asset('images/5.jpg') }}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200 text-center">
                                      <h5 class="fw-bold text-1000 text-truncate">Jutti</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div>
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white">
                                    <img class="img-fluid h-100" src="{{ asset('images/5.jpg') }}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200 text-center">
                                      <h5 class="fw-bold text-1000 text-truncate">Jutti</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div>
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white">
                                    <img class="img-fluid h-100" src="{{ asset('images/5.jpg') }}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200 text-center">
                                      <h5 class="fw-bold text-1000 text-truncate">Jutti</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div>
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white">
                                    <img class="img-fluid h-100" src="{{ asset('images/5.jpg') }}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200 text-center">
                                      <h5 class="fw-bold text-1000 text-truncate">Jutti</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div>
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white">
                                    <img class="img-fluid h-100" src="{{ asset('images/5.jpg') }}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200 text-center">
                                      <h5 class="fw-bold text-1000 text-truncate">Jutti</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div>
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row h-100 align-items-center g-2">
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white">
                                    <img class="img-fluid h-100" src="{{ asset('images/5.jpg') }}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200 text-center">
                                      <h5 class="fw-bold text-1000 text-truncate">Jutti</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div>
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white">
                                    <img class="img-fluid h-100" src="{{ asset('images/5.jpg') }}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200 text-center">
                                      <h5 class="fw-bold text-1000 text-truncate">Jutti</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div>
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white">
                                    <img class="img-fluid h-100" src="{{ asset('images/5.jpg') }}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200 text-center">
                                      <h5 class="fw-bold text-1000 text-truncate">Jutti</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div>
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white">
                                    <img class="img-fluid h-100" src="{{ asset('images/5.jpg') }}" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200 text-center">
                                      <h5 class="fw-bold text-1000 text-truncate">Jutti</h5>
                                      <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                    </div>
                                    <a class="stretched-link" href="#"></a>
                                  </div>
                                </div>
                              </div>
                            </div> --}}
                            {{-- <div class="row">
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryWShoes" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryWShoes" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                            </div> --}}
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                    </div>
                @endif
              </nav>
            </div>
          </div>
        </div>
      </section>
      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0" id="collection">
        <div class="container">
          <div class="row h-100 gx-2">
            <div class="col-md-6" data-aos="fade-up">
              <div class="card card-span h-100 text-white">
                <img class="card-img h-100" src="{{ asset('images/9.jpg') }}" alt="..." />
                <div class="card-img-overlay bg-dark-gradient">
                  <div class="p-5 p-md-2 p-xl-5 d-flex flex-column flex-center align-items-baseline h-100">
                    <h1 class="fs-md-4 fs-lg-7 text-light">CHITTARR JUTTIES </h1>
                    <h5 class="fs-2 text-light">SHOP NOW</h5>
                  </div>
                </div>
                <a class="stretched-link" href="#!"></a>
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-up">
              <div class="card card-span h-100 text-white">
                <img class="card-img h-100" src="{{ asset('images/10.jpg') }}" alt="..." />
                <div class="card-img-overlay bg-dark-gradient">
                  <div class="p-5 p-md-2 p-xl-5 d-flex flex-column flex-center align-items-baseline h-100">
                    <h1 class="fs-md-4 fs-lg-7 text-light">CHITTARR JUTTIES </h1>
                    <h5 class="fs-2 text-light">SHOP NOW</h5>
                  </div>
                </div>
                <a class="stretched-link" href="#!"></a>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->
      </section>
      <!-- <section> close ============================-->
      <section class="py-5">
        <!--/.bg-holder-->
        <div class="container">
          <div class="row">
            <div class="p-md-8" style="background-image:url(images/banner3.jpg);background-position:center;background-size:cover;" data-aos="fade-up">
              <div class="p-5 ps-md-11 text-end  h-100">
                <h1 class="fs-md-4 fs-lg-7 green-t">Flaunt <br>with New Pair</h1>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- <section> begin ============================-->
        @include('partials.footer')
      <!-- <section> close ============================-->
      <!-- ============================================-->
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('vendors/@popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
    <script>
      feather.replace();
    </script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  </body>
</html>