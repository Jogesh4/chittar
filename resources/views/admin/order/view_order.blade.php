                    
@extends('admin.layouts.dashboard')

@section('style')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.css">


@endsection


@section('content')


<div class="container-fluid">

                    
            <div class="row">

                        <div class="col-12">
                            <div class="card shadow recent-sales">
              
                              <div class="card-body">
                                <h5 class="card-title text-center mb-3">Order Details</h5>
              
                                <table class="table table-borderless datatable dataTable-table text-center">
                                      <tr>
                                        <td>Order Id</td>
                                        <td></td>
                                        <td>-</td>
                                        <td>{{$order->order_no}}</td>
                                      </tr>
                                      <tr>
                                        <td>Transaction Id</td>
                                        <td></td>
                                        <td>-</td>
                                        <td>{{$order->transaction}}</td>
                                      </tr>
                                      <tr>
                                        <tr>
                                        <td>Costomer Name</td>
                                        <td></td>
                                        <td>-</td>
                                        <td>{{$order->user->name}}</td>
                                      </tr>
                                      <tr>
                                        <td>No. of Items</td>
                                        <td></td>
                                        <td>-</td>
                                        <td>{{$order->items}}</td>
                                      </tr>
                                      <tr>
                                        <td>Total Amount</td>
                                        <td></td>
                                        <td>-</td>
                                        <td>Rs.{{$order->amount}}</td>
                                      </tr>
                                      <tr>
                                        <td>Shipping Address</td>
                                        <td></td>
                                        <td>-</td>
                                        <td>{{!empty($order->shipping_address)? $order->shipping->address . ',' . $order->shipping->city . ',' . $order->shipping->state . ',' . $order->shipping->country . ',' . $order->shipping->pincode : ""}}</td>
                                      </tr>
                                      <tr>
                                        <td>Billing Address</td>
                                        <td></td>
                                        <td>-</td>
                                        <td>{{!empty($order->billing_address) ? $order->billing->address . ',' . $order->billing->city . ',' . $order->billing->state . ',' . $order->billing->country . ',' . $order->billing->pincode : ""}}</td>
                                      </tr>
                                      @if(!empty($order->expected_delivery_date))  
                                      <tr>
                                        <td>Expected Delivery Date</td>
                                        <td></td>
                                        <td>-</td>
                                        <td>{{date('d-m-Y', strtotime($order->expected_delivery_date))}}</td>
                                      </tr>
                                      @endif
                                      <tr>
                                        <td>Payment Status</td>
                                        <td></td>
                                        <td>-</td>
                                        <td>{{!empty($order->status)? $order->status : ""}}</td>
                                      </tr>
                                      <tr>
                                        <td>Order Status</td>
                                        <td></td>
                                        <td>-</td>
                                        @if($order->order_status == '0')
                                           <td><span class="badge badge-secondary mt-2">Pending</span></td>
                                        @endif
                                        @if($order->order_status == '1')
                                           <td><span class="badge badge-success mt-2">Confirmed</span></td>
                                        @endif
                                        @if($order->order_status == '9')
                                           <td><span class="badge badge-danger mt-2">Rejected</span></td>
                                        @endif
                                        @if($order->order_status == '2')
                                           <td><span class="badge badge-primary mt-2">Dispatched</span></td>
                                        @endif
                                      </tr>
                                    </table>
                  
                                
                                <div class="dataTable-container">

                                </div>
                                
                               </div>
              
                              </div>
              
                            </div>                                   
                       
                    </div>

<div class="row mt-2 mb-2">
     <div class="col-12">

               {{-- <div class="mr-2">
                        <h5 class="mt-2">Select Status :</h5>
                   </div> --}}

                   @if($type == "item")
                        <a href="/donor_orderitems?id={{ $order->id }} &type=item" class="btn-form_active">Items Detail</a>
                    @else
                        <a href="/donor_orderitems?id={{ $order->id }} &type=item" class="btn-form_inactive">Items Detail</a>
                   @endif

             {{-- @if($order->status != "0")
                   @if($type == "upload")
                        <a href="/donor_orderitems?id={{ $order->id }} &type=upload" class="btn-form_active">Images & Video</a>
                    @else
                        <a href="/donor_orderitems?id={{ $order->id }} &type=upload" class="btn-form_inactive">Images & Video</a>
                   @endif
                  @if($order->status == "2")
                      @if($type == "dispatch")
                            <a href="/donor_orderitems?id={{ $order->id }} &type=dispatch" class="btn-form_active">Order Dispatched</a>
                        @else
                            <a href="/donor_orderitems?id={{ $order->id }} &type=dispatch" class="btn-form_inactive">Order Dispatched</a>
                      @endif
                  @endif
            @endif --}}

     </div>
 </div>


