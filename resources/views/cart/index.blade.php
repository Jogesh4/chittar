@extends('layouts.app')
@php
$userID = auth()->user() ? auth()->user()->id : 1;
@endphp
@section('content')
            
<!-- <section class="">
  <div class="container mt-2 mb-5">
    
@if($cartItems->count() > 0)
    <div class="row">
    <div class="bg-white p-3 mb-3 text-uppercase fw-bolder text-center"> <span class="pink-color h5 ">Cart</span> > Shipping Detail >> Payment Method </div>
      <div class="col-md-8 bg-white p-2">
      
        <table class="mb-2 w-100">
          <tbody class="items">
            @if($cartItems->count() > 0)
            @foreach($cartItems as $row)
            <tr class="selected-product">
              <td class="item-thumbnail">
                <img src="{{ $row->image ? asset('storage/'.$row->image) : 'images/1.jpg' }}" width="80" height="80" data-max-width="80" data-max-height="80">
              </td>
              <td class="item-info">
                <p class="item-title"><a href="">{{ $row->name }}</a></p>
              </td>
              <td class="item-qty mt-2">
                <div class="product-quantity">
                  <div class="quantity quantity-2 YK-quantity">
                   
                      <span class="decrease" onclick="decreaseQty({{ $row->id }})">
                      <i class="fas fasu fa-minus"></i></span>
                      <input class="qty-input no-focus YK-qty" data-page="product-view" title="Available Quantity" type="text" id="quantity-{{ $row->id }}" name="quantity" max="10" min="1" value="{{ $row->qty }}" readonly="">
                      <span class="increase" onclick="increaseQty({{ $row->id }})"> <i class="fas fasu fa-plus"></i></span>
                  </div>
                </div>
              </td>
              <td class="text-end">
                <span id="price-{{ $row->id }}">Rs.{{ $row->total }}</span>
              </td>
              <td class="ps-2 text-end">
                  <form method="POST" action="{{ route('remove.item.from.cart') }}">
                     @csrf
                        <input type="hidden" name="cart_id" value="{{ $row->id }}"/>
                        <button class="border-0"><i class="fa fa-trash green-text" aria-hidden="true"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
            @else
              <tr>
                <td colspan="5">No Items in the cart</td>
              </tr>
            @endif
          </tbody>
        </table>
        <div class="row">
          <div class="text-start col">
            @if($cartItems->count() > 0)
            <form method="POST" action="{{ route('remove.from.cart') }}">
              @csrf
              <button class="btn btn-danger btn-block">Empty Cart</button>
            </form>
            @endif
          </div>
          <div class="text-end col">Subtotal: <span class="cart-subtotal total"> Rs.{{ $total }}</span></div>
        </div>
      </div>
      <div class="col-md-4" style="background: #c96f8b; border-top-right-radius: 2em; border-bottom-right-radius: 2em;">
        <div class="p-4 text-white">
          <ul class="p-0 sub-total">
            <li class="subtotal">
              <strong>Subtotal:</strong>
              <span class="cart-subtotal total">Rs.{{ $total }}</span>
            </li>
            <li class="order-modifier SHIPPING-modifier shipping-code-modifier">
              <strong>Service Fee / Shipping Cost:</strong>
              <span class="cart-subtotal">Rs.0</span>
              <div class="estimator" data-deferred="1" data-shipping-cost="375">
                
                <hr>
                <h4 class="cart-subtotal total text-white">(Rs.{{ $total }})</h4>
              </div>
            </li>
            <li class="main-button">
              {{-- <a href="#" class="checkout-btn text-center">
              Go to checkout
              </a> --}}
              {{-- <form method="post" action="{{ route('order.place') }}">
                @csrf
                   <button class="checkout-btn text-center">Go to checkout</button>
                
              </form> --}}
                 <a href="/select-address" class="checkout-btn text-center">Go to checkout</a>
            </li>
            <li class="d-inline-block w-100 text-center mt-2">
              <div class="small">
                <a href="">
                 Have a Cash Card or Discount Coupon?
                </a>
              </div>
            </li>
          </ul>
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

