  @extends('layouts.app')
  @php
  $userID = auth()->user() ? auth()->user()->id : 1;
  @endphp
  @section('content')
              
  <section class="">
    <div class="container mt-2 mb-2">
     
  <div class="row">
  <div class="bg-white p-3 mb-3 text-uppercase fw-bolder text-center"> <span class="pink-color h5 ">Cart > Shipping Detail  >> Payment Method </span></div>
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
            <a href="/select-address" class="pink-color">Change</a>
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
            <a href="/select-address" class="pink-color">Change</a>
          </div>
        </div>
        

      </div>

    </div>   

  <div class="row mt-3 mb-3 ">
    <h5>Shipping method</h5>
    <div class="col-12 border mt-2">
    <div class="row mt-3">
          <div class="col-2">
          <input class="form-check-input " type="checkbox" value="{{ $address->id }}" checked name="address_radio" id="flexCheckChecked"> 
          </div>
          <div class="col-7">        
            <p>Standard Shipping(8-12 business days)</p>
          </div>
          <div class="col-3">
            <p><i class="fas fa-rupee-sign"></i> {{ !empty($shipping) ? $shipping->price : 100.00 }}</p>
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






<form id="contactForm">

     <h5 class="">Payment Method</h5>
  <div class="row border p-2">
  
      <div class="col-12">
        
        <div class="row mt-2">
          <div class="col-2">
          <input class="form-check-input " type="radio" value="PAID" checked name="payment_type" id="flexCheckChecked">
          </div>
          <div class="col-10">        
            <p>Online</p>
          </div>          
          <hr>
        </div>
       
        <div class="row ">
          <div class="col-2">
          <input class="form-check-input " type="radio" value="COD" name="payment_type" id="flexCheckChecked">
          </div>
          <div class="col-10">        
            <p>Cash On Delivery</p>
          </div>          
        </div>      
      </div>
    </div>

  <h5 class="">Billing address</h5>
  <div class="row border p-2 mt-2">
  
      <div class="col-12">
        
        <div class="row mt-2">
          <div class="col-2">
          <input class="form-check-input " type="radio" value="1" checked name="address_radio" id="flexCheckChecked" onclick="radio_click(this)">
          </div>
          <div class="col-10">        
            <p>Same as shipping address</p>
          </div>          
          <hr>
        </div>
       
        <div class="row ">
          <div class="col-2">
          <input class="form-check-input " type="radio" value="2" name="address_radio" id="flexCheckChecked" onclick="radio_click(this)">
          </div>
          <div class="col-10">        
            <p>Use a different billing address</p>
          </div>          
        </div>      
      </div>
    </div>


 <div class="d-none" id="address_div">
  
     <div class="">
        <div class="row">
          <h5>Contact information</h5>
          <div class="col-md-12 col-lg-12 form-outline p-2">
          <label>Mobile No.<span style="color:red;">*</span></label>
            <input type="tel" name="phone" id="phone" placeholder="Mobile No." class="form-control2">
          </div>  
        </div>

        <div class="row mt-3">
          <h5>BillinA Address</h5>
          <div class="col-md-12 col-lg-6 form-outline p-2">
          <label>First Name<span style="color:red;">*</span></label>
            <input type="text" name="first_name" id="first_name" placeholder="First Name" class="form-control2">
          </div>

          <div class="col-md-12 col-lg-6 form-outline p-2">
          <label>Last Name<span style="color:red;">*</span></label>
            <input type="text" name="last_name" id="last_name" placeholder="Last Name" class="form-control2">
          </div>

          <div class="col-md-12 col-lg-12 form-outline p-2">
          <label>Address<span style="color:red;">*</span></label>
            <input type="text" name="address" id="address" placeholder="Address" class="form-control2">
          </div>

          <div class="col-md-12 col-lg-6 form-outline p-2">
          <label>Locality</label>
            <input type="text" name="locality" id="locality" placeholder="Apartment, suite, etc. (optional)" class="form-control2">
          </div>

          <div class="col-md-12 col-lg-6 form-outline p-2">
          <label>City<span style="color:red;">*</span></label>
            <input type="text" name="city" id="city" placeholder="City" class="form-control2">
          </div>

          <div class="col-md-12 col-lg-4 form-outline p-2">
          <label>State<span style="color:red;">*</span></label>
            <input type="text" name="state" id="state" placeholder="State" class="form-control2">
          </div>

          <div class="col-md-12 col-lg-4 form-outline p-2">
          <label>Country<span style="color:red;">*</span></label>
            <input type="text" name="country" id="country" placeholder="Country" class="form-control2">
          </div>

          <div class="col-md-12 col-lg-4 form-outline p-2">
          <label>Zip<span style="color:red;">*</span></label>
            <input type="text" name="pincode" id="pincode" placeholder="Zip" class="form-control2">
          </div>         

        </div>

    </div>
  </div>
  
         <div class="row">
              <div class="col-3 text-end">
                   <button type="button" class="checkout-btn text-center" onclick="order()" id="pay_now">PAY NOW</button>
              </div>
              <div class="col-3 text-end">
                   <a href="{{ route('cart.index') }}" class="checkout-btn text-center" style="background: #a9788e;">Cancel</a>
              </div>
          </div>
