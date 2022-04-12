@extends('admin.layouts.dashboard')

@php
  $title = "Add Item";
  $button_text = "Submit";
  if(!empty($item)) {
    $title = "Edit Item";
    $button_text = "Update";
  }
@endphp

@section('title', $title)


@section('content')

 @if(!empty($item))
    <form method="POST" action="{{ route('admin.items.update', $item) }}" enctype="multipart/form-data" onsubmit="loader(true)">
@method('put')
@else
  <form method="POST" action="{{ route('admin.items.store') }}" enctype="multipart/form-data" onsubmit="loader(true)">
@endif
    @csrf

<div class="container-fluid">         
                    
<div class="row">
 
    <div class="col-lg-2 col-md-4 p-3 bg-shad m-2 bg-active" id="general_click">
    
        <h5 class="pinkit">General Info.</h5>
        <p class="psmall">Setup Basic Product Details</p>
    </div>

    <div class="col-lg-2 col-md-4 p-3 bg-shad m-2" id="inventory_click">
    
        <h5>Inventory  Details</h5>
        <p class="psmall">Stock & Pricing Options</p>
    </div>


    <div class="col-lg-2 col-md-4 p-3 bg-shad m-2" id="variant_click">
    
        <h5>Options & Variants</h5>
        <p class="psmall">Add Option details</p>
    </div>


    <div class="col-lg-2 col-md-4 p-3 bg-shad m-2" id="attribute_click">
    
        <h5>Product Attribute</h5>
        <p class="psmall">Product Specifications</p>
    </div>

    <div class="col-lg-2 col-md-4 p-3 bg-shad m-2" id="media_click">
    
        <h5>Product Media</h5>
        <p class="psmall">Add Option Based Product Media</p>
    </div>

</div>
<div class="mt-5 bg-white p-3" id="general_div">

<div class="row">

    <div class="col-sm-12 col-md-12 col-lg-3 p-2">
         <label>Product Type<span style="color:red;">*</span></label>
        <select class="selectpicker form-control1" id="product_type" name="product_type" value="{{ !empty($item->type) ? $item->type : "" }}" required="">
            <option value="" disabled="" hidden="" selected>Product Type</option>
            <option value="physical" @if(!empty($item->type)) @if($item->type == 'physical') selected @endif  @endif>Physical</option>
            <option value="digital" @if(!empty($item->type)) @if($item->type == 'digital') selected @endif  @endif>Digital</option>                                      
        </select>

    </div> 

       <div class="col-md-12 col-lg-3 form-outline p-2">
         <label>Product Title<span style="color:red;">*</span></label>
        <input type="text" name="product_title" id="" placeholder="Product title" class="form-control2" value="{{ !empty($item->name) ? $item->name : "" }}">
    </div>

    <div class="col-sm-12 col-md-12 col-lg-3 p-2">

         <label>Brand</label>
        <select class="selectpicker form-control1" id="brand" name="brand" value="{{ !empty($item->brand_id) ? $item->brand_id : "" }}" required="">
            <option value="" disabled="" hidden="" selected>Brand</option>
            @foreach($brands as $brand)
               <option value="{{ $brand->id }}" @if(!empty($item->brand_id)) @if($item->brand_id == $brand->id) selected @endif  @endif>{{ $brand->name }}</option>
            @endforeach                                      
        </select>

    </div>

    <div class="col-sm-12 col-md-12 col-lg-3 p-2">

         <label>Category<span style="color:red;">*</span></label>
        <select class="selectpicker form-control1" id="category" name="category" value="{{ !empty($item->category_id) ? $item->category_id : "" }}" required="">
            <option value="" disabled="" hidden="" selected>Category</option>
            @foreach($categories as $category)
               <option value="{{ $category->id }}" @if(!empty($item->category_id)) @if($item->category_id == $category->id) selected @endif  @endif>{{ $category->name }}</option>
            @endforeach
                                                  
        </select>
  
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 p-2">

        <label>Description</label>
         <textarea id="description" name="description" class="form-control2" value="">{{ !empty($item->description) ? $item->description : "" }}</textarea>

    </div>   
    
    

    <div class="col-md-12 col-lg-3 form-outline p-2">
      <label>Model No.</label>
        <input type="text" name="model" id="model" placeholder="Model No." class="form-control2" value="{{ !empty($item->model) ? $item->model : "" }}">
    </div>

    <div class="col-sm-12 col-md-12 col-lg-3 p-2">

         <label>Tax Category<span style="color:red;">*</span></label>
        <select class="selectpicker form-control1" id="tax_category" name="tax_category" value="{{ !empty($item->tax_category) ? $item->tax_category : "" }}" required="">
            <option value="" disabled="" hidden="" selected>Tax Category</option>
            <option value="5" >5</option>
            <option value="7" >7</option>
            <option value="10" >10</option>
        </select>
  
    </div>

    

    <div class="col-sm-12 col-md-12 col-lg-3 p-2">

         <label>Product Condition<span style="color:red;">*</span></label>
        <select class="selectpicker form-control1" id="product_condition" name="product_condition" value="{{ !empty($item->condition) ? $item->condition : "" }}" required="">
            <option value="" disabled="" hidden="" selected>Product Condition </option>
            <option value="old" @if(!empty($item->condition)) @if($item->condition == 'old') selected @endif  @endif>Old</option>
            <option value="new" @if(!empty($item->condition)) @if($item->condition == 'new') selected @endif  @endif>New</option>
            <option value="refurbished" @if(!empty($item->condition)) @if($item->condition == 'refurbished') selected @endif  @endif>Refurbished</option>                                      
        </select>

    </div>

    <div class="col-md-12 col-lg-3 form-outline p-2">
         <label>Warranty(Days)<span style="color:red;">*</span></label>
        <input type="number" name="warranty" id="warranty" placeholder="Warranty" class="form-control2 " value="{{ !empty($item->warranty) ? $item->warranty : "" }}">
    </div>

    <div class="col-md-12 col-lg-3 form-outline p-2">
         <label>Return(Days)<span style="color:red;">*</span></label>
        <input type="number" name="return" id="return" placeholder="Return (Days)" class="form-control2" value="{{ !empty($item->return) ? $item->return : "" }}">
    </div>

    </div>
        <div class="row mt-5">
            <div class="d-flex justify-content-end">
                <a href="/admin/items/create" class="btn-blu-login " data-bs-toggle="modal" data-bs-target="">DISACRD</a>
                <span class="ml-3" id="general_next"> <a href="#" class="btn-blu-login">NEXT <i class="fas text-white fa-arrow-right"></i> </a></span>
            </div>
        </div>

    </div>
