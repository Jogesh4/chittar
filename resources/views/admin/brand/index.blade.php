@extends('admin.layouts.dashboard')
@section('title', 'All Brands')
@section('content')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">All Brands</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 60vh;">
            <table id="dataTable" class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @if($brands->count() > 0)
                  @foreach($brands as $brand)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><a  style="text-decoration: underline;" href="{{ route('admin.brands.edit', $brand->id) }}">{{ $brand->name }}</a></td>
                    <td>{{ $brand->is_active ? 'Active' : 'Not Active' }}</td>
                  </tr>
                  @endforeach
                @else
                  <tr>
                    <td colspan="5">No Data</td>
                  </tr>
                @endif
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <!-- /.row -->
  </div>
</section>
<!-- /.content -->
@endsection