@extends('layouts.app')
@php
$userID = auth()->user() ? auth()->user()->id : 1;
@endphp
@section('content')
            
<section class="">
  <div class="container mt-5 mb-5">
@if($cartItems->count() > 0)
    <div class="row">
      <div class="col-md-8">
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
      <div class="col-md-4">
        <div class="p-4 border shadow">
          <ul class="p-0 sub-total">
            <li class="subtotal">
              <strong>Subtotal:</strong>
              <span class="cart-subtotal total">Rs.{{ $total }}</span>
            </li>
            <li class="order-modifier SHIPPING-modifier shipping-code-modifier">
              <strong>Service Fee / Shipping Cost:</strong>
              <span class="cart-subtotal">Rs.0</span>
              <div class="estimator" data-deferred="1" data-shipping-cost="375">
                <ul class="p-0">
                  <li>Next Day Delivery
                  </li>
                  <li>
                    <span class="section">Estimated for:</span>
                    India, AN
                  </li>
                </ul>
                <hr>
                <h4 class="cart-subtotal total">(Rs.{{ $total }})</h4>
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