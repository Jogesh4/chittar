@extends('layouts.userdashboard')
@section('content')


<div class="container-fluid">

                    <div class="row">
                   
                       

                        

                        <div class="col-xl-12 col-lg-12">
 <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                               
                                <div class="card-body">
                                    <div class=" pb-2">
                                     <div class="inner-bg">
                    <div class="element-title mb-3">
                      <h4>Your Cart (4 items)</h4>
					  <span>Project Management System!</span>
                    </div>
                    <div class="cart-page table-responsive">
                      <table class="cart-table table border">
                        <thead>
                          <tr>
                            <th>photo </th>
                            <th>product</th>
                            <th>price</th>
                            <th>qty</th>
                            <th>total</th>
                            <th>action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><img src="images/prod-cart-1.jpg" alt=""></td>
                            <td>Still Gray Chair</td>
                            <td>$251</td>
                            <td>01</td>
                            <td>$251</td>
                            <td><a href="#" title=""><i class="far fa-trash-alt"></i></a>
							  	<a href="#" title=""><i class="fas fa-pencil-alt"></i></a>
							</td>
                          </tr>
                          <tr>
                            <td><img src="images/prod-cart-1.jpg" alt=""></td>
                            <td>Gold Wooden Chair</td>
                            <td>$34</td>
                            <td>01</td>
                            <td>$669</td>
                            <td><a href="#" title=""><i class="far fa-trash-alt"></i></a>
							  	<a href="#" title=""><i class="fas fa-pencil-alt"></i></a>
							</td>
                          </tr>
                          <tr>
                            <td><img src="images/prod-cart-1.jpg" alt=""></td>
                            <td>Pure Wooden chair</td>
                            <td>$51</td>
                            <td>01</td>
                            <td>$435</td>
                            <td><a href="#" title=""><i class="far fa-trash-alt"></i></a>
							  	<a href="#" title=""><i class="fas fa-pencil-alt"></i></a>
							</td>
                          </tr>
                          <tr>
                            <td><img src="images/prod-cart-1.jpg" alt=""></td>
                            <td>Still Gray Chair</td>
                            <td>$10</td>
                            <td>30</td>
                            <td>$544</td>
                            <td>
							    <a href="#" title=""><i class="far fa-trash-alt"></i></a>
							  	<a href="#" title=""><i class="fas fa-pencil-alt"></i></a>
							</td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="gap">
                        <div class="discount-copon">
							<div class="row">
                          <div class="col-md-4"> <span>discount</span>
                            <p>If you have any discount vouchers/coupans, apply here. If you don't have any, click here to get one.</p>
                          </div>
                          <div class="col-md-8">
                            <form method="post">
                              <label>Coupan No</label>
                              <input type="text" class="form-control" placeholder="Coupen No.">
                              <button type="submit">apply</button>
                            </form>
                          </div>
						  </div>
                        </div>
                      </div>
                      <div class="gap no-gap">
                        <div class="cart-summary">
                          <div class="summery-title">
                            <h3>Cart Summary</h3>
                          </div>
                          <ul class="cart-total">
                            <li>Total:<span>$355</span></li>
                            <li>Coupan Discount:<span>-$55</span></li>
                            <li>Delivery Charges:<span>$12</span></li>
                            <li>Tax:<span>$5</span></li>
                            <li>Payable Amount:<span>$460</span></li>
                          </ul>
                          <div class="total-btns"> <a class="btn-st drk-gry-clr" href="#" title="">Place order</a> <a class="btn-st drk-gry-clr" href="#" title="">Cancel order</a> </div>
                        </div>
                      </div>
                    </div>
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