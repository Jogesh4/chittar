@extends('layouts.app')
@php
$userID = auth()->user() ? auth()->user()->id : 1;
@endphp
@section('content')
            
<section class="">
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
                <a class="" href="{{ route('item.show', $row->name) }}"><img src="{{ $row->image ? asset('storage/'.$row->image) : 'images/1.jpg' }}" width="80" height="80" data-max-width="80" data-max-height="80"></a>
              </td>
              <td class="item-info">
                <a class="" href="{{ route('item.show', $row->name) }}"><h6 class="item-title">{{ $row->name }}</h6></a>
                @if(!empty($row->size))
                   <p class="item-title">Size: <span>{{ !empty($row->size)?$row->size : "" }}</span><span class="fw-bold m-3"> | </span> <span>  Color: {{ !empty($row->color)?$row->color : "" }}</span></p>
                @endif
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
          <div class="col-4">
                <div class="text-start">
                  @if($cartItems->count() > 0)
                  <form method="POST" action="{{ route('remove.from.cart') }}">
                    @csrf
                    <button class="btn btn-danger btn-block">Empty Cart</button>
                  </form>
                  @endif
                </div>
          </div>
          <div class="col-5">
                <a href="/search" class="btn-pink">Continue Shopping</a>
          </div>
          
          <div class="text-end col-3">Subtotal: <span class="cart-subtotal total"> Rs.{{ $total }}</span></div>
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
              <a class="btn btn-lg btn-dark mt-3" href="/search">View Products</a>
          </div>



@endif

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