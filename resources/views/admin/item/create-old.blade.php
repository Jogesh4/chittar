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
    <!-- Main content -->
    <section class="py-0">
      <div class="container-fluid">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
          </div>
          <!-- /.card-header --> 
          
          @if($item->exists)
            <form method="POST" action="{{ route('admin.items.update', $item) }}" enctype="multipart/form-data">
            @method('put')
          @else
              <form method="POST" action="{{ route('admin.items.store') }}" enctype="multipart/form-data">
          @endif
          @csrf
          <div class="card-body">

            <div class="form-group @error('type') has-danger @enderror">
              <label class="col-form-label" for="type">Type</label>
              <select class="form-control @error('type') is-invalid @enderror" id="type" name="type">
                {{-- @foreach($categories as $category) --}}
                    {{-- <option @if(old('category', $item->category_id) == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option> --}}
                {{-- @endforeach --}}
                <option @if(old('type', 'physical') == 'physical') selected @endif value="physical">Physical</option>
                <option @if(old('type', 'digital') == 'digital') selected @endif value="digital">Digital</option>
              </select>
              @error('type') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group @error('name') has-danger @enderror">
              <label class="col-form-label" for="name">Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $item->name) }}" placeholder="Name" required>
              @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group @error('brand') has-danger @enderror">
              <label class="col-form-label" for="brand">Brand</label>
              <select class="form-control @error('brand') is-invalid @enderror" id="brand" name="brand">
              @foreach($brands as $brand)
                  <option @if(old('brand', $item->brand_id) == $brand->id) selected @endif value="{{ $brand->id }}">{{ $brand->name }}</option>
                  @endforeach
              </select>
              @error('brand') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group @error('category') has-danger @enderror">
              <label class="col-form-label" for="category">Category</label>
              <select class="form-control @error('category') is-invalid @enderror" id="category" name="category">
              @foreach($categories as $category)
                  <option @if(old('category', $item->category_id) == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
              </select>
              @error('category') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group @error('description') has-danger @enderror">
              <label class="col-form-label" for="description">Description</label>
              <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description', $item->description) }}" placeholder="Description" required></textarea>
              @error('description') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group @error('model') has-danger @enderror">
              <label class="col-form-label" for="model">Model No</label>
              <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model" value="{{ old('model', $item->model) }}" placeholder="Model" required>
              @error('model') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group @error('tax_category') has-danger @enderror">
              <label class="col-form-label" for="tax_category">Tax Category</label>
              <select class="form-control @error('tax_category') is-invalid @enderror" id="tax_category" name="tax_category">
              {{-- @foreach($tax_categories as $category)
                  <option @if(old('category', $item->category_id) == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
              </select>
              @endforeach --}}
              <option @if(old('tax_category', '5') == '5') selected @endif value="5">5</option>
              <option @if(old('tax_category', '10') == '10') selected @endif value="10">10</option>
            </select>
              @error('tax_category') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>


            <div class="form-group @error('condition') has-danger @enderror">
              <label class="col-form-label" for="condition">Condition</label>
              <select class="form-control @error('condition') is-invalid @enderror" id="condition" name="condition">
                <option @if(old('condition', 'old') == 'old') selected @endif value="old">Old</option>
                <option @if(old('condition', 'new') == 'new') selected @endif value="new">New</option>
                <option @if(old('condition', 'refurbished') == 'refurbished') selected @endif value="refurbished">Refurbished</option>
              </select>
              @error('condition') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group @error('warranty') has-danger @enderror">
              <label class="col-form-label" for="warranty">warranty</label>
              <input type="text" class="form-control @error('warranty') is-invalid @enderror" id="warranty" name="warranty" value="{{ old('warranty', $item->warranty) }}" placeholder="warranty" required>
              @error('warranty') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group @error('return') has-danger @enderror">
              <label class="col-form-label" for="return">return</label>
              <input type="text" class="form-control @error('return') is-invalid @enderror" id="return" name="return" value="{{ old('return', $item->return) }}" placeholder="return" required>
              @error('return') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group my-2">
              <div class="row justify-content-between">
                <div class="col">
                  <label>Do you want to track inventory for this product?</label>
                </div>
                <div class="col-auto">
                  <div class="radio-inline">
                    <label class="radio">
                      <input type="radio" name="track_inventory" value="1">Yes
                    </label>
                    <label class="radio">
                      <input type="radio" name="track_inventory" value="0">No
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group my-2">
              <div class="row justify-content-between">
                <div class="col">
                  <label>You want to sell this product as?</label>
                </div>
                <div class="col-auto">
                  <div class="radio-inline">
                    <label class="radio">
                      <input type="radio" name="selling_at" value="1">Shipping only
                    </label>
                    <label class="radio">
                      <input type="radio" name="selling_at" value="2">Pickup Only
                    </label>
                    <label class="radio">
                      <input type="radio" name="selling_at" value="3">Both
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group my-2">
              <div class="row justify-content-between">
                <div class="col">
                  <label>Continue selling when out of stock</label>
                </div>
                <div class="col-auto">
                  <div class="radio-inline">
                    <label class="radio">
                      <input type="radio" name="continue_selling_when_stock_out" value="1">Yes
                    </label>
                    <label class="radio">
                      <input type="radio" name="continue_selling_when_stock_out" value="0">No
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group my-2">
              <div class="row justify-content-between">
                <div class="col">
                  <label>Available for Cash on Delivery</label>
                </div>
                <div class="col-auto">
                  <div class="radio-inline">
                    <label class="radio">
                      <input type="radio" name="cash_on_delivery" value="1">Yes
                    </label>
                    <label class="radio">
                      <input type="radio" name="cash_on_delivery" value="0">No
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group my-2">
              <div class="row justify-content-between">
                <div class="col">
                  <label>Available for Gift Wrap</label>
                </div>
                <div class="col-auto">
                  <div class="radio-inline">
                    <label class="radio">
                      <input type="radio" name="gift_wrap" value="1">Yes
                    </label>
                    <label class="radio">
                      <input type="radio" name="gift_wrap" value="0">No
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group @error('min_purchase_qty') has-danger @enderror">
              <label class="col-form-label" for="min_purchase_qty">Minimum Purchase Qty</label>
              <input type="text" class="form-control @error('min_purchase_qty') is-invalid @enderror" id="min_purchase_qty" name="min_purchase_qty" value="{{ old('min_purchase_qty', $item->min_purchase_qty) }}" placeholder="Min Purchase Qty" required>
              @error('min_purchase_qty') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group @error('max_purchase_qty') has-danger @enderror">
              <label class="col-form-label" for="max_purchase_qty">Maximum Purchase Qty</label>
              <input type="text" class="form-control @error('max_purchase_qty') is-invalid @enderror" id="max_purchase_qty" name="max_purchase_qty" value="{{ old('max_purchase_qty', $item->max_purchase_qty) }}" placeholder="Max Purchase Qty" required>
              @error('max_purchase_qty') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group @error('price') has-danger @enderror">
              <label class="col-form-label" for="price">Price</label>
              <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $item->price) }}" placeholder="Price" required>
              @error('price') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group @error('stock_alert_qty') has-danger @enderror">
              <label class="col-form-label" for="stock_alert_qty">Stock Alert Quantity</label>
              <input type="text" class="form-control @error('stock_alert_qty') is-invalid @enderror" id="stock_alert_qty" name="max_purchase_qty" value="{{ old('stock_alert_qty', $item->stock_alert_qty) }}" placeholder="Stock Alert Quantity" required>
              @error('stock_alert_qty') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group @error('has_multiple_options') has-danger @enderror">
              <label class="col-form-label" for="has_multiple_options">This product has multiple options, like different sizes or colors</label>
              <input type="text" class="form-control @error('has_multiple_options') is-invalid @enderror" id="has_multiple_options" name="has_multiple_options" value="{{ old('has_multiple_options', $item->has_multiple_options) }}" placeholder="Max Purchase Qty" required>
              @error('has_multiple_options') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group my-2">
              <div class="row justify-content-between">
                <div class="col">
                  <label>This product has multiple options, like different sizes or colors</label>
                </div>
                <div class="col-auto">
                  <div class="radio-inline">
                    <label class="radio">
                      <input type="radio" name="has_multiple_options" value="1">Yes
                    </label>
                    <label class="radio">
                      <input type="radio" name="has_multiple_options" value="0">No
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <div id="more-options">
                <div class="row mb-2">
                  <div class="col-4">
                    <select class="form-control">
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
              </div>

              <div class="row"><div class="col"><button type="button" class="btn btn-info btn-sm btn-add-row">Add Item</button></div></div>
              <table class="table">
                <thead>
                  <tr>
                    <th>Variant</th>
                    <th>Price(excl. tax)</th>
                    <th>Quantity</th>
                    <th>SKU</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody id="tbody">
                </tbody>
              </table>
            </div>

            <div class="form-group @error('country_of_origin') has-danger @enderror">
              <label class="col-form-label" for="country_of_origin">Country of Origin</label>
              <select class="form-control @error('country_of_origin') is-invalid @enderror" id="country_of_origin" name="country_of_origin">
                {{-- @foreach($categories as $category) --}}
                    {{-- <option @if(old('category', $item->category_id) == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option> --}}
                {{-- @endforeach --}}
                <option @if(old('country_of_origin', 'india') == 'india') selected @endif value="india">India</option>
                <option @if(old('country_of_origin', 'china') == 'china') selected @endif value="china">China</option>
              </select>
              @error('country_of_origin') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group @error('weight_unit') has-danger @enderror">
              <label class="col-form-label" for="weight_unit">Weight Unit</label>
              <select class="form-control @error('weight_unit') is-invalid @enderror" id="weight_unit" name="weight_unit">
                <option @if(old('weight_unit', 'kg') == 'kg') selected @endif value="kg">kg</option>
                <option @if(old('weight_unit', 'gm') == 'gm') selected @endif value="gm">gm</option>
              </select>
              @error('weight_unit') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group @error('weight') has-danger @enderror">
              <label class="col-form-label" for="weight">weight</label>
              <input type="text" class="form-control @error('weight') is-invalid @enderror" id="weight" name="weight" value="{{ old('weight', $item->weight) }}" placeholder="weight" required>
              @error('weight') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group @error('isbn') has-danger @enderror">
              <label class="col-form-label" for="isbn">isbn</label>
              <input type="text" class="form-control @error('isbn') is-invalid @enderror" id="isbn" name="isbn" value="{{ old('isbn', $item->isbn) }}" placeholder="isbn" required>
              @error('isbn') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group @error('hsn') has-danger @enderror">
              <label class="col-form-label" for="hsn">hsn</label>
              <input type="text" class="form-control @error('hsn') is-invalid @enderror" id="hsn" name="hsn" value="{{ old('hsn', $item->hsn) }}" placeholder="hsn" required>
              @error('hsn') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group @error('sac') has-danger @enderror">
              <label class="col-form-label" for="hsn">sac</label>
              <input type="text" class="form-control @error('sac') is-invalid @enderror" id="sac" name="sac" value="{{ old('sac', $item->sac) }}" placeholder="sac" required>
              @error('sac') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group @error('upc') has-danger @enderror">
              <label class="col-form-label" for="upc">upc</label>
              <input type="text" class="form-control @error('upc') is-invalid @enderror" id="upc" name="upc" value="{{ old('upc', $item->upc) }}" placeholder="upc" required>
              @error('upc') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group @error('product_image') has-danger @enderror">
              <label class="col-form-label" for="product_image">Product Image</label>
              <input type="file" class="form-control @error('product_image') is-invalid @enderror" id="product_image" name="product_image" placeholder="product_image">
              @error('product_image') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group py-2">
              <div class="checkbox">
                <label>
                  <input type="checkbox" id="is_active" name="is_active" value="1" @if(old('is_active', $item->is_active) == 1) checked @endif>
                  Product Published
                </label>
              </div>
            </div>

          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">{{ $button_text }}</button>
          </div>
          <!-- /.card-footer -->
          </form>
         </div>
      </div>
    </section>
    <!-- /.content -->
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
          let optionsLen = 1;
          $(document).on('click', '.btn-add', function() {
            $(this).hide();
            optionsLen++;
            $("#more-options").append(`<div class="row mb-2">
                <div class="col-4">
                  <select class="form-control">
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
                  ${generateVariants()}
                </td>
                <td><input type="text" name="price[]" class="form-control" /></td>
                <td><input type="text" name="qty[]" class="form-control" /></td>
                <td><input type="text" name="sku[]" class="form-control" /></td>
                <td>
                  <button type="button" class="btn btn-danger btn-sm btn-remove-row">x</button>
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
@endsection

{{--  $("#btn-add-more-service").on("click", function(){
                $("#more-services").append(`
                    <div style="margin-bottom: 15px;">
                        <hr/>
                        <div class="form-group{{ $errors->has('services[]') ? ' has-error' : '' }}">
                            <label for="service" class="col-md-4 control-label">Service</label>

                            <div class="col-md-6" id="service">
                                <select class="form-control" name="services[]" required>
                                    <option disabled selected>Select Service</option>
                                    @foreach($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            @if ($errors->has('services[]'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('services[]') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('prices[]') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Price</label>

                            <div class="col-md-6" id="price">
                                <input type="number" class="form-control" name="prices[]" required>
                            </div>

                            @if ($errors->has('prices[]'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('prices[]') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('discounts[]') ? ' has-error' : '' }}">
                            <label for="discount" class="col-md-4 control-label">Discount %</label>

                            <div class="col-md-6" id="discount">
                                <input type="number" class="form-control" name="discounts[]" value="0">
                            </div>

                            @if ($errors->has('discounts[]'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('discounts[]') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="button" class="btn btn-danger pull-right" id="remove_service">Remove</button>
                            </div>
                        </div>
                    </div>
                `);
            });

            $(document).on("click", "#remove_service", function(){
                $(this).parent().parent().parent().remove();
            }); --}}