@extends('admin.layouts.dashboard')

@php
  $title = "Add Item";
  $button_text = "Add Item";
  if($item->exists) {
    $title = "Edit Item";
    $button_text = "Update Item";
  }
@endphp

@section('title', $title)


@section('content')

<div class="container-fluid">         
                    
<div class="row">
 
    <div class="col-lg-2 col-md-4 p-2" id="general_click">
    
        <h5 class="pinkit"> <i class="fas fa-qrcode"></i> General Info.</h5>
        <p>Setup Basic Product Details</p>
    </div>

    <div class="col-lg-2 col-md-4 p-2" id="inventory_click">
    
        <h5> <i class="fas fa-qrcode"></i> Inventory  Details</h5>
        <p>Stock & Pricing Options</p>
    </div>


    <div class="col-lg-2 col-md-4 p-2" id="variant_click">
    
        <h5> <i class="fas fa-qrcode"></i> Options & Variants</h5>
        <p>Add Option details</p>
    </div>


    <div class="col-lg-2 col-md-4 p-2" id="attribute_click">
    
        <h5> <i class="fas fa-qrcode"></i> Product Attribute</h5>
        <p>Product Specifications</p>
    </div>

    <div class="col-lg-3 col-md-4 p-2" id="media_click">
    
        <h5> <i class="fas fa-qrcode"></i> Product Media</h5>
        <p>Add Option Based Product Media</p>
    </div>

</div>
<div class="" id="general_div">

<div class="row">

    <div class="col-sm-12 col-md-12 col-lg-3 p-2">
         <label>Product Type<span style="color:red;">*</span></label>
        <select class="selectpicker form-control1" id="product_type" name="product_type" required="">
            <option value="" disabled="" selected="" hidden="">Product Type</option>
            <option value="physical">Physical</option>
            <option value="digital">Digital</option>                                      
        </select>

    </div> 

       <div class="col-md-12 col-lg-3 form-outline p-2">
         <label>Product Title<span style="color:red;">*</span></label>
        <input type="text" name="product_title" id="" placeholder="Product title" class="form-control2 ">
    </div>

    <div class="col-sm-12 col-md-12 col-lg-3 p-2">

         <label>Brand</label>
        <select class="selectpicker form-control1" id="brand" name="brand" required="">
            <option value="" disabled="" selected="" hidden="">Brand</option>
            <option value="1">ABCDEF</option>
            <option value="2">GHIJKL</option>                                      
        </select>

    </div>

    <div class="col-sm-12 col-md-12 col-lg-3 p-2">

         <label>Category<span style="color:red;">*</span></label>
        <select class="selectpicker form-control1" id="category" name="category" required="">
            <option value="" disabled="" selected="" hidden="">Category</option>
            <option value="1">ABCDEF</option>
            <option value="2">GHIJKL</option>                                      
        </select>
  
    </div>
    
    

    <div class="col-md-12 col-lg-3 form-outline p-2">
      <label>Model No.</label>
        <input type="text" name="model" id="model" placeholder="Model No." class="form-control2">
    </div>

    <div class="col-sm-12 col-md-12 col-lg-3 p-2">

         <label>Tax Category<span style="color:red;">*</span></label>
        <select class="selectpicker form-control1" id="tax_category" name="tax_category" required="">
            <option value="" disabled="" selected="" hidden="">Tax Category</option>
            <option value="1">ABCDEF</option>
            <option value="2">GHIJKL</option>                                      
        </select>
  
    </div>

    

    <div class="col-sm-12 col-md-12 col-lg-3 p-2">

         <label>Product Condition<span style="color:red;">*</span></label>
        <select class="selectpicker form-control1" id="product_condition" name="product_condition" required="">
            <option value="" disabled="" selected="" hidden="">Product Condition </option>
            <option value="1">ABCDEF</option>
            <option value="2">GHIJKL</option>                                      
        </select>

    </div>

    <div class="col-md-12 col-lg-3 form-outline p-2">
         <label>Warranty(Days)<span style="color:red;">*</span></label>
        <input type="text" name="warranty" id="warranty" placeholder="Warranty" class="form-control2 ">
    </div>

    <div class="col-md-12 col-lg-3 form-outline p-2">
         <label>Return(Days)<span style="color:red;">*</span></label>
        <input type="text" name="return" id="return" placeholder="Return (Days)" class="form-control2 ">
    </div>

    </div>
        <div class="row mt-5">
            <div class="d-flex justify-content-end">
                <a href="#" class="btn-blu-login " data-bs-toggle="modal" data-bs-target="">DISACRD</a><span class="ml-3"> <a href="#" class="btn-blu-login" data-bs-toggle="modal" data-bs-target="">NEXT <i class="fas text-white fa-arrow-right"></i> </a></span>
            </div>
        </div>

    </div>
