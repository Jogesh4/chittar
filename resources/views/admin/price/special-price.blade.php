@extends('admin.layouts.dashboard')
@section('title', 'All Users')
@section('content')

<div class="row">
<!------------------------- left section  ---------------------------->
<div class="col-lg-7 col-sm-12  ">
    <div class="row p-1"> 
        <div class="card">
            <p class="text-attive">
                <span class="text-acttive m-2"> All </span> 
                <span class="text-attive m-2"> Active</span>
                <span class="text-attive m-2">Scheduled</span>
                <span class="text-attive m-2"> Expired</span>                
            </p>
        </div>
    </div>
        
    <div class="row mt-2 p-1">           
        <input type="text" placeholder="Search" id="generalSearch" class="form-control p-2">               
    </div>

    <div class="row mt-2  bg-white">           
        <div class="">   
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="5%">Sno.</th>
                        <th scope="col" width="40%">Name</th>
                        <th scope="col" width="10%">Publish</th>
                        <th scope="col" width="30%">Date/Time</th>
                        <th scope="col" width="15%"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd">
                        <td scope="row" class="sorting_1">1</td>
                        <td>BRIDAL JUTTI </td>
                        <td> <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">                                   
                        </div></td> 
                        <td>27-08-2020 - 15-07-2021 (05:30 AM - 05:30 AM)</td>                                        
                        <td>
                            <div class="actions">
                            <a href="#" title="Delete"><i class="fas faslli fa-trash-alt p-1"></i></a>                                              
                                <span> <a href="#" title="Edit"><i class="fas faslli fa-pen p-1"></i></a> </span>
                            </div>
                        </td>
                    </tr>

                    <tr class="odd">
                        <td scope="row" class="sorting_1">2</td>
                        <td>CHAPPAL  </td>
                        <td> <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">                                   
                        </div></td> 
                        <td>27-08-2020 - 15-07-2021 (05:30 AM - 05:30 AM)</td>                                        
                        <td>
                            <div class="actions">
                                <a href="#" title="Delete"><i class="fas faslli fa-trash-alt p-1"></i></a>                                              
                                <span> <a href="#" title="Edit"><i class="fas faslli fa-pen p-1"></i></a> </span>
                            </div>
                        </td>
                    </tr>

                    <tr class="odd">
                        <td scope="row" class="sorting_1">3</td>
                        <td>BRIDAL JUTTI</td>
                        <td> <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">                                   
                        </div></td> 
                        <td>27-08-2020 - 15-07-2021 (05:30 AM - 05:30 AM)</td>                                        
                        <td>
                            <div class="actions">
                                <a href="#" title="Delete"><i class="fas faslli fa-trash-alt p-1"></i></a>                                              
                                <span> <a href="#" title="Edit"><i class="fas faslli fa-pen p-1"></i></a> </span>
                            </div>
                        </td>
                    </tr>

                    <tr class="odd">
                        <td scope="row" class="sorting_1">4</td>
                        <td>BRIDAL JUTTI </td>
                        <td> <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">                                   
                        </div></td> 
                        <td>27-08-2020 - 15-07-2021 (05:30 AM - 05:30 AM)</td>                                        
                        <td>
                            <div class="actions">
                                <a href="#" title="Delete"><i class="fas faslli fa-trash-alt p-1"></i></a>                                              
                                <span> <a href="#" title="Edit"><i class="fas faslli fa-pen p-1"></i></a> </span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>  
        </div>      
    </div>
       
    
</div>
<!------------------------- left section end  ---------------------------->
<!------------------------- Right section  ---------------------------->
<div class="col-lg-5 col-sm-12 ">
    <div class="row p-2 bg-white ">

    <div class="col-md-12 col-lg-12 form-outline p-2">
         <label>Name<span style="color:red;">*</span></label>
        <input type="text" name="product_title" id="" placeholder="Name" class="form-control2 p-2" value="">
    </div>

    <div class="col-sm-12 col-md-12 col-lg-6 p-2">
        <label>Product Type<span style="color:red;">*</span></label>
        <select class="selectpicker form-control1" id="product_type" name="product_type" value="" required="">
            <option value="" disabled="" hidden="" selected="">Select</option>
            <option value="physical">Flat</option>
            <option value="digital">Percentage</option>                                      
        </select>
    </div>

    <div class="col-md-12 col-lg-6 form-outline p-2">
         <label>Amount<span style="color:red;">*</span></label>
        <input type="text" name="product_title" id="" placeholder="Amount" class="form-control2 p-2" value="">
    </div>



    <div class="col-md-12 col-lg-6 form-outline p-2">
         <label>Start Date<span style="color:red;">*</span></label>
         <input type="date" class="form-control" data-date-end-date="0d">
    </div>
    <div class="col-md-12 col-lg-6 form-outline p-2">
         <label>End Date<span style="color:red;">*</span></label>
         <input type="date" class="form-control" data-date-end-date="0d">
    </div>



    <div class="col-sm-12 col-md-12 col-lg-6 p-2">
        <label>Include<span style="color:red;">*</span></label>
        <select class="selectpicker form-control1" id="product_type" name="product_type" value="" required="">
            <option value="" disabled="" hidden="" selected="">Select</option>
            <option value="physical">Flat</option>
            <option value="digital">Percentage</option>                                      
        </select>
    </div>



    <div class="col-sm-12 col-md-12 col-lg-6 p-2">
        <label>Link Categories<span style="color:red;">*</span></label>
        <select class="selectpicker form-control1" id="product_type" name="product_type" value="" required="">
            <option value="" disabled="" hidden="" selected="">Select</option>
            <option value="physical">Flat</option>
            <option value="digital">Percentage</option>                                      
        </select>
    </div>



    <div class="col-sm-12 col-md-12 col-lg-6 p-2">
        <label>Exclude Products<span style="color:red;">*</span></label>
        <select class="selectpicker form-control1" id="product_type" name="product_type" value="" required="">
            <option value="" disabled="" hidden="" selected="">Select</option>
            <option value="physical">Flat</option>
            <option value="digital">Percentage</option>                                      
        </select>
    </div>



    </div>


    <div class="row mt-5">
            <div class="d-flex justify-content-end">
                <a href="#" class="btn-blu-dis " data-bs-toggle="modal" data-bs-target="">DISACRD</a>
                <span class="ml-3" id="general_next"> <a href="#" class="btn-blu-login">UPDATE </a></span>
            </div>
        </div>

</div>
<!------------------------- Right section end ---------------------------->
</div>



@endsection