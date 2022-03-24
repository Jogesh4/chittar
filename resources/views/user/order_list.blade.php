@extends('layouts.userdashboard')
@section('content')

<div class="container-fluid">

  <div class="row">

        <div class="col-xl-12 col-lg-12">
             <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                               
                                <div class="card-body">
                                    <div class=" pb-2">
                                     <div class="inner-bg table-responsive">
                    <div class="element-title mb-2">
                      <h4 class="mb-4">Product Orders</h4>
                    </div>
                    <table class="cart-table table border" width="100%">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Order ID</th>
                          <th>Customer</th>
                          <th>Items</th>
                          <th>Details</th>
                          <th>status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(!empty($orders))
                          @foreach($orders as $order)
                            <tr>
                              <td>{{date('d-m-Y H:m:s', strtotime($order->created_at))}}</td>
                              <td>{{ $order->order_no }}</a></td>
                              <td>{{ auth()->user()->name }}</td>
                              <td>{{ $order->items }}</td>
                              <td><a href="{{ route('user_order_detail', $order->id) }}" class="btn btn-warning">View Details</a></td>
                              <td><span class="failed">{{ $order->status }}</span></td>
                            
                            </tr>
                          @endforeach
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

                    <!-- Content Row -->
                </div>

@endsection