<!-- --------------------------------Section 2--------------------------- -->
  <div class="p-3 bg-white d-none mt-5" id="inventory_div">
        <div class="row ">	
            
            <div class="col-md-12 col-lg-10">
              <p class="ptext">  Do you want to track inventory for this product?</p>
            </div>

            <div class="col-md-12 col-lg-2 form-outline">
                <span class="ml-3 mr-4">
                    <input class="form-check-input" type="radio" name="track_inventory" value="1" checked>
                    <label class="form-check-label ptext" for="flexRadioDefault1">
                    Yes
                    </label>
                    </span>
                    <span class="ml-3" >
                    <input class="form-check-input" type="radio" name="track_inventory" value="0">
                    <label class="form-check-label ptext" for="flexRadioDefault1">
                    No
                    </label>   
                </span>           
            </div>
        </div>



        <div class="row ">	
            
            <div class="col-md-12 col-lg-8">
              <p class="ptext">  You want to sell this product as?</p>
            </div>

            <div class="col-md-12 col-lg-4 form-outline">
                <span class="ml-3 mr-4">
                    <input class="form-check-input" type="radio" name="want_sell" value="shipping">
                    <label class="form-check-label ptext" for="flexRadioDefault1">
                    Shipping
                    </label>
                    </span>
                    <span class="ml-3 mr-4" >
                    <input class="form-check-input" type="radio" name="want_sell" value="pickup">
                    <label class="form-check-label ptext" for="flexRadioDefault1">
                    Pick Up
                    </label>   
                </span>   
                <span class="ml-3" >
                    <input class="form-check-input" type="radio" name="want_sell" value="both" checked>
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
                    <input class="form-check-input" type="radio" name="continue_selling" value="1" checked>
                    <label class="form-check-label ptext" for="flexRadioDefault1">
                    Yes
                    </label>
                    </span>
                    <span class="ml-3" >
                    <input class="form-check-input" type="radio" name="continue_selling" value="0">
                    <label class="form-check-label ptext" for="flexRadioDefault1">
                    No
                    </label>   
                </span>           
            </div>
        </div>



        <div class="row ">	
            
            <div class="col-md-12 col-lg-10">
              <p class="ptext"> Available for Cash on Delivery</p>
            </div>

            <div class="col-md-12 col-lg-2 form-outline">
                <span class="ml-3 mr-4">
                    <input class="form-check-input" type="radio" name="cash_on_delivery" value="1" checked>
                    <label class="form-check-label ptext" for="flexRadioDefault1">
                    Yes
                    </label>
                    </span>
                    <span class="ml-3" >
                    <input class="form-check-input" type="radio" name="cash_on_delivery" value="0">
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
                    <input class="form-check-input" type="radio" name="gift_wrap" value="1" checked>
                    <label class="form-check-label clabel" for="flexRadioDefault1">
                    Yes
                    </label>
                    </span>
                    <span class="ml-3" >
                    <input class="form-check-input" type="radio" name="gift_wrap" value="0">
                    <label class="form-check-label ptext" for="flexRadioDefault1">
                    No
                    </label>   
                </span>           
            </div>
        </div>