</form>


  </div> 
  
  <!-------------- section left end --------------------->
  <div class="col-lg-4" style="background: #c96f8b; border-top-right-radius: 2em; border-bottom-right-radius: 2em;">        
  @if(!empty(\Cart::getContent()))
       <?php
       $cart_total = \Cart::getTotal();
       $shipping_price = !empty($shipping) ? $shipping->price : 100.00;

        $total = $cart_total + $shipping_price;

       ?>
    @foreach(\Cart::getContent() as $item)
      <div class="row p-2 mt-2">
        <div class="col-3"> <img src="{{ asset('storage/'.$item->associatedModel->image) }}" width="60" height="60" data-max-width="60" data-max-height="80" style="border-radius:5px;"> </div>
        <div class="col-5"><p class="item-title text-white">{{ $item->name }} </br><span class="item-title text-white">QTY:<span>{{ $item->quantity }}</span></span></p></div>
        <div class="col-4 "> <p class="item-title text-white"><i class="fas fa-rupee-sign"></i> {{ $item->price }}</p></div>
      </div>
    @endforeach
  @endif
  <hr>

  <div class="row p-1">
    <div class="col-8"><p class="item-title text-white">Subtotal</p></div>
    <div class="col-4 "> <p class="item-title text-white"><i class="fas fa-rupee-sign"></i> {{ \Cart::getTotal() }}</p></div>
    <div class="col-8"><p class="item-title text-white">Shipping</p></div>
    <div class="col-4 "> <p class="item-title text-white info-pt"> <span style="font-size: 1.2rem;"><i class="fas fa-rupee-sign"></i> {{ !empty($shipping) ? $shipping->price : 100.00 }}</span></p></div>
  </div>
  <hr>
  <div class="row p-1">
    <div class="col-8"><p class="item-title text-white h3">Total</p></div>
    <div class="col-4 "> <p class="item-title text-white "><i class="fas fa-rupee-sign"></i> <span class="h3 text-white">{{ $total }}</span></p></div>
  
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

                <button class="buttonload d-none" id="loading">
                         <i class="fa fa-spinner fa-spin"></i>
                      </button>


 <div id="your-modal-cod" class="modal">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				  {{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> --}}
			</div>
			<div class="modal-body text-center">
				<div class="modal-subheading text-center">
					<h4>Great!</h4>
				</div>
				<div class="modal-sub-heading text-center">
					<h5>Your order has been created successfully.</h5>
				</div>
				<div class="row text-center">
					<img class="img-fluid PreviewOrderImage" id="PreviewOrderImage" border="0" width="120" height="100" align="center" alt="image">
				</div>
				<div class="row text-center">
					<div class="ml-2 productname">
        	  <div>Order ID: <strong id="OrderID"></strong></div>
        	</div>
				</div>
				<div class="row text-center">
					<div class="ml-5">
            <div class="price">Payment Mode: <a href="javascript:void(0);">COD</a></div>
        </div>
				</div>
				<div class="row text-center">
					<div class="ml-5">
	          <div class="price">Total Amount: ₹<strong id="TotalAmount"></strong></div>
	        </div>
				</div>
				<form action="{{route('user_dashboard')}}" method="GET" enctype="multipart/form-data">
					<button class="btn btn-success" type="submit"><span>View Your Order Details</span></button>
				</form>
			</div>
		</div>
	</div>
</div>

<div id="your-modal-razorpay" class="modal">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header justify-content-center">
				 <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
			</div>
			
			<div class="modal-body text-center">
				<div class="modal-subheading text-center">
					<h4>Great!</h4>
				</div>
				<div class="modal-sub-heading text-center">
					<h5>Your order has been created successfully.</h5>
				</div>
				<div class="row text-center">
					<img class="img-fluid PreviewOrderImage" id="PreviewOrderImageRazorpay" border="0" width="100" height="100" align="center" alt="image">
				</div>
				<div class="row text-center">
					<div class="ml-2 productname">
        	  <div>Order ID: <strong id="OrderIDRazorpay"></strong></div>
        	</div>
				</div>
				<div class="row text-center">
					<div class="ml-5">
            <div class="price">Payment Mode: <a href="javascript:void(0);">Online</a></div>
        </div>
				</div>
				<div class="row text-center">
					<div class="ml-5">
	          <div class="price">Total Amount: ₹<strong id="TotalAmountRazorpay"></strong></div>
	        </div>
				</div>
				<div class="row text-center">
					<div class="ml-5">
            <div class="price"><small>Razorpay Payment ID: <span id="razorpay_payment_id"></span></small></div>
            <div class="price"><small>Razorpay Order ID: <span id="razorpay_order_id"></span></small></div>
        </div>
				</div>
				<form action="{{route('user_dashboard')}}" method="GET" enctype="multipart/form-data">
					<button class="btn btn-success" type="submit"><span>View Your Order Details</span></button>
				</form>
			</div>
		</div>
	</div>
