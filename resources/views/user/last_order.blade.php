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
                      <h4 class="mb-4">Product Orders</h4>
                    </div>
                    <table class="cart-table table border" width="100%">
                      <thead>
                        <tr>
                          <th>Order ID </th>
                          <th>customer</th>
                          <th>photo</th>
                          <th>product</th>
                          <th>qty</th>
                          <th>status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>#225801</td>
                          <td>Tim Sebastian</td>
                          <td><img src="images/prod-cart-1.jpg" alt=""></td>
                          <td>Still Gray Chair</td>
                          <td>61</td>
                          <td><span class="failed">Failed</span></td>
                         
                        </tr>
                        <tr>
                          <td>#225833</td>
                          <td>Genelia Jobs</td>
                          <td><img src="images/prod-cart-1.jpg" alt=""></td>
                          <td>Gold Wooden Chair</td>
                          <td>01</td>
                          <td><span class="paid">paid</span></td>
                          
                        </tr>
                        <tr>
                          <td>#225821</td>
                          <td>Tim Sebastian</td>
                          <td><img src="images/prod-cart-1.jpg" alt=""></td>
                          <td>Pure Wooden chair</td>
                          <td>30</td>
                          <td><span class="pending">pending</span></td>
                          
                        </tr>
                        <tr>
                          <td>#225859</td>
                          <td>steam jobs</td>
                          <td><img src="images/prod-cart-1.jpg" alt=""></td>
                          <td>Still Gray Chair</td>
                          <td>30</td>
                          <td><span class="failed">failed</span></td>
                         
                        </tr>
                        <tr>
                          <td>#225801</td>
                          <td>Tim Sebastian</td>
                          <td><img src="images/prod-cart-1.jpg" alt=""></td>
                          <td>Still Gray Chair</td>
                          <td>61</td>
                          <td><span class="failed">Failed</span></td>
                         
                        </tr>
                        <tr>
                          <td>#225833</td>
                          <td>Genelia Jobs</td>
                          <td><img src="images/prod-cart-1.jpg" alt=""></td>
                          <td>Gold Wooden Chair</td>
                          <td>01</td>
                          <td><span class="paid">paid</span></td>
                          
                        </tr>
                        <tr>
                          <td>#225859</td>
                          <td>steam jobs</td>
                          <td><img src="images/prod-cart-1.jpg" alt=""></td>
                          <td>Still Gray Chair</td>
                          <td>30</td>
                          <td><span class="failed">failed</span></td>
                          
                        </tr>
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