<div class="row mt-3">
    <div class="col-md-12 col-lg-4 form-outline p-2">
    <label>Minimum Purchase Quantity<span style="color:red;">*</span></label>
        <input type="number" name="min_purchase" id="" placeholder="Minimum Purchase Quantity *" class="form-control2" value="{{ !empty($item->min_purchase_qty) ? $item->min_purchase_qty : "" }}">
    </div>

    <div class="col-md-12 col-lg-4 form-outline p-2">
    <label>Maximum Purchase Quantity<span style="color:red;">*</span></label>
        <input type="number" name="max_purchase" id="" placeholder="Maximum Purchase Quantity *" class="form-control2" value="{{ !empty($item->max_purchase_qty) ? $item->max_purchase_qty : "" }}">
    </div>

    <div class="col-md-12 col-lg-4 form-outline p-2">
    <label>Stock Alert Quantity<span style="color:red;">*</span></label>
        <input type="number" name="stock_alert" id="" placeholder="Stock Alert Quantity *" class="form-control2" value="{{ !empty($item->stock_alert_qty) ? $item->stock_alert_qty : "" }}">
    </div>

    <div class="col-md-12 col-lg-4 form-outline p-2">
      <label>Cost Price <span style="color:red;">*</span></label>
          <input type="number" name="cost_price" id="" placeholder="Cost Price *" class="form-control2" value="{{ !empty($item->price) ? $item->price : "" }}">
    </div>
    <div class="col-md-12 col-lg-4 form-outline p-2">
      <label>Sale Price <span style="color:red;">*</span></label>
          <input type="number" name="sale_price" id="" placeholder="Sale Price *" class="form-control2" value="{{ !empty($item->sale_price) ? $item->sale_price : "" }}">
    </div>

</div>
        

<div class="row  mt-5">
    <div class="d-flex justify-content-end">
        <a href="/admin/items/create" class="btn-blu-login " data-bs-toggle="modal" data-bs-target="">DISACRD</a>
        <span class="ml-3 mr-3" id="inventory_previous"> <a href="#" class="btn-blu-login"><i class="fas text-white fa-arrow-left"></i> PREVIOUS</a></span>
        <span class="ml-3 mr-3" id="inventory_next"> <a href="#" class="btn-blu-login">NEXT <i class="fas text-white fa-arrow-right"></i> </a></span>
    </div>
</div>



   </div>
<!-- --------------------------------Section 3--------------------------- -->

<div class="bg-white p-3 mt-5 d-none" id="variant_div">
    <div class="row ">	
            
        <div class="col-md-12 col-lg-10">
          <p class="ptext">  This product has multiple options, like different sizes or colors</p>
        </div>

        <div class="col-md-12 col-lg-2 form-outline">
            <span class="ml-3 mr-4">
                <input class="form-check-input" type="radio" name="multiple_options" value="1" checked>
                <label class="form-check-label ptext" for="flexRadioDefault1">
                Yes
                </label>
                </span>
                <span class="ml-3" >
                <input class="form-check-input" type="radio" name="multiple_options" value="0">
                <label class="form-check-label ptext" for="flexRadioDefault1">
                No
                </label>   
            </span>           
        </div>
    </div>

    <div>
              {{-- <div id="more-options">
                <div class="row mb-2">
                  <div class="col-4">
                    <select class="form-control" style="width: 120%;">
                      <option value="size">Size</option>
                      <option value="color">Color</option>
                    </select>
                  </div>
                  <div class="col-6">
                    <input class="form-control tags-input" type="text" />
                  </div>
                  <div class="col-2">
                    <button type="button" class="btn btn-danger btn-sm btn-remove">x</button>
                    <button type="button" class="btn btn-info btn-sm btn-add">+</button>
                  </div>
                </div>
              </div> --}}

              {{-- <div class="row"><div class="col"><button type="button" class="btn btn-info btn-sm btn-add-row">Add Item</button></div></div> --}}
              <table class="table mt-3">
                <thead>
                  <tr>
                    <th>Variant Size</th>
                    <th>Variant Color</th>
                    <th>Price(excl. tax)</th>
                    <th>Quantity</th>
                    <th>SKU</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody id="tbody">
                  @if($variants->count() > 0)
                    @foreach($variants as $variant)
                     <tr>
                      <td class="variant">
                          <input type="text" name="type[]" class="form-control" value="{{ $variant->type }}" placeholder="Enter Size" />
                          </td>
                          <td><input type="text" name="variant[]" class="form-control" value="{{ $variant->variant_name }}" placeholder="Enter Color" /></td>
                          <td><input type="text" name="price[]" class="form-control" value="{{ $variant->price }}" placeholder="Enter price" /></td>
                          <td><input type="text" name="qty[]" class="form-control" value="{{ $variant->qty }}" placeholder="Enter qty" /></td>
                          <td><input type="text" name="sku[]" class="form-control" value="{{ $variant->sku }}" placeholder="Enter sku" /></td>
                          <td>
                          <button type="button" class="btn btn-danger btn-sm btn-remove-row">x</button>
                          </td>
                          <td>
                          <button type="button" class="btn btn-info btn-sm btn-add-row">+</button>
                          </td>
                      </tr>
                    @endforeach

                  @else
                      <tr>
                         <td class="variant">
                            <input type="text" name="type[]" class="form-control" placeholder="Enter Size" />
                        </td>
                        <td><input type="text" name="variant[]" class="form-control" placeholder="Enter Color" /></td>
                        <td><input type="text" name="price[]" class="form-control" placeholder="Enter price" /></td>
                        <td><input type="text" name="qty[]" class="form-control" placeholder="Enter qty" /></td>
                        <td><input type="text" name="sku[]" class="form-control" placeholder="Enter sku" /></td>
                        <td>
                        <button type="button" class="btn btn-danger btn-sm btn-remove-row">x</button>
                        </td>
                        <td>
                        <button type="button" class="btn btn-info btn-sm btn-add-row">+</button>
                        </td>
                        </tr>
                  @endif
                </tbody>
              </table>
            </div>


    {{-- <div class="row p-5 ">
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
    </div> --}}

    {{-- <div class="row mt-3">	
            
        <div class="col-md-12 col-lg-8">
          <p class="ptext">  Select Default Product Variant  </p>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-3 p-2">

            <select class="selectpicker form-control1" id="type" name="type">
                <option value="" disabled="" >Select Option</option>
                                       
            </select>
    
        </div>
    </div> --}}


    <div class="row  mt-5">
        <div class="d-flex justify-content-end">
            <a href="/admin/items/create" class="btn-blu-login " data-bs-toggle="modal" data-bs-target="">DISACRD</a>
            <span class="ml-3 mr-3" id="variant_previous"> <a href="#" class="btn-blu-login"><i class="fas text-white fa-arrow-left"></i> PREVIOUS</a></span>
            <span class="ml-3 mr-3" id="variant_next"> <a href="#" class="btn-blu-login">NEXT <i class="fas text-white fa-arrow-right"></i> </a></span>
        </div>
    </div>