@if($type == "item")
                    <div class="row">

                        <div class="col-12">
                            <div class="card shadow recent-sales">
              
                              <div class="card-body">
                                <h5 class="card-title text-center">List of Items</h5>
              
                                
                                
                                <div class="dataTable-container">
                                <div class="table-responsive">  
                                <table class="table table-borderless datatable dataTable-table" id="example">
                                  <thead>
                                    <tr>
                                    <th scope="col" style="width: 2%;"><a href="#">Sno.</a></th>
                                    <th scope="col" style="width: 5%;"><a href="#">image</a></th>
                                    <th scope="col" style="width: 10%;"><a href="#">Name</a></th>
                                    <th scope="col" style="width: 5%;"><a href="#">Quantity</a></th>
                                    <th scope="col" style="width: 5%;"><a href="#">Price</a></th>                  
                                    
                                    </tr>
                                  </thead>

                                  <tbody>
                                    @if(!empty($details))
                                       @foreach($details as $item)
                                          <tr>
                                          <th scope="row">{{ $loop->iteration }}</th>
                                          <td><img class="img-fluid" src="{{ !empty($item->image) ? asset('storage/'.$item->image) : '#' }}" width="30%" height="10%"></td>
                                          <td><p>{{$item->name}}</p></td>
                                          <td><p>{{$item->qty}}</p></td>
                                          <td><p>Rs.{{$item->price}}</p></td>                                 
                                          </tr> 
                                        @endforeach   
                                    @else
                                        <h3>No Items Found</h3>
                                    @endif
                                  </tbody>                                        
                                </table>
                                </div>
                                </div>
                                
                               </div>
              
                              </div>
              
                            </div>
                    </div>
  @endif

  @if($type == "upload")
    <div class="card shadow mb-2">
        <div class="m-3">

              <div class="text-center">
                      <h1 class="h3 mb-0 text-gray-800">Images and Video</h1>
              </div>


              <div class="table-responsive">
                <table class="table table-sm table-nowrap card-table">
                  <thead>
                    <tr>
                      <th>

                        <!-- Checkbox -->
                        <div class="form-check">
                          <input class="" name="ordersSelect" id="ordersSelectAll" type="checkbox">
                          <label class="form-check-label" for="ordersSelectAll">&nbsp;</label>
                        </div>

                      </th>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="orders-product">
                           Images and Video
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="orders-product">
                          Action
                        </a>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="list"> 
                    
                    @if(!empty($order->image1))
                      <tr>
                        <td>
                          <!-- Checkbox -->
                          <div class="form-check">
                            <input class="" type="checkbox" name="ordersSelect" id="ordersSelectOne">
                            <label class="form-check-label" for="ordersSelectOne">&nbsp;</label>
                          </div>
                        </td>
                        <td class="orders-order">
                          <img id="image1" src="/images/supplier/{{!empty($order->image1) ? $order->image1 : 'undraw_profile.svg'}}" alt="your image" width="22%" height="100%"/>
                        </td>
                        <td class="orders-order">
                            <a href="/delete-order-photo/{{ $order->id }}/img1" class="btn-blu-login">Delete</a>
                        </td>
                      </tr>
                    @endif

                    @if(!empty($order->image2))
                      <tr>
                        <td>
                          <!-- Checkbox -->
                          <div class="form-check">
                            <input class="" type="checkbox" name="ordersSelect" id="ordersSelectOne">
                            <label class="form-check-label" for="ordersSelectOne">&nbsp;</label>
                          </div>
                        </td>
                        <td class="orders-order">
                          <img id="image1" src="/images/supplier/{{!empty($order->image2) ? $order->image2 : 'undraw_profile.svg'}}" alt="your image" width="22%" height="100%"/>
                        </td>
                        <td class="orders-order">
                            <a href="/delete-order-photo/{{ $order->id }}/img2" class="btn-blu-login">Delete</a>
                        </td>
                      </tr>
                    @endif

                    @if(!empty($order->image3))
                      <tr>
                        <td>
                          <!-- Checkbox -->
                          <div class="form-check">
                            <input class="" type="checkbox" name="ordersSelect" id="ordersSelectOne">
                            <label class="form-check-label" for="ordersSelectOne">&nbsp;</label>
                          </div>
                        </td>
                        <td class="orders-order">
                          <img id="image1" src="/images/supplier/{{!empty($order->image3) ? $order->image3 : 'undraw_profile.svg'}}" alt="your image" width="22%" height="100%"/>
                        </td>
                        <td class="orders-order">
                            <a href="/delete-order-photo/{{ $order->id }}/img3" class="btn-blu-login">Delete</a>
                        </td>
                      </tr>
                    @endif

                    @if(!empty($order->image4))
                      <tr>
                        <td>
                          <!-- Checkbox -->
                          <div class="form-check">
                            <input class="" type="checkbox" name="ordersSelect" id="ordersSelectOne">
                            <label class="form-check-label" for="ordersSelectOne">&nbsp;</label>
                          </div>
                        </td>
                        <td class="orders-order">
                          <img id="image1" src="/images/supplier/{{!empty($order->image4) ? $order->image4 : 'undraw_profile.svg'}}" alt="your image" width="22%" height="100%"/>
                        </td>
                        <td class="orders-order">
                            <a href="/delete-order-photo/{{ $order->id }}/img4" class="btn-blu-login">Delete</a>
                        </td>
                      </tr>
                    @endif

                    @if(!empty($order->video))
                      <tr>
                        <td>
                          <!-- Checkbox -->
                          <div class="form-check">
                            <input class="" type="checkbox" name="ordersSelect" id="ordersSelectOne">
                            <label class="form-check-label" for="ordersSelectOne">&nbsp;</label>
                          </div>
                        </td>
                        <td class="orders-order">
                            <video width="320" height="240" controls>
                            <source src="/images/supplier/{{$order->video}}" type="video/mp4">
                            </video>
                        </td>
                        <td class="orders-order">
                            <a href="/delete-order-photo/{{ $order->id }}/vid" class="btn-blu-login">Delete</a>
                        </td>
                      </tr>
                    @endif
                    
                  </tbody>
                </table>
              </div>                         

           </div>
    </div>
                    
  @endif

  @if($type == "dispatch")

  <div class="row">
      <div class="col-12">
         <div class="card shadow recent-sales">
                   <div class="card-body">
                                <h5 class="card-title text-center mb-3">Delivery Details</h5>
              
                                <table class="table table-borderless datatable dataTable-table text-center">
                                      <tr>
                                        <td>Name</td>
                                        <td></td>
                                        <td>-</td>
                                        <td>{{$order->del_name}}</td>
                                      </tr>
                                      <tr>
                                        <td>AGE</td>
                                        <td></td>
                                        <td>-</td>
                                        <td>{{$order->del_age}}</td>
                                      </tr>
                                      <tr>
                                        <td>Contact Number</td>
                                        <td></td>
                                        <td>-</td>
                                        <td>{{$order->del_phone}}</td>
                                      </tr>
                                      @if(!empty($order->del_info))
                                      <tr>
                                        <td>Information</td>
                                        <td></td>
                                        <td>-</td>
                                        <td>{{$order->del_info}}</td>
                                      </tr>
                                      @endif
                                    </table>
                  
                                 <div class="text-center mt-2">
                                                      <button type="button" class="btn btn-success">Order Dispatched</button>
                                  </div>
                                
                                
                               </div>

                              </div>
              
                            </div>
                    </div>
          

   @endif
                    

                </div>

