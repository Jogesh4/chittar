@extends('layouts.userdashboard')
@section('content')

<div class="container-fluid">

  <div class="row">

        <div class="col-xl-12 col-lg-12">
             <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                               
                                <div class="card-body">
                                    <div class=" pb-2">
                                     <div class="inner-bg table-responsive">
                    <div class="element-title mb-2">
                      <h4 class="mb-4">Favorite Products</h4>
                    </div>
                    <table class="cart-table table border" width="100%">
                      <thead>
                        <tr>
                          <th>Item Image</th>
                          <th>Item Name</th>
                          <th>Item Price</th>
                          <th>Details</th>
                          <th>Cart</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(!empty($favorites))
                          @foreach($favorites as $favorite)
                            <tr>
                              <td><img class="img-fluid my-auto align-self-center mr-2 mr-md-4 pl-0 p-0 m-0" src="{{ asset('storage/'.$favorite->item->image) }}" width="100" height="80" /></td>
                              <td>{{ $favorite->item->name }}</a></td>
                              <td>Rs.{{ $favorite->item->price }}</td>
                              <td><a href="{{ route('item.show', $favorite->item) }}" class="btn btn-warning">View Details</a></td>
                               <td>
                                 <form method="POST" action="{{ route('add.to.cart', $favorite->item) }}">
                                  @csrf
                                  <button class="bttn" style=" border: 0; background: transparent; "><i class="fas fa-cart-arrow-down" style=" color: #ae0151; font-size: 20px; "></i></button>
                                </form>
                               </td>
                            
                            </tr>
                          @endforeach
                        @endif
                      </tbody>
                    </table>
                  </div>    
                               
                            </div>
                        </div>
                        <!-- Area -->
                       
                    </div>
</div>
                       
                    </div>

                    <!-- Content Row -->
                </div>

@endsection