</div>
<!-- ---------------------------------------------section4-------------------------- -->
<div class="bg-white p-3 mt-5 d-none" id="attribute_div">
    <div class="row ">	
        <h5 >Attributes</h5>
    </div>
    <div class="row ">	
            
        <div class="col-md-12 col-lg-4">
          <p class="ptext mt-3">Country of origin<span style="color: red">*</span></p>
        </div>

        <div class="col-md-12 col-lg-8">
          <select class="selectpicker form-control1" id="country" name="country" value="{{ !empty($item->country_of_origin) ? $item->country_of_origin : "" }}" required="">
                <option value="" disabled hidden>Select Option</option>
                <option value="india" >India</option>
            </select>
        </div>


        <div class="col-md-12 col-lg-4">
            <p class="ptext mt-3">Weight<span style="color: red">*</span></p>
        </div>
  
        <div class="col-sm-12 col-md-12 col-lg-4 p-2">  
            <select class="selectpicker form-control1" id="weight_type" name="weight_type" value="{{ !empty($item->weight_unit) ? $item->weight_unit : "" }}" required="">
                <option value="" disabled="" hidden>Select Weight</option>
                <option value="1">gm</option>
                <option value="2">Kg</option>
            </select>      
        </div>

        <div class="col-sm-12 col-md-12 col-lg-4 p-2">  
            <input type="number" name="weight" id="weight" placeholder="Weight " class="form-control2" value="{{ !empty($item->weight) ? $item->weight : "" }}">    
        </div>

    </div>
    <div class="row p-2">
        <div class="bg-light p-2">
            <div class="row ">
                <div class="col-lg-6 col-md-12">
                    <label class="txt-styel">ISBN </label>
                    <input type="text" name="isbn" id="" placeholder="ISBN " class="form-control2" value="{{ !empty($item->isbn) ? $item->isbn : "" }}"> 
                </div>
                <div class="col-lg-6 col-md-12">
                    <label class="txt-styel">HSN </label>
                    <input type="text" name="hsn" id="" placeholder="HSN " class="form-control2" value="{{ !empty($item->hsn) ? $item->hsn : "" }}"> 
                </div>
                <div class="col-lg-6 col-md-12">
                    <label class="txt-styel">SAC </label>
                    <input type="text" name="sac" id="" placeholder="SAC " class="form-control2" value="{{ !empty($item->sac) ? $item->sac : "" }}"> 
                </div>
                <div class="col-lg-6 col-md-12">
                    <label class="txt-styel">UPC </label>
                    <input type="text" name="upc" id="" placeholder="UPC " class="form-control2" value="{{ !empty($item->upc) ? $item->upc : "" }}"> 
                </div>
                <div class="col-lg-6 col-md-12">
                    <label class="txt-styel">File: </label>
                    <input type="text" name="file_size" id="" placeholder="File: " class="form-control2"> 
                </div>


                <div class="col-md-12 col-lg-6 form-outline  position-relative">
                    <label class="txt-styel">UPLOAD</label>
                    <input type="file" id="attribute_image" name="attribute_image" class="file-box">
					         <p>Max file size is 1MB and max number of file is 1.</p>
                </div>
            </div>
        </div>
    </div>




    <div class="row  mt-5">
        <div class="d-flex justify-content-end">
            <a href="/admin/items/create" class="btn-blu-login " data-bs-toggle="modal" data-bs-target="">DISACRD</a>
            <span class="ml-3 mr-3" id="attribute_previous"> <a href="#" class="btn-blu-login" ><i class="fas text-white fa-arrow-left"></i> PREVIOUS</a></span>
            <span class="ml-3 mr-3" id="attribute_next"> <a href="#" class="btn-blu-login">NEXT <i class="fas text-white fa-arrow-right"></i> </a></span>
        </div>
    </div>

