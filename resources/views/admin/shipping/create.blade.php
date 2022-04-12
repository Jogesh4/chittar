@extends('admin.layouts.dashboard')

@php
  $title = "Add Shipping";
  $button_text = "Add Shipping";
  if(!empty($shipping)) {
    $title = "Edit Shipping";
    $button_text = "Update Shipping";
  }
@endphp

@section('title', $title)


@section('content')
    <!-- Main content -->
    <section class="py-0">
      <div class="container-fluid">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
          </div>
          <!-- /.card-header --> 
          
          @if(!empty($shipping))
            <form method="POST" action="{{ route('shippings.update') }}" enctype="multipart/form-data">
          @else
              <form method="POST" action="{{ route('shippings.store') }}" enctype="multipart/form-data">
          @endif
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
               <input type="hidden" name="shipping_id" value="{{ !empty($shipping->id)? $shipping->id : "" }}"
            <div class="col-6">
              <div class="form-group">
                  <label class="col-form-label" for="name"><b>Pincode</b></label>
                  <input type="text" class="form-control" id="name" name="pincode" value="{{ !empty($shipping->pincode)? $shipping->pincode : "" }}" placeholder="Pincode" required>
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                  <label class="col-form-label" for="name"><b>Price</b></label>
                  <input type="text" class="form-control" id="name" name="price" value="{{ !empty($shipping->price)? $shipping->price : "" }}" placeholder="Price" required>
              </div>
            </div>

            

            

          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">{{ $button_text }}</button>
          </div>
          <!-- /.card-footer -->
          </form>
        </div>
      </div>
    </section>
    <!-- /.content -->
@endsection