@else

          <div class="text-center">
              <h2>Your Shopping Cart is Empty!!!</h2>
              <a class="btn btn-lg btn-dark mt-3" href="/category/women">View Products</a>
          </div>



@endif

  </div>
</section> -->



<section>
  <div class="container">
    <div class="row ">
      <div class="col-3">
  

                        <div class="row p-4 "> 
                        <div class="col-12 bg-white shadow p-3 m-2 pink-color border  fw-bold"><a href="#"> <i class="fas pink-color fa-fw fa-user "></i> Details </a></div> 
                         <div class="col-12 bg-white shadow p-3 m-2 pink-color border  fw-bold"><a href="#"> <i class="fas pink-color fa-box"></i> Reward Point History</a></div> 
                          <div class="col-12 bg-white shadow p-3 m-2 pink-color border  fw-bold"><a href="#"> <i class="fas pink-color fa-money-bill"></i> Redeemed Coupons</a></div> 
                           <div class="col-12 bg-white shadow p-3 m-2 pink-color border  fw-bold"><a href="#"> <i class="fas pink-color fa-list"></i> Orders</a></div>  
                           <div class="col-12 bg-white shadow p-3 m-2 pink-color border  fw-bold"><a href="#"> <i class="fas pink-color fa-ban"></i> Cancellation Requests</a></div>
                           <div class="col-12 bg-white shadow p-3 m-2 pink-color border  fw-bold"><a href="#"> <i class="fas pink-color fa-exchange-alt"></i> Return Requests</a></div>
                           <div class="col-12 bg-white shadow p-3 m-2 pink-color border  fw-bold"><a href="#"> <i class="fas pink-color fa-keyboard"></i>Product Reviews</a></div>
                        </div>  
                        </div>  
                        <div class="col-8">
                        <div class="row p-2 ">
                            <input data-v-a0e87de4="" type="search" placeholder="Bhanu@justconsult.us X " aria-label="Search Email" autocomplete="off" class="form-control ">
                        </div>
<div class="row p-3 bg-white mt-3 ">
    <h3>Personal Detail</h3>
    <div class="col-md-12 col-lg-6 form-outline p-2">      
        <input type="text" name="type-product" id="" placeholder="Bhanu Tripathi   " class="form-control2 " value="Bhanu Tripathi" />
    </div>
    <div class="col-md-12 col-lg-6 form-outline p-2">      
        <input type="text" name="type-product" id="" placeholder="Bhanu@justconsult.us" class="form-control2 " value="Bhanu Tripathi" />
    </div>
    <div class="col-md-12 col-lg-6 form-outline p-2">      
        <input type="text" name="type-product" id="" placeholder="8899167977" class="form-control2 " value="8899167977" />
    </div>
    <div class="col-md-12 col-lg-6 form-outline p-2">      
        <input type="text" name="type-product" id="" placeholder="ward no 1 College Road" class="form-control2 " value="ward no 1 College Road" />
    </div>

    <div class="col-md-12 col-lg-4 form-outline p-2">      
        <input type="text" name="type-product" id="" placeholder="Kathua" class="form-control2 " value="Kathua" />
    </div>

    <div class="col-md-12 col-lg-4 form-outline p-2">      
        <input type="text" name="type-product" id="" placeholder="Jammu & Kashmir" class="form-control2 " value="Jammu & Kashmir" />
    </div>

    <div class="col-md-12 col-lg-4 form-outline p-2">      
        <input type="text" name="type-product" id="" placeholder="184101" class="form-control2 " value="184101" />
    </div>
    <div class="col-md-12 col-lg-4 form-outline p-2">      
        <p>Created:<span> admin | 18-09-2020 09:35 PM</span></p>
        <p>Last updated:<span> admin | 31-03-2021 01:04 PM</span></p>

    </div>
    <div class="col-md-12 col-lg-4 form-outline p-2">      
        
    </div>
</div>