</div>

<!-- ---------------------------------------------section5-------------------------- -->

<div class="d-none bg-white mt-5 p-3 row" id="media_div">
<div class="col-lg-3 col-md-12 col-sm-12">
<p class="ptext h5"> Images</p>
</div>
<div class="col-lg-9">
<input type="file" name="product_image[]" id="imgInp" accept="image/*" class="file-box" onchange="image_upload()" multiple/>
<p class="text-secondary mt-2"><b> Image Disclaimer: </b>File type must be a .jpg, .gif or .png smaller than 2MB and at least 800x1067 in 3:4 aspect ratio</p>
</div>

@if(!empty($item))
            <div class="row">
                 <div class="col-md-12 col-lg-12 form-outline mb-2">
                @if(!empty($item->image))
                     <div class="position-relative d-inline p-1">
                      <img class="" id="blah0" src="{{ !empty($item->image) ? asset('storage/'.$item->image) : '#' }}" alt="your image" width="20%" height="100%"/><i id="icon0" class="far fa-times-circle cross-icon "></i>
                    </div>
                @else
                      <div class="position-relative d-inline p-1">
                      <img class="d-none" id="blah0" src="#" alt="your image" width="20%" height="100%"/><i id="icon0" class="far fa-times-circle cross-icon d-none"></i>
                    </div>
                @endif
                @if(!empty($item->image1))
                     <div class="position-relative d-inline p-1">
                       <img class="" id="blah1" src="{{ !empty($item->image1) ? asset('storage/'.$item->image1) : '#' }}" alt="your image" width="20%" height="100%"/><i id="icon1" class="far fa-times-circle cross-icon "></i>
                     </div>
                @else
                      <div class="position-relative d-inline p-1">
                       <img class="d-none" id="blah1" src="#" alt="your image" width="20%" height="100%"/><i id="icon1" class="far fa-times-circle cross-icon d-none"></i>
                     </div>
                @endif
                @if(!empty($item->image2))
                     <div class="position-relative d-inline p-1">
                       <img class="" id="blah2" src="{{ !empty($item->image2) ? asset('storage/'.$item->image2) : '#' }}" alt="your image" width="20%" height="100%"/><i id="icon2" class="far fa-times-circle cross-icon "></i>
                      </div>
                @else
                      <div class="position-relative d-inline p-1">
                       <img class="d-none" id="blah2" src="#" alt="your image" width="20%" height="100%"/><i id="icon2" class="far fa-times-circle cross-icon d-none"></i>
                      </div>
                @endif

                @if(!empty($item->image3))
                      <div class="position-relative d-inline p-1">
                       <img class="" id="blah3" src="{{ !empty($item->image3) ? asset('storage/'.$item->image3) : '#' }}" alt="your image" width="20%" height="100%"/><i id="icon3" class="far fa-times-circle cross-icon "></i>
                      </div>
                  </div>
                @else
                      <div class="position-relative d-inline p-1">
                       <img class="d-none" id="blah3" src="#" alt="your image" width="20%" height="100%"/><i id="icon3" class="far fa-times-circle cross-icon d-none"></i>
                      </div>
                @endif
            </div>
@else

         <div class="row">
                 <div class="col-md-12 col-lg-12 form-outline mb-2">
                     <div class="position-relative d-inline p-1">
                      <img class="d-none" id="blah0" src="#" alt="your image" width="20%" height="100%"/><i id="icon0" class="far fa-times-circle cross-icon d-none"></i>
                    </div>
                     <div class="position-relative d-inline p-1">
                       <img class="d-none" id="blah1" src="#" alt="your image" width="20%" height="100%"/><i id="icon1" class="far fa-times-circle cross-icon d-none"></i>
                     </div>
                     <div class="position-relative d-inline p-1">
                       <img class="d-none" id="blah2" src="#" alt="your image" width="20%" height="100%"/><i id="icon2" class="far fa-times-circle cross-icon d-none"></i>
                      </div>
                      <div class="position-relative d-inline p-1">
                       <img class="d-none" id="blah3" src="#" alt="your image" width="20%" height="100%"/><i id="icon3" class="far fa-times-circle cross-icon d-none"></i>
                      </div>
                  </div>
            </div>

@endif

<div class="col-md-12 col-lg-3 form-outline p-2">
<p class="ptext h5"> Video</p>
</div>

