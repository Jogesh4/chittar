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
    <i class="fas fa-shoe-prints navbar-picons"></i>
      <span>Dashboard</span>
    </a>
 </li>
  

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('admin.users.index') }}">
    <i class="fas fa-shoe-prints navbar-picons"></i>
      <span>Manage Users</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('admin.orders.index') }}">
    <i class="fas fa-shoe-prints navbar-picons"></i>
      <span>Manage orders</span>
    </a>
  </li>
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">
  <!-- Nav Item - Tables -->
  <li class="nav-item">
      <a class="nav-link dropdown-toggle" data-toggle="collapse" aria-expanded="false" href="#pageSubmenu">
      <i class="fas fa-shoe-prints navbar-picons"></i>
          <span>Category</span></a>
          <ul class="collapse list-unstyled" id="pageSubmenu">
          <li class="nav-item">
    <a class="nav-link" href="{{ route('admin.categories.create') }}">
    <i class="fas fa-shoe-prints navbar-picons"></i>
        <span>Create categories</span></a>
</li>
            <li class="nav-item">
    <a class="nav-link" href="{{ route('admin.categories.index') }}">
    <i class="fas fa-shoe-prints navbar-picons"></i>
        <span>View categories</span></a>
</li>
</ul>
  </li>
  <li class="nav-item">
      <a class="nav-link dropdown-toggle" data-toggle="collapse" aria-expanded="false" href="#pageiTEMmenu">
           <i class="fas fa-shoe-prints navbar-picons"></i>
          <span>ITEM</span></a>
          <ul class="collapse list-unstyled" id="pageiTEMmenu">
<li class="nav-item">
      <a class="nav-link" href="{{ route('admin.items.create') }}">
           <i class="fas fa-shoe-prints navbar-picons"></i>
          <span>Add item</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('admin.items.index') }}">
        <i class="fas fa-solid fa-eye"></i>
        <span>View items</span></a>
</li>
</ul>
  </li>
  <li class="nav-item">
      <a class="nav-link dropdown-toggle" data-toggle="collapse" aria-expanded="false" href="#pagebRANDmenu">
           <i class="fas fa-shoe-prints navbar-picons"></i>
          <span>BRAND</span></a>
          <ul class="collapse list-unstyled" id="pagebRANDmenu">
<li class="nav-item">
  <a class="nav-link" href="{{ route('admin.brands.create') }}">
       <i class="fas fa-shoe-prints navbar-picons"></i>
      <span>Add brand</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ route('admin.brands.index') }}">
<i class="fas fa-shoe-prints navbar-picons"></i>
    <span>View brands</span></a>
</li>
</ul>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  </li>  
  <li class="nav-item">
    <a class="nav-link" href="/report">
       <i class="fas fa-shoe-prints navbar-picons"></i>
      <span>Reports</span>
    </a>
  </li>
  </li>  <li class="nav-item">
    <a class="nav-link" href="/customer-report">
       <i class="fas fa-shoe-prints navbar-picons"></i>
      <span>Customers Reports</span>
    </a>
  </li>

   <!-- Divider -->
   <hr class="sidebar-divider d-none d-md-block">
  </li> 
  
  <li class="nav-item">
    <a class="nav-link" href="/special-price">
       <i class="fas fa-shoe-prints navbar-picons"></i>
      <span>Special Price</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/manage-reviews">
       <i class="fas fa-shoe-prints navbar-picons"></i>
      <span>Manage Reviews</span>
    </a>
  </li>
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

  <!-- Sidebar Message -->
 

</ul>
<!-- End of Sidebar -->