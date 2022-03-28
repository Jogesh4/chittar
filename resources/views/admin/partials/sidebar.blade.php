{{-- <ul class="list-group">
  <li class="list-group-item"><a href="{{ route('admin.categories.create') }}">Create Category</a></li>
  <li class="list-group-item"><a href="{{ route('admin.categories.index') }}">View Category</a></li>
  <li class="list-group-item"><a href="{{ route('admin.items.create') }}">Create Item</a></li>
  <li class="list-group-item"><a href="{{ route('admin.items.index') }}">View Item</a></li>
  <li class="list-group-item"><a href="{{ route('admin.brands.create') }}">Create Brand</a></li>
  <li class="list-group-item"><a href="{{ route('admin.brands.index') }}">View Brand</a></li>
</ul> --}}
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
   <a class="d-flex align-items-center justify-content-center logo-div p-2" href="{{ route('admin.home') }}">
      <img class="img-fluid" src="{{ asset('images/logo3.png') }}">
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <li class="nav-item">
    <a class="nav-link" href="/admin">
      <i class="fas fa-fw fa-user"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('admin.users.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Manage Users</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('admin.orders.index') }}">
      <i class="fas fa-fw fa-shopping-basket"></i>
      <span>Manage orders</span>
    </a>
 </li>

  <!-- Nav Item - Tables -->
  <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.categories.create') }}">
          <i class="fas fa-fw fa-plus-square"></i>
          <span>Add category</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('admin.categories.index') }}">
        <i class="fas fa-solid fa-eye"></i>
        <span>View categories</span></a>
</li>
<li class="nav-item">
      <a class="nav-link" href="{{ route('admin.items.create') }}">
          <i class="fas fa-fw fa-plus-square"></i>
          <span>Add item</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('admin.items.index') }}">
        <i class="fas fa-solid fa-eye"></i>
        <span>View items</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="{{ route('admin.brands.create') }}">
      <i class="fas fa-fw fa-plus-square"></i>
      <span>Add brand</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ route('admin.brands.index') }}">
    <i class="fas fa-solid fa-eye"></i>
    <span>View brands</span></a>
</li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

  <!-- Sidebar Message -->
 

</ul>
<!-- End of Sidebar -->