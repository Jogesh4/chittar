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
              <h4 class="mb-4">All Users</h4>
            </div>
            <table class="cart-table table border" width="100%">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Date Created</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->created_at }}</td>
                  <td>{{ $user->is_active ? 'Active' : 'Not Active' }}</td>
                  <td>
                    <a href="#" class="settings" title="" data-toggle="tooltip" data-original-title="Settings"><i class="fas fa-cog"></i></a>&nbsp;
                    <a href="#" class="delete" title="" data-toggle="tooltip" data-original-title="Delete"><i class="fas fa-times"></i></a>
                </td>
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
