@extends('admin.layouts.dashboard')
@section('title', 'All Users')
@section('content')
<div class="row">
<div class="col-lg-3 col-md-12 col-sm-12">

  <div class="row p-4 "> 
  <div class="col-12 bg-white shadow p-3 m-2 pink-color border  fw-bold text-dark"><a href="#">  Sale over time  <i class="fas pink-color fw-bolder fa-arrow-right"></i></a></div> 
   <div class="col-12 bg-white shadow p-3 m-2 pink-color border  fw-bold text-dark"><a href="#"> Sales by product <i class="fas pink-color fa-long-arrow-alt-right"></i></a></div> 
    <div class="col-12 bg-white shadow p-3 m-2 pink-color border  fw-bold text-dark"><a href="#">  Sales by product variant <i class="fas pink-color fa-long-arrow-alt-right"></i></a></div> 
     <div class="col-12 bg-white shadow p-3 m-2 pink-color border  fw-bold text-dark"><a href="#"> Sale by customer name <i class="fas pink-color fa-long-arrow-alt-right"></i></a></div>  
     <div class="col-12 bg-white shadow p-3 m-2 pink-color border  fw-bold text-dark"><a href="#">  Average order value over time <i class="fas pink-color fa-long-arrow-alt-right"></i></a></div>
     <div class="col-12 bg-white shadow p-3 m-2 pink-color border  fw-bold text-dark"><a href="#"> Sales by traffic referrer <i class="fas pink-color fa-long-arrow-alt-right"></i></a></div>
     
  </div> 
  </div>   
  <div class="col-9 bg-white p-3   ">

  <div class="">
      <div class="table-responsive">
          <h3 class="">SALE REPORT</h3>
          <table class="table table-striped">
              <thead>
                  <tr>
                      <th scope="col">DAY</th>
                      <th scope="col">ORDERS</th>
                      <th scope="col">	GROSS SALES</th>
                      <th scope="col">DISCOUNTS</th>
                      <th scope="col">RETURNS</th>
                      <th scope="col">NET SALES</th>
                      <th scope="col">SHIPPING</th>
                      <th scope="col">TAX</th>
                      <th scope="col">TOTAL SALES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">22-05-2012</th>
                        <td>0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>

                    </tr>
                    <tr>
                    <th scope="row">23-05-2012</th>
                        <td>0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                    </tr>

                    <tr>
                    <th scope="row">24-05-2012</th>
                        <td>0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                    </tr>

                    <tr>
                    <th scope="row">25-05-2012</th>
                        <td>0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                    </tr>

                    <tr>
                    <th scope="row">26-05-2012</th>
                        <td>0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                    </tr>

                    <tr>
                    <th scope="row">27-05-2012</th>
                        <td>0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                    </tr>

                    <tr>
                    <th scope="row">28-05-2012</th>
                        <td>0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                        <td>INR 0</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
  </div>



</div>
@endsection