<!-- --------------------------------Section 2--------------------------- -->
  <div class="p-2 bg-white d-none" id="inventory_div">
        <div class="row ">	
            
            <div class="col-md-12 col-lg-10">
              <p class="ptext">  Do you want to track inventory for this product?</p>
            </div>

            <div class="col-md-12 col-lg-2 form-outline">
                <span class="ml-3 mr-4">
                    <input class="form-check-input" type="radio" name="Inventory" value="yes">
                    <label class="form-check-label ptext" for="flexRadioDefault1">
                    Yes
                    </label>
                    </span>
                    <span class="ml-3" >
                    <input class="form-check-input" type="radio" name="Inventory" value="no">
                    <label class="form-check-label ptext" for="flexRadioDefault1">
                    No
                    </label>   
                </span>           
            </div>
        </div>



        <div class="row ">	
            
            <div class="col-md-12 col-lg-9">
              <p class="ptext">  You want to sell this product as?</p>
            </div>

            <div class="col-md-12 col-lg-3 form-outline">
                <span class="ml-3 mr-4">
                    <input class="form-check-input" type="radio" name="Inventory" value="Shipping">
                    <label class="form-check-label ptext" for="flexRadioDefault1">
                    Shipping
                    </label>
                    </span>
                    <span class="ml-3 mr-4" >
                    <input class="form-check-input" type="radio" name="Inventory" value="pickup">
                    <label class="form-check-label ptext" for="flexRadioDefault1">
                    Pick Up
                    </label>   
                </span>   
                <span class="ml-3" >
                    <input class="form-check-input" type="radio" name="Inventory" value="Both">
                    <label class="form-check-label ptext" for="flexRadioDefault1">
                    Both
                    </label>   
                </span>                   
            </div>
        </div>



        <div class="row ">	
            
            <div class="col-md-12 col-lg-10">
              <p class="ptext">  Continue selling when out of stock</p>
            </div>

            <div class="col-md-12 col-lg-2 form-outline">
                <span class="ml-3 mr-4">
                    <input class="form-check-input" type="radio" name="Inventory" value="yes">
                    <label class="form-check-label ptext" for="flexRadioDefault1">
                    Yes
                    </label>
                    </span>
                    <span class="ml-3" >
                    <input class="form-check-input" type="radio" name="Inventory" value="no">
                    <label class="form-check-label ptext" for="flexRadioDefault1">
                    No
                    </label>   
                </span>           
            </div>
        </div>



        <div class="row ">	
            
            <div class="col-md-12 col-lg-10">
              <p class="ptext">  Availabel for Cash on Delivery</p>
            </div>

            <div class="col-md-12 col-lg-2 form-outline">
                <span class="ml-3 mr-4">
                    <input class="form-check-input" type="radio" name="Inventory" value="yes">
                    <label class="form-check-label ptext" for="flexRadioDefault1">
                    Yes
                    </label>
                    </span>
                    <span class="ml-3" >
                    <input class="form-check-input" type="radio" name="Inventory" value="no">
                    <label class="form-check-label ptext" for="flexRadioDefault1">
                    No
                    </label>   
                </span>           
            </div>
        </div>


        <div class="row ">	
            
            <div class="col-md-12 col-lg-10">
              <p class="ptext">  Availabel for Gift Wrap</p>
            </div>

            <div class="col-md-12 col-lg-2 form-outline">
                <span class="ml-3 mr-4">
                    <input class="form-check-input" type="radio" name="Inventory" value="yes">
                    <label class="form-check-label clabel" for="flexRadioDefault1">
                    Yes
                    </label>
                    </span>
                    <span class="ml-3" >
                    <input class="form-check-input" type="radio" name="Inventory" value="no">
                    <label class="form-check-label ptext" for="flexRadioDefault1">
                    No
                    </label>   
                </span>           
            </div>
        </div>

<div class="row mt-3">
    <div class="col-md-12 col-lg-3 form-outline p-2">
        <input type="number" name="type-product" id="" placeholder="Minimum Purchase Quantity *" class="form-control2 ">
    </div>

    <div class="col-md-12 col-lg-3 form-outline p-2">
        <input type="number" name="type-product" id="" placeholder="Maximum Purchase Quantity *" class="form-control2 ">
    </div>

    <div class="col-md-12 col-lg-3 form-outline p-2">
        <input type="number" name="type-product" id="" placeholder="Stock Alert Quantity *" class="form-control2 ">
    </div>

    <div class="col-md-12 col-lg-3 form-outline p-2">
        <input type="number" name="type-product" id="" placeholder="Cost Price *" class="form-control2 ">
    </div>