<div class="col-md-12 col-lg-9 form-outline p-2">
        <input type="text" name="video_url" id="video_url" placeholder="Video Url" class="form-control2"  value="{{ !empty($item->video) ? $item->video : "" }}">
</div>

<div class="col-md-12 col-lg-3 form-outline p-2">
<p class="ptext h5"> Product Published</p>
</div>

<div class="col-md-12 col-lg-9 form-outline p-2">
<select class="selectpicker form-control1" id="publish" name="publish" required=""  value="{{ !empty($item->is_active) ? $item->is_active : "" }}">
                <option value="" disabled="" >Product Published</option>
                <option value="1" selected="" >Yes</option>
                <option value="0">No</option>
            </select> 
</div>


<div class="col-md-12 col-lg-3 form-outline p-2">
<p class="ptext h5"> Product Published From</p>
</div>

<div class="col-md-12 col-lg-9 form-outline p-2">
        <input type="date" name="publish_from" id=""  class="form-control2 ">
</div>



<div class="row  mt-5">
        <div class="d-flex justify-content-end">
            <a href="/admin/items/create" class="btn-blu-login " data-bs-toggle="modal" data-bs-target="">DISACRD</a>
            <span class="ml-3 mr-3" id="media_previous"> <a href="#" class="btn-blu-login"><i class="fas text-white fa-arrow-left"></i> PREVIOUS</a></span>
         <button class="btn-blu-login">{{ $button_text }} </button>
        </div>
    </div>

</div>
              <button class="buttonload d-none" id="loading">
                         <i class="fa fa-spinner fa-spin"></i>
                      </button>
</div>
  </form>

@endsection


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


<script>

  function image_upload(){
      const fileInput = document.getElementById('imgInp');
      var files = [...fileInput.files];
      var i = 0;
      for (const f of files) { 
        document.getElementById('blah'+i).classList.remove('d-none');
        document.getElementById('icon'+i).classList.remove('d-none');
         document.getElementById('blah'+i).src = URL.createObjectURL(f);

         i++;
      }
      
}

