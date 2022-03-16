@extends('admin.layouts.dashboard')
@section('title', 'All Orders')
@section('content')
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
                  <th>Customer</th>
                  <th>Amount</th>
                  <th>Status</th>
                  {{-- <th>Action</th> --}}
                </tr>
              </thead>
              <tbody>
                @foreach($orders as $order)
                <tr>
                  <td>{{ "CH00".$order->id }}</td>
                  <td>{{ $order->user->name }}</td>
                  <td>{{ $order->amount }}</td>
                  <td><span class="@if($order->status == 'FAILED' || $order->status == 'CANCELLED') failed @elseif($order->status == 'PAID') paid @elseif($order->status == 'COD' || $order->status == 'UNPAID') pending @endif">{{ $order->status }}</span></td>
                  {{-- <td><a href="#" title=""><i class="far fa-trash-alt"></i></a>&nbsp; <a href="#" title=""><i class="fas fa-pencil-alt"></i></a></td> --}}
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- Area -->
    </div>
  </div>
</div>
@endsection
