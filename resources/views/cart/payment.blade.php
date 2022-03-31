@extends('layouts.app')
@php
$userID = auth()->user() ? auth()->user()->id : 1;
@endphp
@section('content')
            
<section class="">
  <div class="container mt-2 mb-2">
<div class="row">
  <div class="col-lg-8 bg-white p-5">
        
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