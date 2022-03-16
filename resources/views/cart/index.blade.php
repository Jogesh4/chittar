@extends('layouts.app')
@php
$userID = auth()->user() ? auth()->user()->id : 1;
@endphp
@section('content')
<section class="py-0">
  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-md-8">
        <table class="mb-2 w-100">
          <tbody class="items">
            @php
              $cartCollection = \Cart::session($userID)->getContent();
            @endphp
            @if($cartCollection->count() > 0)
            @foreach($cartCollection as $row)
            <tr class="selected-product">
              <td class="item-thumbnail">
                <img src="{{ $row->associatedModel->image ? asset('storage/'.$row->associatedModel->image) : 'images/1.jpg' }}" width="80" height="80" data-max-width="80" data-max-height="80">
              </td>
              <td class="item-info">
                <p class="item-title"><a href="">{{ $row->name }}</a></p>
              </td>
              <td class="text-end">
                ${{ $row->price }}
              </td>
              <td class="text-end">
                {{ $row->quantity }}
              </td>
              <td class="text-end">
                ${{ $row->price * $row->quantity }}
              </td>
              {{-- <td class="item-qty mt-2">
                <form>
                  <button class="minus" onclick="decrement()">-</button><input type="text" value="1" class="form-control input-fild mt-2" name="amount" title="Quantity"><button class="plus" onclick="increment()">+</button>
                </form>
              </td>
              <td class="text-end">
                ${{ $row->price }}
              </td> --}}
              <td class="ps-2">
                <i class="fa fa-trash-o green-text" aria-hidden="true"></i>
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
            @if($cartCollection->count() > 0)
            <form method="POST" action="{{ route('remove.from.cart') }}">
              @csrf
              <button class="btn btn-danger btn-block">Empty Cart</button>
            </form>
            @endif
          </div>
          <div class="text-end col">Subtotal: {{ Cart::session($userID)->getTotal() }}</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 border shadow">
          <ul class="p-0 sub-total">
            <li class="subtotal">
              <strong>Subtotal:</strong>
              <span class="cart-subtotal">${{ Cart::session($userID)->getTotal() }}</span>
            </li>
            <li class="order-modifier SHIPPING-modifier shipping-code-modifier">
              <strong>Service Fee / Shipping Cost:</strong>
              <span class="cart-subtotal">$0</span>
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
                <h4 class="cart-subtotal">(${{ Cart::session($userID)->getTotal() }})</h4>
              </div>
            </li>
            <li class="main-button">
              {{-- <a href="#" class="checkout-btn text-center">
              Go to checkout
              </a> --}}
              <form method="post" action="{{ route('order.place') }}">
                @csrf
                <button class="checkout-btn text-center">Go to checkout</button>
              </form>
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
  </div>
</section>
@endsection