@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.js" defer></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js" defer></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" defer></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" defer></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" defer></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js" defer></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js" defer></script>

<script>


    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                 'excel'
            ]
        } );

} );

  function image_upload(){
      const fileInput = document.getElementById('image');
      var files = [...fileInput.files];
      var i = 0;
      for (const f of files) { 
        document.getElementById('blah'+i).classList.remove('d-none');
        document.getElementById('icon'+i).classList.remove('d-none');
         document.getElementById('blah'+i).src = URL.createObjectURL(f);

         i++;
      }
      
}

 function video_upload(){
      const fileInput = document.getElementById('video');
      var files = [...fileInput.files];
      var i = 0;
      for (const f of files) { 
        document.getElementById('blah'+i).classList.remove('d-none');
        document.getElementById('icon'+i).classList.remove('d-none');
         document.getElementById('blah'+i).src = URL.createObjectURL(f);

         i++;
      }
      
}



  function icon_click0(){
  const fileInput = document.getElementById('image');
  console.log(fileInput)
      var files = [...fileInput.files];
      console.log(files);
            files.splice(0, 1);
        document.getElementById('blah0').classList.add('d-none');
        document.getElementById('icon0').classList.add('d-none');
}

function icon_click1(){
  const fileInput = document.getElementById('image');
  console.log(fileInput)
      var files = [...fileInput.files];
      console.log(files);
            files.splice(1, 1);
        document.getElementById('blah1').classList.add('d-none');
        document.getElementById('icon1').classList.add('d-none');
}

function icon_click2(){
  const fileInput = document.getElementById('image');
  console.log(fileInput)
      var files = [...fileInput.files];
      console.log(files);
            files.splice(2, 1);
        document.getElementById('blah2').classList.add('d-none');
        document.getElementById('icon2').classList.add('d-none');

}

function icon_click3(){
  const fileInput = document.getElementById('image');
  console.log(fileInput)
      var files = [...fileInput.files];
      console.log(files);
            files.splice(2, 1);
        document.getElementById('blah3').classList.add('d-none');
        document.getElementById('icon3').classList.add('d-none');

}

</script>