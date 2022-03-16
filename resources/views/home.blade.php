@extends('layouts.app')
@section('title', 'Home')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
          <ul class="list-group">
            <li class="list-group-item"><a href="{{ route('home') }}">My Orders</a></li>
          </ul>
        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-body">
                  <div class=" pb-2">
                    <div class="inner-bg table-responsive">
                      <div class="element-title mb-2">
                        <h4 class="mb-4">All Orders</h4>
                      </div>
                      <table class="cart-table table border" width="100%">
                        <thead>
                          <tr>
                            <th>Order ID </th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @if(auth()->user()->orders->count() > 0)
                          @foreach(auth()->user()->orders as $order)
                          <tr>
                            <td>{{ "CH00".$order->id }}</td>
                            <td>{{ $order->amount }}</td>
                            <td><span class="@if($order->status == 'FAILED' || $order->status == 'CANCELLED') failed @elseif($order->status == 'PAID') paid @elseif($order->status == 'COD' || $order->status == 'UNPAID') pending @endif">{{ $order->status }}</span></td>
                            <td>
                              <form method="POST" action="{{ route('order.cancel', $order) }}">
                                @csrf
                                @method('put')
                                <button class="btn btn-danger btn-sm">Cancel</button>
                              </form>
                            </td>
                          </tr>
                          @endforeach
                          @else
                          <tr>
                            <td colspan="4">No Orders</td>
                          </tr>
                          @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- Area -->
              </div>
            </div>
          </div>          
        </div>
    </div>
</div>
@endsection