</div>

  </section>




  @endsection

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

  <script>

     function loading(iRun) {

    var loader = document.getElementById('loading').classList;

            if (iRun) {
                loader.remove('d-none');
            }
            else {
                loader.add('d-none');
            }
        }
    


    function order(){
          loading(true);
          document.getElementById('pay_now').disabled = true; 
           $.ajax({
                            type: "Get",
                            url: '{{route('order.place')}}',
                            datatype: 'json',
                            data: $("#contactForm").serialize(),
                            cache: false,
                            processData: false,
                            contentType: false,
                            success: function (data) {
                                const obj = JSON.parse(data);
                                console.log(obj);
                                      loading(false);
                                      if (obj.new.order.status == 'COD') {
								  
                                            $('#PreviewOrderImage').attr("src", window.location.origin + '/images/logo3.png');
                                            $('#OrderID').empty().html(obj.new.order.id);
                                            $('#TotalAmount').empty().html(obj.new.order.amount);

                                             document.getElementById('your-modal-cod').classList.add('modal-show');
                                            // $('#your-modal-cod').modal({
                                            //     backdrop: 'static',
                                            //     keyboard: false
                                            // });

                                       } else {
                                            var options = {
                                              "key": "rzp_test_6H6AUtBZCXyatL", // Enter the Key ID generated from the Dashboard
                                              "amount": obj.new.order.amount * 100, // Amount is in currency subunits. Default currency is <i class="fas fa-rupee-sign"></i> Hence, 50000 refers to 50000 paise
                                              "currency": "INR",
                                              "name": "Chittar",
                                              "description": "Razorpay Transaction",
                                              "image": window.location.origin + "/images/logo3.png",
                                              "order_id": obj.new.orderId, //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                                              "handler": function (response){
                                                $.ajaxSetup({
                                                    headers: {
                                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                    }
                                                });
                                                $.ajax({
                                                    type: "POST",
                                                    url: '{{route('update_order_status')}}',
                                                    datatype: 'json',
                                                    data: {
                                                        "_token": "{{ csrf_token() }}",
                                                        "OrderID": obj.new.order.id,
                                                        "TotalAmount": obj.new.order.amount,
                                                        "razorpay_payment_id": response.razorpay_payment_id,
                                                        "razorpay_order_id": response.razorpay_order_id,
                                                        "razorpay_signature": response.razorpay_signature,
                                                      },
                                                    success: function (data) {
                                                        // alert('jhvjkvkj');
                                                      $('#PreviewOrderImageRazorpay').attr("src", window.location.origin + '/images/logo3.png');
                                                      $('#OrderIDRazorpay').empty().html(obj.new.order.order_no);
                                                      $('#TotalAmountRazorpay').empty().html(obj.new.order.amount);
                                                      $('#razorpay_payment_id').empty().html(response.razorpay_payment_id);
                                                      $('#razorpay_order_id').empty().html(response.razorpay_order_id);

                                                       document.getElementById('your-modal-razorpay').classList.add('modal-show');
                                                      // $('#your-modal-razorpay').modal({
                                                      //     backdrop: 'static',
                                                      //     keyboard: false
                                                      // });
                                                    },
                                                    complete: function () {
                                                    },
                                                    error: function () {
                                                    }
                                                });
                                              },
                                              "prefill": {
                                                  "name": "",
                                                  "email": "",
                                                  "contact": ""
                                              },
                                              "notes": {
                                                  "address": ""
                                              },
                                              "theme": {
                                                  "color": "#e54033"
                                              },
                                              "modal": {
                                                  "backdrop": 'static',
                                                  "keyboard": false,
                                                  "ondismiss": function(){
                                                      window.location.replace(window.location.origin + '/');
                                                  }
                                              }
                                            };
                                            var rzp1 = new Razorpay(options);
                                            rzp1.on('payment.failed', function (response){
                                                    alert('failed');
                                                    // alert(response.error.code);
                                                    // alert(response.error.description);
                                                    // alert(response.error.source);
                                                    // alert(response.error.step);
                                                    // alert(response.error.reason);
                                                    // alert(response.error.metadata.order_id);
                                                    // alert(response.error.metadata.payment_id);
                                            });
                                            rzp1.open();
                                          }
                                
                                

                              },
                            complete: function () {
                            },
                            error: function () {
                            }
                        });

    }

  $( document ).ready(function() {

    $("#add_address").click(function(){
          document.getElementById('address_div').classList.remove('d-none');
          document.getElementById('add_address').classList.add('d-none');
    });
  });

  function radio_click(element){
      
    if(element.value == 1){
        if(element.checked){
              document.getElementById('address_div').classList.add('d-none');
        }
    }
    if(element.value == 2){
        if(element.checked){
              document.getElementById('address_div').classList.remove('d-none');
        }
    }
  }

  </script>