<div class="row p-3 bg-white mt-3 ">
    <h3> Reward Point History</h3>
    <div data-v-5c28841f="" class="portlet__body p-0 flex-grow-1"><!----> <table data-v-5c28841f="" class="table table-data"><thead data-v-5c28841f=""><tr data-v-5c28841f=""><th data-v-5c28841f="" colspan="2">Available Balance: 0 Points</th> <th data-v-5c28841f="" colspan="1" class="text-right"><a data-v-5c28841f="" href="javascript:;" class="links">Manage Reward</a></th></tr> <tr data-v-5c28841f=""><th data-v-5c28841f="">Date</th> <th data-v-5c28841f="">Points</th> <th data-v-5c28841f="">Comments</th></tr></thead> <tbody data-v-5c28841f=""><tr data-v-5c28841f=""><td data-v-5c28841f="" width="25%">31-03-2021</td> <td data-v-5c28841f="" class="text-success"><span data-v-5c28841f="">4700</span></td> <td data-v-5c28841f=""><ul data-v-5c28841f=""><li data-v-5c28841f=""><span data-v-5c28841f="">4700 points earned for Costa Smeralda</span></li></ul> <!----> <!----> <!----> <!----> <!----></td></tr><tr data-v-5c28841f=""><td data-v-5c28841f="" width="25%">31-03-2021</td> <td data-v-5c28841f="" class="text-success"><span data-v-5c28841f="">290</span></td> <td data-v-5c28841f=""><ul data-v-5c28841f=""><li data-v-5c28841f=""><span data-v-5c28841f="">140 points earned for COCO MADEMOISELLE Eau de Parfum Fragrance Collection</span></li><li data-v-5c28841f=""><span data-v-5c28841f="">150 points earned for Clé de Peau Beauté Concealer SPF 25</span></li></ul> <!----> <!----> <!----> <!----> <!----></td></tr><tr data-v-5c28841f=""><td data-v-5c28841f="" width="25%">31-03-2021</td> <td data-v-5c28841f="" class="text-danger"><span data-v-5c28841f="">-50</span></td> <td data-v-5c28841f=""><!----> <!----> <!----> <span data-v-5c28841f="">-50 points used towards order #10006</span> <!----> <!----></td></tr><tr data-v-5c28841f=""><td data-v-5c28841f="" width="25%">31-03-2021</td> <td data-v-5c28841f="" class="text-success"><span data-v-5c28841f="">310</span></td> <td data-v-5c28841f=""><ul data-v-5c28841f=""><li data-v-5c28841f=""><span data-v-5c28841f="">40 points earned for Sunglasses, MU 05SS</span></li><li data-v-5c28841f=""><span data-v-5c28841f="">270 points earned for Ralph Polarized Sunglasses , RA4004</span></li></ul> <!----> <!----> <!----> <!----> <!----></td></tr></tbody></table> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----></div>
</div>



<div class="row p-3 bg-white mt-3 ">
    <h3> Redeemed Coupons</h3>
    <div data-v-5c28841f="" class="portlet"><div data-v-5c28841f="" class="portlet__body p-0 flex-grow-1"><!----> <!----> <!----> <!----> <!----> <table data-v-5c28841f="" class="table table-data"><thead data-v-5c28841f=""><tr data-v-5c28841f=""><th data-v-5c28841f="" colspan="3"><span data-v-5c28841f="">Total Order Amount</span>
        : $740.45
      </th></tr> <tr data-v-5c28841f=""><th data-v-5c28841f="">Order Date</th> <th data-v-5c28841f="">Order#</th> <th data-v-5c28841f="">Amount</th></tr></thead> <tbody data-v-5c28841f=""><tr data-v-5c28841f=""><td data-v-5c28841f="">31-03-2021</td> <td data-v-5c28841f=""><a data-v-5c28841f="" href="#/order/10009" class="btn btn-link" target="_blank">#10009</a></td> <td data-v-5c28841f="">$100.00</td></tr><tr data-v-5c28841f=""><td data-v-5c28841f="">31-03-2021</td> <td data-v-5c28841f=""><a data-v-5c28841f="" href="#/order/10007" class="btn btn-link" target="_blank">#10007</a></td> <td data-v-5c28841f="">$320.05</td></tr><tr data-v-5c28841f=""><td data-v-5c28841f="">31-03-2021</td> <td data-v-5c28841f=""><a data-v-5c28841f="" href="#/order/10006" class="btn btn-link" target="_blank">#10006</a></td> <td data-v-5c28841f="">$249.25</td></tr><tr data-v-5c28841f=""><td data-v-5c28841f="">31-03-2021</td> <td data-v-5c28841f=""><a data-v-5c28841f="" href="#/order/10004" class="btn btn-link" target="_blank">#10004</a></td> <td data-v-5c28841f="">$71.15</td></tr></tbody></table> <!----> <!----> <!----> <!----> <!----></div> <div data-v-5c28841f="" class="portlet__foot"><div data-v-5c28841f="" class="pagination px-4"><ul class="pagination__links"><!----> <!----> <li class="pagination__link--active" style="display: none;"><a href="javascript:;">1</a></li> <!----> <!----></ul> <div class="pagination__toolbar"><!----> <span class="pagination__desc">
    Showing 1 to 4 of 4 Records
