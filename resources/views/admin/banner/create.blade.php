@extends('admin.layouts.dashboard')

@php
  $title = "Add Banner";
  $button_text = "Add Banner";
  if(!empty($shipping)) {
    $title = "Edit Banner";
    $button_text = "Update Banner";
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
          
          @if(!empty($banner))
            <form method="POST" action="{{ route('banners.update') }}" enctype="multipart/form-data">
          @else
              <form method="POST" action="{{ route('banners.store') }}" enctype="multipart/form-data">
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
               <input type="hidden" name="banner_id" value="{{ !empty($banner->id)? $banner->id : "" }}"/>
            <div class="col-6">
              <div class="form-group">
                  <label class="col-form-label" for="name"><b>Name</b></label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ !empty($banner->name)? $banner->name : "" }}" placeholder="Banner Name" required>
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                  <label class="col-form-label" for="name"><b>Image</b></label>
                  <input type="file" name="image" id="imgInp" accept="image/*" class="file-box" required/>
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