@extends('admin.layouts.dashboard')
@section('title', 'All Items')
@section('content')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">All Items</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 60vh;">
            <table id="dataTable" class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Category</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @if($items->count() > 0)
                  @foreach($items as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><a style="text-decoration: underline;" href="{{ route('admin.items.edit', $item->id) }}">{{ $item->name }}</a></td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->is_active ? 'Active' : 'Not Active' }}</td>
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