</span></div></div> <!----></div></div>
</div>

<div class="row bg-white mt-3">
    <h3 class="bg-white mt-3"> Addresses</h3>
    <h5 class="text-center mt-2"></h5>
    <div data-v-5c28841f="" class="portlet__body p-0 flex-grow-1"><!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> 
        <ul data-v-5c28841f="" class="my-addresses list-addresses p-5"><li data-v-5c28841f=""><div data-v-5c28841f="" class="my-addresses__body"><address data-v-5c28841f="" class="delivery-address"><h5 data-v-5c28841f="">
        Misha Langdon
        </h5> <p data-v-5c28841f="">58 E.,  LAKE STREET CHICAGO,  Chicago,  Illinois,  United States,  60601</p> <p data-v-5c28841f="" class="phone-txt"><i data-v-5c28841f="" class="fas fa-mobile-alt"></i>
        +1 2454787777
      </p></address></div></li><li data-v-5c28841f=""><div data-v-5c28841f="" class="my-addresses__body"><address data-v-5c28841f="" class="delivery-address"><h5 data-v-5c28841f="">
        Misha Hesson
        </h5> <p data-v-5c28841f="">1895,  1895  Harper Street,  Paducah,  Kentucky,  United States,  42001</p> <p data-v-5c28841f="" class="phone-txt"><i data-v-5c28841f="" class="fas fa-mobile-alt"></i>
        +1 2702013860
      </p></address></div></li>
    </ul>
       <!----></div>
</div>
  </div>
  </div>
</section>








































@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


<script>

function increaseQty(id){
       var quantity = document.getElementById('quantity-'+id).value;

       
            $.ajax({
                    type: "Get",
                    url: '{{route('add_cart_quantity')}}',
                    datatype: 'json',
                    data: {
                        'cart_id' : id,
                        'quantity' : quantity,
                    },
                    success: function (data) {
                        const obj = JSON.parse(data);
                         
                        if(obj.new.code == 1){
                            $('#quantity-'+id).val(obj.new.quantity);
                            $('#price-'+id).text('Rs.' + obj.new.price);
                            $('.total').text('Rs.' + obj.new.subtotal);

                            

                        }
                      },
                    complete: function () {
                    },
                    error: function () {
                    }
                });

    }

    function decreaseQty(id){
       var quantity = document.getElementById('quantity-'+id).value;

       if(quantity > 1){
       
            $.ajax({
                    type: "Get",
                    url: '{{route('minus_cart_quantity')}}',
                    datatype: 'json',
                    data: {
                        'cart_id' : id,
                        'quantity' : quantity,
                    },
                    success: function (data) {
                        const obj = JSON.parse(data);
                         
                        if(obj.new.code == 1){
                            $('#quantity-'+id).val(obj.new.quantity);
                            $('#price-'+id).text('Rs.' + obj.new.price);
                            $('.total').text('Rs.' + obj.new.subtotal);

                            

                        }
                      },
                    complete: function () {
                    },
                    error: function () {
                    }
                });
          }
    }

</script>