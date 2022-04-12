<nav class="navbar navbar-expand-lg navbar-light  bg-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
  <div class="container">
    <a class="navbar-brand d-inline-flex" href="{{ url('/') }}"><img class="d-inline-block" src="{{ asset('images/logo3.png') }}" alt="logo" /></a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0 justify-content-end" id="navbarSupportedContent">
      <form action="{{ route('search.index') }}" class="me-3 w-75 mb-2">
        <div class="position-relative">
          <div class="form-outline">
            <input type="search" class="typeahead form-control" id="product_search" name="name" placeholder="search product name..." />
               {{-- <input type="text" id='productid' readonly> --}}
          </div>
          <button type="submit" class="btn btn-primary search ">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>
      @php
              use App\Models\CartItem;
            if(auth()->check()){
              $cartItems = CartItem::where(['user_id' => auth()->user()->id,'status' => 1])->get();
            }
          @endphp
      {{-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page" href="/">Home</a></li>
        <li class="nav-item px-2"><a class="nav-link fw-medium" href="{{ route('about') }}">About Us</a></li>
        <li class="nav-item px-2"><a class="nav-link fw-medium" href="/search">Categories</a></li>
        <li class="nav-item px-2"><a class="nav-link fw-medium" href="{{ route('contact') }}">Contact Us</a></li>
      </ul> --}}
      {{-- <form class="d-flex"> --}}
        {{-- <a class="text-1000" href="#!">
          <svg class="feather feather-phone me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
          </svg>
        </a> --}}
        <a class="text-1000" href="{{ route('cart.index') }}">
          <div class="me-3">
          <svg class="feather feather-shopping-cart" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="9" cy="21" r="1"></circle>
            <circle cx="20" cy="21" r="1"></circle>
            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
          </svg>
            @if(auth()->check())
                <span id="cart_no">{{ $cartItems->count() }}</span>
                @else
                   <span id="cart_no"></span>
                @endif
          </div>
        </a>
        {{-- <a class="text-1000" href="#!">
          <svg class="feather feather-search me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </a>
        <a class="text-1000" href="#!">
          <svg class="feather feather-heart me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
          </svg>
        </a> --}}
        @guest
          @if (Route::has('login'))
            <a class="text-1000" href="{{ route('login') }}">
              <svg class="feather feather-user me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </a>
          @endif
        @else
          <a class="text-1000" href="{{ route('user_profile') }}">
              <svg class="feather feather-user me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </a>
          <a class="text-1000" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('d-logout-form').submit();">
            logout
          </a>
          <form id="d-logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        @endguest
      {{-- </form> --}}
    </div>
  </div>
</nav>

<!-- Script -->

<script type="text/javascript">

    // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){

      $( "#product_search" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('autocomplete')}}",
            type: 'get',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           // Set selection
              // console.log(ui.item.label);
           $('#product_search').val(ui.item.label); // display the selected text
          //  $('#productid').val(ui.item.value); // save selected id to input
           return false;
        }
      });

    });
    </script>
    