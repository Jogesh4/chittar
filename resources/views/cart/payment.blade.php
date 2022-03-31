  @extends('layouts.app')
  @php
  $userID = auth()->user() ? auth()->user()->id : 1;
  @endphp
  @section('content')
              
  <section class="">
    <div class="container mt-2 mb-2">
  <div class="row">
  <!-------------- section left  ---------------------> 
  <div class="col-lg-8 col-sm-12 bg-white p-5">
    <div class="row border p-2">
      <div class="col-12">
        <div class="row ">
          <div class="col-2">
            Contact
          </div>
          <div class="col-7">        
            <p>{{ $address->firstname }} {{ $address->lastname }} ({{ $address->phone }})</p>
          </div>
          <div class="col-3">
            <a href="#" class="pink-color">Change</a>
          </div>
          <hr>
        </div>

        <div class="row ">
          <div class="col-2">
          Ship to
          </div>
          <div class="col-7">
          {{ $address->address }},{{ $address->city }},{{ $address->state }},{{ $address->country }},{{ $address->pincode }}
          </div>
          <div class="col-3">
            <a href="#" class="pink-color">Change</a>
          </div>
        </div>
        

      </div>

    </div>   

  <div class="row mt-3 mb-3 ">
    <h5>Shipping method</h5>
    <div class="col-12 border mt-2">
    <div class="row mt-3">
          <div class="col-2">
          <input class="form-check-input " type="checkbox" value="{{ $address->id }}" checked name="address_radio" id="flexCheckChecked" onclick="radio_click(this)"> 
          </div>
          <div class="col-7">        
            <p>Standard Shipping(8-12 business days)</p>
          </div>
          <div class="col-3">
            <p>INR. 195</p>
          </div>       
        </div>

    </div>

  </div>



  <!-- <div class="row mt-3 ">
    <h5>Payment</h5>
    <p class="info-pt">All transactions are secure and encrypted.</p>
    <div class="col-12 border mt-2">
    <div class="row mt-3">
          <div class="col-2">
          <input class="form-check-input " type="checkbox" value="{{ $address->id }}" checked name="address_radio" id="flexCheckChecked" onclick="radio_click(this)"> 
          </div>
          <div class="col-10 bg-white ">  
            <img src="{{ asset('images/paytm.png') }}" width="50" height="50" >       
      </div>
        </div>

    </div>

  </div> -->







  <h5 class="">Billing address</h5>
  <div class="row border p-2">
  
      <div class="col-12">
        
        <div class="row mt-2">
          <div class="col-2">
          <input class="form-check-input " type="radio" value="{{ $address->id }}" checked name="address_radio" id="flexCheckChecked" onclick="radio_click(this)">
          </div>
          <div class="col-10">        
            <p>Same as shipping address</p>
          </div>          
          <hr>
        </div>
       
        <div class="row ">
          <div class="col-2">
          <input class="form-check-input " type="radio" value="{{ $address->id }}" checked name="address_radio" id="flexCheckChecked" onclick="radio_click(this)">
          </div>
          <div class="col-10">        
            <p>Use a different billing address</p>
          </div>          
        </div>      
      </div>
    </div>

              <div class="col-3 text-end">
               <form method="post" action="{{ route('order.place') }}">
                @csrf
                   <button class="checkout-btn text-center">PAY NOW</button>
                
              </form>
</div>


  </div> 
  <!-------------- section left end --------------------->
  <div class="col-lg-4" style="background: #c96f8b; border-top-right-radius: 2em; border-bottom-right-radius: 2em;">        
  @if(!empty(\Cart::getContent()))
    @foreach(\Cart::getContent() as $item)
      <div class="row p-2 mt-2">
        <div class="col-3"> <img src="{{ asset('storage/'.$item->associatedModel->image) }}" width="60" height="60" data-max-width="60" data-max-height="80" style="border-radius:5px;"> </div>
        <div class="col-5"><p class="item-title text-white">{{ $item->name }} </br><span class="item-title text-white">QTY:<span>{{ $item->quantity }}</span></span></p></div>
        <div class="col-4 "> <p class="item-title text-white">INR.{{ $item->price }}</p></div>
      </div>
    @endforeach
  @endif
  <hr>

  <div class="row p-1">
    <div class="col-8"><p class="item-title text-white">Subtotal</p></div>
    <div class="col-4 "> <p class="item-title text-white">INR.{{ \Cart::getTotal() }}</p></div>
    <div class="col-8"><p class="item-title text-white">Shipping</p></div>
    <div class="col-4 "> <p class="item-title text-white info-pt">Calculated at next step</p></div>
  </div>
  <hr>
  <div class="row p-1">
    <div class="col-8"><p class="item-title text-white h3">Total</p></div>
    <div class="col-4 "> <p class="item-title text-white ">INR.<span class="h3 text-white">{{ \Cart::getTotal() }}</span></p></div>
  
  </div>
  <div class="row p-1 outl-bg">
    <div class="col-12"><p class="item-title text-white info-pt">  * Easy Return * Quality Gurantee * Secured Checkout</p></div>
    <!-- <div class="col-4 "> <p class="item-title text-white info-pt">  </p></div> 
    <div class="col-4 "> <p class="item-title text-white info-pt"> </p></div>  -->
  </div>

  <div class="row p-1  mt-4 mb-4 ">
    <div class=" p-2 text-center" >
    <div class="col-12"><p class="item-title text-white text-uppercase h6">  Express checkout</p></div>
    <div class="col-12 bg-white ">  
      <img src="{{ asset('images/paytm.png') }}" width="60" height="60" >
      <img src="{{ asset('images/mastercard.png') }}" width="60" height="60" >  
      <img src="{{ asset('images/paypal.png') }}" width="60" height="60" >
      <img src="{{ asset('images/visa.png') }}" width="60" height="60" >  
      <img src="{{ asset('images/applepay.png') }}" width="60" height="60" >
    
      </div> 
    </div> 
    </div>



          </div>
      </div>
  </div>
  </section>
  @endsection

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <script>

  $( document ).ready(function() {

    $("#add_address").click(function(){
          document.getElementById('address_div').classList.remove('d-none');
          document.getElementById('add_address').classList.add('d-none');
    });
  });

  </script>