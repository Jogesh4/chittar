@extends('layouts.app')
@php
$userID = auth()->user() ? auth()->user()->id : 1;
@endphp
@section('content')
            
<section class="">
  <div class="container mt-2 mb-2">
<div class="row">
  <div class="col-lg-8 bg-white p-5">
        <div class="text-center">
             <h3>Select Address</h3>
        </div>

        <div class="p-3">
          <div class="row justify-content-between">
            Saved Address
        @if(!empty($addresses))
        @foreach($addresses as $address)
            <div class="form-check col-12"> 
              <input class="form-check-input mt-3" type="radio" value="{{ $address->id }}" name="address_radio" id="flexCheckChecked" onclick="radio_click(this)"> 
              <label class="form-check-label" for="flexCheckChecked"> 
                <p>{{ $address->address }},{{ $address->city }},{{ $address->state }},{{ $address->country }},{{ $address->pincode }}<br><span>
                {{ $address->firstname }} {{ $address->lastname }} ({{ $address->phone }})</span></p>
              </label> 
            </div> 
         @endforeach
        @endif
          </div>

               <div class="text-center">
                   <a href="#!" class="btn btn-pink mt-3" id="payment">Proceed to Payment</a>
               </div>

        </div>

        <div id="add_address">
            <h3 style="color: #c96f8b">Add Address +</h3>
        </div>

<div class="d-none" id="address_div">
  <form method="POST" action="{{ route('save.address') }}">
    @csrf
     <div class="">
        <div class="row">
          <h5>Contact information</h5>
          <div class="col-md-12 col-lg-12 form-outline p-2">
          <label>Mobile No.<span style="color:red;">*</span></label>
            <input type="tel" name="phone" id="phone" placeholder="Mobile No." class="form-control2" required>
          </div>  
        </div>

        <div class="row mt-3">
          <h5>Shipping address</h5>
          <div class="col-md-12 col-lg-6 form-outline p-2">
          <label>First Name<span style="color:red;">*</span></label>
            <input type="text" name="first_name" id="first_name" placeholder="First Name" class="form-control2" required>
          </div>

          <div class="col-md-12 col-lg-6 form-outline p-2">
          <label>Last Name<span style="color:red;">*</span></label>
            <input type="text" name="last_name" id="last_name" placeholder="Last Name" class="form-control2" required>
          </div>

          <div class="col-md-12 col-lg-12 form-outline p-2">
          <label>Address<span style="color:red;">*</span></label>
            <input type="text" name="address" id="address" placeholder="Address" class="form-control2" required>
          </div>

          <div class="col-md-12 col-lg-6 form-outline p-2">
          <label>Locality</label>
            <input type="text" name="locality" id="locality" placeholder="Apartment, suite, etc. (optional)" class="form-control2" required>
          </div>

          <div class="col-md-12 col-lg-6 form-outline p-2">
          <label>City<span style="color:red;">*</span></label>
            <input type="text" name="city" id="city" placeholder="City" class="form-control2" required>
          </div>

          <div class="col-md-12 col-lg-4 form-outline p-2">
          <label>State<span style="color:red;">*</span></label>
            <input type="text" name="state" id="state" placeholder="State" class="form-control2" required>
          </div>

          <div class="col-md-12 col-lg-4 form-outline p-2">
          <label>Country<span style="color:red;">*</span></label>
            <input type="text" name="country" id="country" placeholder="Country" class="form-control2" required>
          </div>

          <div class="col-md-12 col-lg-4 form-outline p-2">
          <label>Zip<span style="color:red;">*</span></label>
            <input type="text" name="pincode" id="pincode" placeholder="Zip" class="form-control2" required>
          </div>         

        </div>
        {{-- <div class="form-check col-12 mt-3"> 
          <input class="form-check-input" type="checkbox" value="1" name="same" id="flexCheckChecked" checked> 
          <label class="form-check-label" for="flexCheckChecked"> Billing Address Same as Shipping Address</label> 
        </div> --}}


        <button class="btn btn-pink mt-3">SUBMIT</button>

    </div>
  </form>
  </div>
</div> 
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

<div class="row p-1  mt-4 ">
  <div class="border p-2 text-center" >
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

  function radio_click(element){
       $('#payment').attr('href','/payment_method/'+ element.value);
  }

</script>