function loader(iRun){
        var loader = document.getElementById('loading').classList;

            if (iRun) {
                loader.remove('d-none');
            }
            else {
                loader.add('d-none');
            }
      }




 $( document ).ready(function() {
 loader(false);
   
    $("#icon0").click(function(){
  const fileInput = document.getElementById('imgInp');
  console.log(fileInput)
      var files = [...fileInput.files];
      console.log(files);
            files.splice(0, 1);
        document.getElementById('blah0').classList.add('d-none');
        document.getElementById('icon0').classList.add('d-none');
});

$("#icon1").click(function(){
  const fileInput = document.getElementById('imgInp');
  console.log(fileInput)
      var files = [...fileInput.files];
      console.log(files);
            files.splice(1, 1);
        document.getElementById('blah1').classList.add('d-none');
        document.getElementById('icon1').classList.add('d-none');
});

$("#icon2").click(function(){
  const fileInput = document.getElementById('imgInp');
  console.log(fileInput)
      var files = [...fileInput.files];
      console.log(files);
            files.splice(2, 1);
        document.getElementById('blah2').classList.add('d-none');
        document.getElementById('icon2').classList.add('d-none');

});

$("#icon3").click(function(){
  const fileInput = document.getElementById('imgInp');
  console.log(fileInput)
      var files = [...fileInput.files];
      console.log(files);
            files.splice(2, 1);
        document.getElementById('blah3').classList.add('d-none');
        document.getElementById('icon3').classList.add('d-none');

});

     $("#general_click").click(function(){

         document.getElementById('general_div').classList.remove('d-none');
         document.getElementById('inventory_div').classList.add('d-none');
         document.getElementById('variant_div').classList.add('d-none');
         document.getElementById('attribute_div').classList.add('d-none');
         document.getElementById('media_div').classList.add('d-none');

         document.getElementById('general_click').classList.add('bg-active');
         document.getElementById('inventory_click').classList.remove('bg-active');
         document.getElementById('variant_click').classList.remove('bg-active');
         document.getElementById('attribute_click').classList.remove('bg-active');
         document.getElementById('media_click').classList.remove('bg-active');
    });

    $("#inventory_click").click(function(){

         document.getElementById('general_div').classList.add('d-none');
         document.getElementById('inventory_div').classList.remove('d-none');
         document.getElementById('variant_div').classList.add('d-none');
         document.getElementById('attribute_div').classList.add('d-none');
         document.getElementById('media_div').classList.add('d-none');

         document.getElementById('general_click').classList.remove('bg-active');
         document.getElementById('inventory_click').classList.add('bg-active');
         document.getElementById('variant_click').classList.remove('bg-active');
         document.getElementById('attribute_click').classList.remove('bg-active');
         document.getElementById('media_click').classList.remove('bg-active');

    });

    $("#variant_click").click(function(){

         document.getElementById('general_div').classList.add('d-none');
         document.getElementById('inventory_div').classList.add('d-none');
         document.getElementById('variant_div').classList.remove('d-none');
         document.getElementById('attribute_div').classList.add('d-none');
         document.getElementById('media_div').classList.add('d-none');

         document.getElementById('general_click').classList.remove('bg-active');
         document.getElementById('inventory_click').classList.remove('bg-active');
         document.getElementById('variant_click').classList.add('bg-active');
         document.getElementById('attribute_click').classList.remove('bg-active');
         document.getElementById('media_click').classList.remove('bg-active');

    });

    $("#attribute_click").click(function(){

         document.getElementById('general_div').classList.add('d-none');
         document.getElementById('inventory_div').classList.add('d-none');
         document.getElementById('variant_div').classList.add('d-none');
         document.getElementById('attribute_div').classList.remove('d-none');
         document.getElementById('media_div').classList.add('d-none');

         document.getElementById('general_click').classList.remove('bg-active');
         document.getElementById('inventory_click').classList.remove('bg-active');
         document.getElementById('variant_click').classList.remove('bg-active');
         document.getElementById('attribute_click').classList.add('bg-active');
         document.getElementById('media_click').classList.remove('bg-active');

    });

    $("#media_click").click(function(){

         document.getElementById('general_div').classList.add('d-none');
         document.getElementById('inventory_div').classList.add('d-none');
         document.getElementById('variant_div').classList.add('d-none');
         document.getElementById('attribute_div').classList.add('d-none');
         document.getElementById('media_div').classList.remove('d-none');

         document.getElementById('general_click').classList.remove('bg-active');
         document.getElementById('inventory_click').classList.remove('bg-active');
         document.getElementById('variant_click').classList.remove('bg-active');
         document.getElementById('attribute_click').classList.remove('bg-active');
         document.getElementById('media_click').classList.add('bg-active');

    });

    // for next button

    $("#general_next").click(function(){

         document.getElementById('general_div').classList.add('d-none');
         document.getElementById('inventory_div').classList.remove('d-none');
         document.getElementById('variant_div').classList.add('d-none');
         document.getElementById('attribute_div').classList.add('d-none');
         document.getElementById('media_div').classList.add('d-none');

         document.getElementById('general_click').classList.remove('bg-active');
         document.getElementById('inventory_click').classList.add('bg-active');
         document.getElementById('variant_click').classList.remove('bg-active');
         document.getElementById('attribute_click').classList.remove('bg-active');
         document.getElementById('media_click').classList.remove('bg-active');

    });

     $("#inventory_next").click(function(){

         document.getElementById('general_div').classList.add('d-none');
         document.getElementById('inventory_div').classList.add('d-none');
         document.getElementById('variant_div').classList.remove('d-none');
         document.getElementById('attribute_div').classList.add('d-none');
         document.getElementById('media_div').classList.add('d-none');

         document.getElementById('general_click').classList.remove('bg-active');
         document.getElementById('inventory_click').classList.remove('bg-active');
         document.getElementById('variant_click').classList.add('bg-active');
         document.getElementById('attribute_click').classList.remove('bg-active');
         document.getElementById('media_click').classList.remove('bg-active');

    });

    $("#variant_next").click(function(){

         document.getElementById('general_div').classList.add('d-none');
         document.getElementById('inventory_div').classList.add('d-none');
         document.getElementById('variant_div').classList.add('d-none');
         document.getElementById('attribute_div').classList.remove('d-none');
         document.getElementById('media_div').classList.add('d-none');

         document.getElementById('general_click').classList.remove('bg-active');
         document.getElementById('inventory_click').classList.remove('bg-active');
         document.getElementById('variant_click').classList.remove('bg-active');
         document.getElementById('attribute_click').classList.add('bg-active');
         document.getElementById('media_click').classList.remove('bg-active');

    });

    $("#attribute_next").click(function(){

         document.getElementById('general_div').classList.add('d-none');
         document.getElementById('inventory_div').classList.add('d-none');
         document.getElementById('variant_div').classList.add('d-none');
         document.getElementById('attribute_div').classList.add('d-none');
         document.getElementById('media_div').classList.remove('d-none');

         document.getElementById('general_click').classList.remove('bg-active');
         document.getElementById('inventory_click').classList.remove('bg-active');
         document.getElementById('variant_click').classList.remove('bg-active');
         document.getElementById('attribute_click').classList.remove('bg-active');
         document.getElementById('media_click').classList.add('bg-active');

    });

    // for previous button


     $("#inventory_previous").click(function(){

         document.getElementById('general_div').classList.remove('d-none');
         document.getElementById('inventory_div').classList.add('d-none');
         document.getElementById('variant_div').classList.add('d-none');
         document.getElementById('attribute_div').classList.add('d-none');
         document.getElementById('media_div').classList.add('d-none');

         document.getElementById('general_click').classList.add('bg-active');
         document.getElementById('inventory_click').classList.remove('bg-active');
         document.getElementById('variant_click').classList.remove('bg-active');
         document.getElementById('attribute_click').classList.remove('bg-active');
         document.getElementById('media_click').classList.remove('bg-active');

    });

    $("#variant_previous").click(function(){

         document.getElementById('general_div').classList.add('d-none');
         document.getElementById('inventory_div').classList.remove('d-none');
         document.getElementById('variant_div').classList.add('d-none');
         document.getElementById('attribute_div').classList.add('d-none');
         document.getElementById('media_div').classList.add('d-none');

         document.getElementById('general_click').classList.remove('bg-active');
         document.getElementById('inventory_click').classList.add('bg-active');
         document.getElementById('variant_click').classList.remove('bg-active');
         document.getElementById('attribute_click').classList.remove('bg-active');
         document.getElementById('media_click').classList.remove('bg-active');

    });

    $("#attribute_previous").click(function(){

         document.getElementById('general_div').classList.add('d-none');
         document.getElementById('inventory_div').classList.add('d-none');
         document.getElementById('variant_div').classList.remove('d-none');
         document.getElementById('attribute_div').classList.add('d-none');
         document.getElementById('media_div').classList.add('d-none');

         document.getElementById('general_click').classList.remove('bg-active');
         document.getElementById('inventory_click').classList.remove('bg-active');
         document.getElementById('variant_click').classList.add('bg-active');
         document.getElementById('attribute_click').classList.remove('bg-active');
         document.getElementById('media_click').classList.remove('bg-active');

    });

    $("#media_previous").click(function(){

         document.getElementById('general_div').classList.add('d-none');
         document.getElementById('inventory_div').classList.add('d-none');
         document.getElementById('variant_div').classList.add('d-none');
         document.getElementById('attribute_div').classList.remove('d-none');
         document.getElementById('media_div').classList.add('d-none');

         document.getElementById('general_click').classList.remove('bg-active');
         document.getElementById('inventory_click').classList.remove('bg-active');
         document.getElementById('variant_click').classList.remove('bg-active');
         document.getElementById('attribute_click').classList.add('bg-active');
         document.getElementById('media_click').classList.remove('bg-active');

    });

});

