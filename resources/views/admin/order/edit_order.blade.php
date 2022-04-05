@extends('admin.layouts.dashboard')



@section('title', 'Edit Order')


@section('content')
    <!-- Main content -->
    <section class="py-0">
      <div class="container-fluid">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit Order</h3>
          </div>
          <!-- /.card-header --> 
          
      <form method="POST" action="{{ route('admin.orders.update', $order) }}" enctype="multipart/form-data">
            @method('put')
          
          @csrf

                                                        @if(session()->has('failure'))
                                                            <div class="alert alert-danger">
                                                                {{ session()->get('failure') }}
                                                            </div>
                                                        @endif

                                                        @if(session()->has('success'))
                                                            <div class="alert alert-success">
                                                                {{ session()->get('success') }}
                                                            </div>
                                                        @endif 
          <div class="card-body">

            <div class="row">
                   <div class="col-6">
                        <div class="form-group">
                          <label class="col-form-label" for="name">Order No.</label>
                          <input type="text" class="form-control" id="order_no" name="order_no" value="{{ !empty($order->order_no)? $order->order_no : "" }}" placeholder="Name" readOnly>
                      </div>
                   </div>

                   <div class="col-6">
                        <div class="form-group">
                          <label class="col-form-label" for="name">Transaction</label>
                          <input type="text" class="form-control" id="transaction" name="transaction" value="{{ !empty($order->transaction)? $order->transaction : "" }}" placeholder="Name" readOnly>
                      </div>
                   </div>
            </div>

            <div class="row">
                   <div class="col-6">
                        <div class="form-group">
                          <label class="col-form-label" for="name">Total Amount</label>
                          <input type="text" class="form-control" id="amount" name="amount" value="{{ !empty($order->amount)? $order->amount : "" }}" placeholder="Name" readOnly>
                      </div>
                   </div>

            </div>

            <div class="row">
                   <div class="col-6">
                        <div class="form-group">
                          <label class="col-form-label" for="name">Payment Status</label>
                           <select class="form-control" name="payment_status">
                              <option value="Paid" @if($order->status == 'Paid') selected @endif>Paid</option>
                              <option value="UnPaid" @if($order->status == 'UnPaid') selected @endif>UnPaid</option>
                              <option value="COD" @if($order->status == 'COD') selected @endif>COD</option>
                              <option value="FAILED" @if($order->status == 'FAILED') selected @endif>Failed</option>

                           </select>
                      </div>
                   </div>

                   <div class="col-6">
                        <div class="form-group">
                          <label class="col-form-label" for="name">Order Status</label>
                           <select class="form-control" name="order_status">
                              <option value="0" @if($order->order_status == 0) selected @endif>Pending</option>
                              <option value="1" @if($order->order_status == 1) selected @endif>Confirm</option>
                              <option value="2" @if($order->order_status == 2) selected @endif>Dispatch</option>
                              <option value="3" @if($order->order_status == 3) selected @endif>Delivered</option>
                              <option value="9" @if($order->order_status == 9) selected @endif>Cancelled</option>
                           </select>
                      </div>
                   </div>
            </div>
            

            

            {{-- <div class="form-group py-2">
              <div class="checkbox">
                <label>
                  <input type="checkbox" id="is_active" name="is_active" value="1" @if(!empty($category->is_active)) @if($category->is_active == 1) checked @endif @endif>
                  Active?
                </label>
              </div>
            </div> --}}

          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update Order</button>
          </div>
          <!-- /.card-footer -->
          </form>
        </div>
      </div>
    </section>
    <!-- /.content -->
@endsection