</div>
        

<div class="row  mt-5">
    <div class="d-flex justify-content-end">
        <a href="#" class="btn-blu-login " data-bs-toggle="modal" data-bs-target="">DISACRD</a><span class="ml-3 mr-3"> <a href="#" class="btn-blu-login" data-bs-toggle="modal" data-bs-target=""><i class="fas text-white fa-arrow-left"></i> PREVIOUS</a></span>
        <span class="ml-3 mr-3"> <a href="#" class="btn-blu-login" data-bs-toggle="modal" data-bs-target="">NEXT <i class="fas text-white fa-arrow-right"></i> </a></span>
    </div>
</div>



   </div>
<!-- --------------------------------Section 3--------------------------- -->

<div class="bg-white p-2 d-none" id="variant_div">
    <div class="row ">	
            
        <div class="col-md-12 col-lg-10">
          <p class="ptext">  This product has multiple options, like different sizes or colors</p>
        </div>

        <div class="col-md-12 col-lg-2 form-outline">
            <span class="ml-3 mr-4">
                <input class="form-check-input" type="radio" name="Inventory" value="yes">
                <label class="form-check-label ptext" for="flexRadioDefault1">
                Yes
                </label>
                </span>
                <span class="ml-3" >
                <input class="form-check-input" type="radio" name="Inventory" value="no">
                <label class="form-check-label ptext" for="flexRadioDefault1">
                No
                </label>   
            </span>           
        </div>
    </div>

    <div class="row ">	
            
        <div class="col-md-12 col-lg-3">
          <p class="ptext mt-3">Option 1</p>
        </div>


        <div class="col-sm-12 col-md-12 col-lg-3 p-2">

            <select class="selectpicker form-control1" id="type" name="type" required="">
                <option value="" disabled="" >Select Option</option>
                <option value="1" selected="" >Color</option>
                <option value="2">Size</option>
                <option value="3">Carat</option>                                      
                <option value="4">Clarity</option>                                      
                <option value="5">Strap</option>                                      
            </select>
    
        </div>
        <div class="col-md-12 col-lg-4 form-outline p-2">
            <input type="number" name="type-product" id="" placeholder="Add Tag *" class="form-control2 ">
        </div>

        <div class="col-md-12 col-lg-2 form-outline p-2">
            
            
            <div class="actions">
                <a href="#" title="Delete"><i class="fas faslls fa-trash-alt ml-4"></i></a>
                <span class="ml-4"> <a href="#" title="Add"><i class="fas faslls fa-plus"></i></a> </span>
                </a>
            </div>

        </div>
    </div>


    <div class="row p-5 ">
        <div class="bor-uplo p-2">
            
            <table class=" table table-justified">
                <thead >
                    <tr>
                        <th class="fw-bold text-dark">Variant</th>
                        <th class="fw-bold text-dark">Price(excl.tax)</th>
                         <th class="fw-bold text-dark">Quantity</th> 
                         <th class="fw-bold text-dark">SKY</th> 
                        
                    </tr>
                 </thead>
                
                
                
                <tbody>
                <tr>
                <td scope="row">6546</td>
                 <td>11/04/2022</td>
                 <td>Addan</td> 
                 <td><i class="fas fa-rupee-sign"></i> 2565</td> 
                 </tr>
                 
                
                </tbody>
            </table>





        </div>
    </div>

    <div class="row ">	
            
        <div class="col-md-12 col-lg-8">
          <p class="ptext">  Select Default Product Variant  </p>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-3 p-2">

            <select class="selectpicker form-control1" id="type" name="type" required="">
                <option value="" disabled="" >Select Option</option>
                                       
            </select>
    
        </div>
    </div>


    <div class="row  mt-5">
        <div class="d-flex justify-content-end">
            <a href="#" class="btn-blu-login " data-bs-toggle="modal" data-bs-target="">DISACRD</a><span class="ml-3 mr-3"> <a href="#" class="btn-blu-login" data-bs-toggle="modal" data-bs-target=""><i class="fas text-white fa-arrow-left"></i> PREVIOUS</a></span>
            <span class="ml-3 mr-3"> <a href="#" class="btn-blu-login" data-bs-toggle="modal" data-bs-target="">NEXT <i class="fas text-white fa-arrow-right"></i> </a></span>
        </div>
    </div>