</script>

    <script>
        $(document).ready(function(){
          let optionsLen = 1;
          $(document).on('click', '.btn-add', function() {
            // alert('jhvhj');
            $(this).hide();
            optionsLen++;
            $("#more-options").append(`<div class="row mb-2">
                <div class="col-4">
                  <select class="form-control" style="width: 120%;">
                    <option value="size">Size</option>
                    <option value="color">Color</option>
                  </select>
                </div>
                <div class="col-6">
                  <input class="form-control tags-input" type="text" />
                </div>
                <div class="col-2">
                  <button type="button" class="btn btn-danger btn-sm btn-remove">x</button>
                  <button type="button" class="btn btn-info btn-sm btn-add">+</button>
                </div>
              </div>`);
          });
          $(document).on("click", ".btn-remove", function(){
            optionsLen--;
            $(this).parent().parent().remove();
          });

          function generateVariants() {
            let variants = '';
            const selects = $('#more-options').find('select');
            for(let i=0;i<selects.length;i++) {
              // fetching selects and setting select for each option
              const optionsValue = $(selects[i]).find(":selected").val();
              const input = $(selects[i]).closest('.row').find('input[type="text"]');
              variants += `<select name="type[]" class="form-control ${optionsValue}"></select>`;
              generateOption(input)
            }

            return variants;
          }

          $(document).on('click', '.btn-add-row', function() {
            // $(this).hide();
            $("#tbody").append(`<tr>
                <td class="variant">
                  <input type="text" name="type[]" class="form-control" placeholder="Enter Size" />
                </td>
                <td><input type="text" name="variant[]" class="form-control" placeholder="Enter Variant" /></td>
                <td><input type="text" name="price[]" class="form-control" placeholder="Enter price" /></td>
                <td><input type="text" name="qty[]" class="form-control" placeholder="Enter qty" /></td>
                <td><input type="text" name="sku[]" class="form-control" placeholder="Enter sku" /></td>
                <td>
                        <button type="button" class="btn btn-danger btn-sm btn-remove-row">x</button>
                        </td>
                        <td>
                        <button type="button" class="btn btn-info btn-sm btn-add-row">+</button>
                        </td>
              </tr>`);
          });
          $(document).on("click", ".btn-remove-row", function(){
            $(this).parent().parent().remove();
          });

          

          // $(".tags-input").keypress(function(e) {
          //   console.log('pressed')
          //   var code = e.keyCode || e.which;
          //   if(code == 32) {
          //     //Enter keycode
          //     generateOption($(this));
              

          //   }
          // });

          function generateOption(ele) {
            const values = ele.val();
            const arr = values.split(" ")
            const selectedOption = $(ele).closest('.row').find('select option:selected').val();
            // const foundValues = $(`select option[value="${selectedOption}"]`).closest('.row').find('input[type="text"]').val();
              // console.log(foundValues);
            let options = '';
            for(let i=0;i<arr.length; i++){
              options+= `<option value="${arr[i]}">${arr[i]}</option>`;
            }

            $(".size").append(options)
            // console.log($(document).find("select .size"))
            // $(document).find("."+selectedOption).append(options);
          }
          
        });
    </script>