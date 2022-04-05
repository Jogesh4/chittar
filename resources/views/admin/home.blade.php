@extends('admin.layouts.dashboard')

@section('content')
<div class="container-fluid">
                  <div class="row">
                     <div class="col-xl-6 col-lg-6">
                        <div class="card shadow mb-4">
                           <!-- Card Header - Dropdown -->
                           <div class="card-body">
                              <div class=" pb-2">
                                 <div class="row">
                                    <div class="col-lg-12 col-md-12 mb-4 element-title">
                                       <h6 class="mb-4">Total Sales</h6>
                                       <div class="card-body">
                                          <div class="chart-bar">
                                             <canvas id="myBarChart"></canvas>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- Area -->
                        </div>
                        <div class="card shadow mb-4">
                           <div class="card-header py-3">
                              <div class="d-flex justify-content-between">
                                 <!--begin::User-->
                                 <div class="d-flex flex-column">
                                    <h6 class="m-0 font-weight-bold ">Total Profit</h6>
                                 </div>
                                 <!--end::User-->
                              </div>
                           </div>
                           <!-- Card Body -->
                           <div class="card-body">
                             <div class="chart-pie pt-4">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                           </div>
                           <!-- Area -->
                        </div>


                        <div class="card shadow mb-4">
                           <div class="card-header py-3">
                              <div class="d-flex justify-content-between">
                                 <!--begin::User-->
                                 <div class="d-flex flex-column">
                                    <h6 class="m-0 font-weight-bold ">Recent Orders</h6>
                                 </div>
                                 <div class=""><a href="/admin/orders" class="btn btn-outline-secondary btn-sm">
                                    View All Orders
                                </a></div>
                                 <!--end::User-->
                              </div>
                           </div>
                           <!-- Card Body -->
                           <div class="card-body">
                              <div class=" pb-2">
                                 <table class="table table-borderless datatable dataTable-table">
                                    <thead>
                                    <tr>
                                        <th>Order No</th>
                                         <th>Date</th>
                                         <th>Name</th>
                                         <th>Items</th> 
                                         <th>Amount</th> 
                                         
                                    </tr>
                                 </thead>
                                @if(!empty($orders))  
                                     @foreach($orders as $order)                              
                                      <tr>
                                            <td scope="row">{{ $order->order_no }}</td>
                                            <td>{{date('d-m-Y', strtotime($order->created_at))}}</td>
                                            <td>{{ $order->user->name }}</td>
                                            <td>{{ $order->items }}</td> 
                                            <td><i class="fas fa-rupee-sign"></i>{{ $order->amount }}</td> 
                                      </tr>
                                      @endforeach
                                  @else
                                         <div class="text-center">
                                              <h3>No User Found</h3>
                                         </div>
                                      @endif
                                 </table>
                              </div>
                           </div>
                           <!-- Area -->
                        </div>





                        <div class="card shadow mb-4">
                           <div class="card-header py-3">
                              <div class="d-flex justify-content-between">
                                 <!--begin::User-->
                                 <div class="d-flex flex-column">
                                    <h6 class="m-0 font-weight-bold ">Return Requests </h6>
                                 </div>
                                 <div class=""><a href="#/return-requests" class="btn btn-outline-secondary btn-sm">
                                    View All Return Requests
                                </a></div>
                                 <!--end::User-->
                              </div>
                           </div>
                           <!-- Card Body -->
                           <div class="card-body">
                              <div class=" pb-2">
                                 <table class="table table-borderless datatable dataTable-table">
                                    <thead>
                                       <tr>
                                          <th scope="col">Order ID</th>
                                          <th scope="col">Customer Name	</th>
                                          <th scope="col">Return Quantity</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       
                                       <tr><td>444555345 </td><td>Pawan Kumar</td> <td>2</td> </tr>

                                       <tr><td>444232325 </td><td>Misha Hesson</td> <td>3</td> </tr>

                                       <tr><td>4444565 </td><td>Sharjeel Al Masood</td> <td>2</td> </tr>

                                       <tr><td>444232325 </td><td>Misha Hesson</td> <td>1</td> </tr>
                                      
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <!-- Area -->
                        </div>







                     </div>
                     <div class="col-xl-6 col-lg-6">
                        <div class="card shadow mb-4">
                           <!-- Card Header - Dropdown -->
                           <div class="card-body">
                              <div class=" pb-2">
                                 <div class="row">
                                    <div class="col-lg-12 col-md-12 mb-4 element-title">
									  <h6 class="mb-4">Total Orders</h6>
                                       <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                        </div>
                                    </div>
                                 </div>
                               </div>
                           <!-- Area -->
                          </div>
						</div>
                        <div class="card shadow mb-4">
                           <div class="card-header py-3">
                              <div class="d-flex justify-content-between">
                                 <!--begin::User-->
                                 <div class="d-flex flex-column">
                                    <h6 class="m-0 font-weight-bold ">Recent Customers</h6>
                                 </div>
                                 <div class=""><a href="/admin/users" class="btn btn-outline-secondary btn-sm">
                                    View All Customers
                                </a></div>
                                 <!--end::User-->
                              </div>
                           </div>
                           <!-- Card Body -->
                           <div class="card-body">
                              <div class=" pb-2">
                                 <table class="table table-borderless datatable dataTable-table">
                                    <thead>
                                    <tr>
                                        <th>S.No</th>
                                         <th>Name</th> 
                                         <th>Email</th> 
                                         <th>Phone</th> 
                                    </tr>
                                 </thead>
                                   @if(!empty($users))
                                   @foreach($users as $user)
                                      <tr>
                                          <td scope="row">{{ $loop->iteration }}</td>
                                          <td>{{ $user->name }}</td>
                                          <td>{{ $user->email }}</td> 
                                          <td></td> 
                                      </tr>
                                      @endforeach
                                      @else
                                         <div class="text-center">
                                              <h3>No User Found</h3>
                                         </div>
                                      @endif
                                 </table>
                              </div>
                           </div>
                           <!-- Area -->
                        </div>





                        <div class="card shadow mb-4">
                           <div class="card-header py-3">
                              <div class="d-flex justify-content-between">
                                 <!--begin::User-->
                                 <div class="d-flex flex-column">
                                    <h6 class="m-0 font-weight-bold ">Low Inventory </h6>
                                 </div>
                                 
                                 <!--end::User-->
                              </div>
                           </div>
                           <!-- Card Body -->
                           <div class="card-body">
                              <div class=" pb-2">
                                 <table class="table table-borderless datatable dataTable-table">
                                    <h5> We're all stocked up! </h5>
                                 </table>
                              </div>
                           </div>
                           <!-- Area -->
                        </div>





                        <div class="card shadow mb-4">
                           <div class="card-header py-3">
                              <div class="d-flex justify-content-between">
                                 <!--begin::User-->
                                 <div class="d-flex flex-column">
                                    <h6 class="m-0 font-weight-bold ">Cancellation Requests </h6>
                                 </div>
                                 <div class=""><a href="#/cancellation-requests" class="btn btn-outline-secondary btn-sm">
                                    View All Requests
                                </a></div>
                                 <!--end::User-->
                              </div>
                           </div>
                           <!-- Card Body -->
                           <div class="card-body">
                              <div class=" pb-2">
                                 <table class="table table-borderless datatable dataTable-table">
                                    <thead>
                                       <tr>
                                          <th scope="col">Customer Name</th>
                                          <th scope="col" >Customer Email</th>
                                          <th scope="col" >Phone</th>
                                       </tr>
                                    </thead>
                                    <tbody><tr><td><a href="#/order/10010" class="">#10010</a></td> <td>John Doe</td> <td>1</td></tr><tr><td><a href="#/order/10024" class="">#10024</a></td> <td>Paula Woods</td> <td>1</td></tr><tr><td><a href="#/order/10024" class="">#10024</a></td> <td>Paula Woods</td> <td>1</td></tr><tr><td><a href="#/order/10011" class="">#10011</a></td> <td>Laura Wellis</td> <td>1</td></tr><tr><td><a href="#/order/10014" class="">#10014</a></td> <td>Laura Wellis</td> <td>1</td></tr></tbody>
                                 </table>
                              </div>
                           </div>
                           <!-- Area -->
                        </div>

                     </div>
                    
                  </div>
                  <!-- Content Row -->
               </div>
@endsection