</div>
<!-- ---------------------------------------------section4-------------------------- -->
<div class="bg-white p-2 d-none" id="attribute_div">
    <div class="row ">	
        <h5 >Attributes</h5>
    </div>
    <div class="row ">	
            
        <div class="col-md-12 col-lg-2">
          <p class="ptext mt-3">  Country of origin *</p>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-4 p-2">

            <select class="selectpicker form-control1" id="type" name="type" required="">
                <option value="" disabled="" >Select Option</option>
                                       
            </select>
    
        </div>

        <div class="col-md-12 col-lg-1">
            <p class="ptext mt-3">  Weight *</p>
        </div>
  
        <div class="col-sm-12 col-md-12 col-lg-2 p-2">  
            <select class="selectpicker form-control1" id="type" name="type" required="">
                <option value="" disabled="" >Select Weight</option>
                <option value="1" selected="" >gm</option>
                <option value="2">Kg</option>
            </select>      
        </div>

        <div class="col-sm-12 col-md-12 col-lg-3 p-2">  
            <input type="number" name="type-product" id="" placeholder="Weight " class="form-control2 ">    
        </div>

    </div>
    <div class="row p-5">
        <div class="bg-light p-4">
            <div class="row ">
                <div class="col-lg-6 col-md-12">
                    <label class="txt-styel">ISBN </label>
                    <input type="text" name="type-product" id="" placeholder="ISBN " class="form-control2 "> 
                </div>
                <div class="col-lg-6 col-md-12">
                    <label class="txt-styel">HSN </label>
                    <input type="text" name="type-product" id="" placeholder="HSN " class="form-control2 "> 
                </div>
                <div class="col-lg-6 col-md-12">
                    <label class="txt-styel">SAC </label>
                    <input type="text" name="type-product" id="" placeholder="SAC " class="form-control2 "> 
                </div>
                <div class="col-lg-6 col-md-12">
                    <label class="txt-styel">UPC </label>
                    <input type="text" name="type-product" id="" placeholder="UPC " class="form-control2 "> 
                </div>
                <div class="col-lg-6 col-md-12">
                    <label class="txt-styel">File: </label>
                    <input type="text" name="type-product" id="" placeholder="File: " class="form-control2 "> 
                </div>


                <div class="col-md-12 col-lg-6 form-outline  position-relative">
                    <label class="txt-styel">UPLOAD</label>
                    <input type="file" id="bussiness_licence" name="bussiness_licence" class="file-box">
					         
                </div>
            </div>
        </div>
    </div>




    <div class="row  mt-5">
        <div class="d-flex justify-content-end">
            <a href="#" class="btn-blu-login " data-bs-toggle="modal" data-bs-target="">DISACRD</a><span class="ml-3 mr-3"> <a href="#" class="btn-blu-login" data-bs-toggle="modal" data-bs-target=""><i class="fas text-white fa-arrow-left"></i> PREVIOUS</a></span>
            <span class="ml-3 mr-3"> <a href="#" class="btn-blu-login" data-bs-toggle="modal" data-bs-target="">NEXT <i class="fas text-white fa-arrow-right"></i> </a></span>
        </div>
    </div>

</div>

<!-- ---------------------------------------------section5-------------------------- -->

<div class="d-none" id="media_div">



</div>


</div>

@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>

 $( document ).ready(function() {

     $("#general_click").click(function(){

         document.getElementById('general_div').classList.remove('d-none');
         document.getElementById('inventory_div').classList.add('d-none');
         document.getElementById('variant_div').classList.add('d-none');
         document.getElementById('attribute_div').classList.add('d-none');
         document.getElementById('media_div').classList.add('d-none');

    });

    $("#inventory_click").click(function(){

         document.getElementById('general_div').classList.add('d-none');
         document.getElementById('inventory_div').classList.remove('d-none');
         document.getElementById('variant_div').classList.add('d-none');
         document.getElementById('attribute_div').classList.add('d-none');
         document.getElementById('media_div').classList.add('d-none');

    });

    $("#variant_click").click(function(){

         document.getElementById('general_div').classList.add('d-none');
         document.getElementById('inventory_div').classList.add('d-none');
         document.getElementById('variant_div').classList.remove('d-none');
         document.getElementById('attribute_div').classList.add('d-none');
         document.getElementById('media_div').classList.add('d-none');

    });

    $("#attribute_click").click(function(){

         document.getElementById('general_div').classList.add('d-none');
         document.getElementById('inventory_div').classList.add('d-none');
         document.getElementById('variant_div').classList.add('d-none');
         document.getElementById('attribute_div').classList.remove('d-none');
         document.getElementById('media_div').classList.add('d-none');

    });

    $("#media_click").click(function(){

         document.getElementById('general_div').classList.add('d-none');
         document.getElementById('inventory_div').classList.add('d-none');
         document.getElementById('variant_div').classList.add('d-none');
         document.getElementById('attribute_div').classList.add('d-none');
         document.getElementById('media_div').classList.remove('d-none');

    });


});

</script>