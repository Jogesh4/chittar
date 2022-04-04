@extends('admin.layouts.dashboard')

@php
  $title = "Add Category";
  $button_text = "Add Category";
  if(!empty($category)) {
    $title = "Edit Category";
    $button_text = "Update Category";
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
          
          @if(!empty($category))
            <form method="POST" action="{{ route('admin.categories.update', $category) }}" enctype="multipart/form-data">
            @method('put')
          @else
              <form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
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

            <div class="form-group">
                <label class="col-form-label" for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ !empty($category->name)? $category->name : "" }}" placeholder="Name" required>
                @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="col-lg-9 mt-2 mb-2">
                <input type="file" name="image" id="imgInp" accept="image/*" class="file-box" onchange="image_upload()"/>
              </div>

            <div class="form-group py-2">
              <div class="checkbox">
                <label>
                  <input type="checkbox" id="is_active" name="is_active" value="1" @if(!empty($category->is_active)) @if($category->is_active == 1) checked @endif @endif>
                  Active?
                </label>
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