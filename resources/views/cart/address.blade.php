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

        <div class="mt-3 mb-4  p-3">
          <div class="row justify-content-between mt-2">
            Saved Address
            <div class="form-check col-12"> 
              <input class="form-check-input" type="radio" value="" id="flexCheckChecked"> 
              <label class="form-check-label" for="flexCheckChecked"> K36A, Block K, Green Park, New Delhi, Delhi 110016</label> 
            </div> 


          </div>
        </div>
        
        <div class="row">
          <h5>Contact information</h5>
          <div class="col-md-12 col-lg-12 form-outline p-2">
          <label>Mobile No.<span style="color:red;">*</span></label>
            <input type="tel" name="product_title" id="" placeholder="Mobile No." class="form-control2 ">
          </div>  
        </div>

        <div class="row mt-3">
          <h5>Shipping address</h5>
          <div class="col-md-12 col-lg-6 form-outline p-2">
          <label>First Name<span style="color:red;">*</span></label>
            <input type="text" name="product_title" id="" placeholder="First Name" class="form-control2 ">
          </div>

          <div class="col-md-12 col-lg-6 form-outline p-2">
          <label>Last Name<span style="color:red;">*</span></label>
            <input type="text" name="product_title" id="" placeholder="Last Name" class="form-control2 ">
          </div>

          <div class="col-md-12 col-lg-12 form-outline p-2">
          <label>Address<span style="color:red;">*</span></label>
            <input type="text" name="product_title" id="" placeholder="Address" class="form-control2 ">
          </div>

          <div class="col-md-12 col-lg-6 form-outline p-2">
          <label>Apartment</label>
            <input type="text" name="product_title" id="" placeholder="Apartment, suite, etc. (optional)" class="form-control2 ">
          </div>

          <div class="col-md-12 col-lg-6 form-outline p-2">
          <label>City<span style="color:red;">*</span></label>
            <input type="text" name="product_title" id="" placeholder="City" class="form-control2 ">
          </div>

          <div class="col-md-12 col-lg-4 form-outline p-2">
          <label>State<span style="color:red;">*</span></label>
            <input type="text" name="product_title" id="" placeholder="State" class="form-control2 ">
          </div>

          <div class="col-md-12 col-lg-4 form-outline p-2">
          <label>Country<span style="color:red;">*</span></label>
            <input type="text" name="product_title" id="" placeholder="Country" class="form-control2 ">
          </div>

          <div class="col-md-12 col-lg-4 form-outline p-2">
          <label>Zip<span style="color:red;">*</span></label>
            <input type="text" name="product_title" id="" placeholder="Zip" class="form-control2 ">
          </div>         

        </div>
        <div class="form-check col-12 mt-3"> 
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> 
          <label class="form-check-label" for="flexCheckChecked"> Billing Address Same as Shipping Address</label> 
        </div>


        <button class="btn btn-pink mt-3">SUBMIT</button>

      </div> 
        <div class="col-lg-4" style="background: #c96f8b; border-top-right-radius: 2em; border-bottom-right-radius: 2em;">        

<div class="row p-2 mt-5">
  <div class="col-3"> <img src="http://127.0.0.1:8000/storage/product_image/zy5RBxCr2AvQVCjhlY7LKwmzpBOILxh9FxqQgW4o.jpg" width="60" height="60" data-max-width="60" data-max-height="80" style="border-radius:5px;"> </div>
  <div class="col-5"><p class="item-title text-white">BRIDAL JUTTI </br><span class="item-title text-white">QTY:<span>4</span></span></p></div>
  <div class="col-4 "> <p class="item-title text-white">INR.1000</p></div>
</div>
<hr>

<div class="row p-1">
  <div class="col-8"><p class="item-title text-white">Subtotal</p></div>
  <div class="col-4 "> <p class="item-title text-white">INR.1000</p></div>
  <div class="col-8"><p class="item-title text-white">Shipping</p></div>
  <div class="col-4 "> <p class="item-title text-white info-pt">Calculated at next step</p></div>
</div>
<hr>
<div class="row p-1">
  <div class="col-8"><p class="item-title text-white h3">Total</p></div>
  <div class="col-4 "> <p class="item-title text-white ">INR.<span class="h3 text-white">1000</span></p></div>
 
</div>




        </div>
    </div>
</div>
</section>
@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
