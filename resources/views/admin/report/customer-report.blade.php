@extends('admin.layouts.dashboard')
@section('title', 'All Users')
@section('content')
<div class="row">
<div class="col-lg-3 col-md-12 col-sm-12">

  <div class="row p-4 "> 
  <div class="col-12 bg-white shadow p-3 m-2 pink-color border  fw-bold text-dark"><a href="#"> Customer over time  <i class="fas pink-color fw-bolder fa-arrow-right"></i></a></div> 
   <div class="col-12 bg-white shadow p-3 m-2 pink-color border  fw-bold text-dark"><a href="#"> First time vs return customer <i class="fas pink-color fa-long-arrow-alt-right"></i></a></div> 
    <div class="col-12 bg-white shadow p-3 m-2 pink-color border  fw-bold text-dark"><a href="#">  Location customer <i class="fas pink-color fa-long-arrow-alt-right"></i></a></div> 
     <div class="col-12 bg-white shadow p-3 m-2 pink-color border  fw-bold text-dark"><a href="#">One time customer <i class="fas pink-color fa-long-arrow-alt-right"></i></a></div>  
     <div class="col-12 bg-white shadow p-3 m-2 pink-color border  fw-bold text-dark"><a href="#">  Returning Customer <i class="fas pink-color fa-long-arrow-alt-right"></i></a></div>
     
  </div> 
  </div>   
  <div class="col-9 bg-white p-3 shadow   ">

  <div class=" ">
      <div class="table-responsive">
          <h3 class="">CUSTOMER REPORT</h3>
          <table class="table ">
              <thead class="pink-color fw-bold">
                  <tr>
                      <th scope="col ">MONTH</th>
                      <th scope="col">FIRST TIME</th>
                      <th scope="col">	RETURNING</th>                      
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Summary</th>
                        <td>0</td>
                        <td>0</td>                        

                    </tr>
                    <tr>
                        <th scope="row">May 2021</th>
                        <td>0</td>
                        <td>0</td>                        

                    </tr>

                    <tr>
                        <th scope="row">Jun 2021</th>
                        <td>0</td>
                        <td>0</td>                        

                    </tr>

                    <tr>
                        <th scope="row">Jul 2021</th>
                        <td>0</td>
                        <td>0</td>                        

                    </tr>
                    <tr>
                        <th scope="row">Aug 20211</th>
                        <td>0</td>
                        <td>0</td>                        

                    </tr>

                    <tr>
                        <th scope="row">Sep 2021</th>
                        <td>0</td>
                        <td>0</td>                        

                    </tr>

                    <tr>
                        <th scope="row">Oct 2021</th>
                        <td>0</td>
                        <td>0</td>                        

                    </tr>

                    <tr>
                        <th scope="row">Nov 2021</th>
                        <td>0</td>
                        <td>0</td>                        

                    </tr>

                    <tr>
                        <th scope="row">Dec 2021</th>
                        <td>0</td>
                        <td>0</td>                        

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
  </div>



</div>




@endsection