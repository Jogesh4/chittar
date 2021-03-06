@extends('admin.layouts.dashboard')

@php
  $title = "Add Brand";
  $button_text = "Add Brand";
  if($brand->exists) {
    $title = "Edit Brand";
    $button_text = "Update Brand";
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
          
          @if($brand->exists)
            <form method="POST" action="{{ route('admin.brands.update', $brand) }}">
            @method('put')
          @else
              <form method="POST" action="{{ route('admin.brands.store') }}">
          @endif
          @csrf
          <div class="card-body">

            <div class="form-group @error('name') has-danger @enderror">
                <label class="col-form-label" for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $brand->name) }}" placeholder="Name" required>
                @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group py-2">
              <div class="checkbox">
                <label>
                  <input type="checkbox" id="is_active" name="is_active" value="1" @if(old('is_active', $brand->is_active) == 1) checked @endif>
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