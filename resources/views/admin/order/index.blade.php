@extends('admin.layouts.dashboard')
@section('title', 'All Orders')
@section('content')
<div class="container-fluid">    
                    <div class="row p-1"> 
                        <div class="card">
                      <p class="text-attive">
                        <span class="text-acttive"> All </span> 
                        <span class="text-attive"> Ship</span>
                       <span class="text-attive"> Pickup</span>
                     <span class="text-attive">   Unpaid</span>
                      <span class="text-attive">  Return</span>
                      <span class="text-attive">  Cancellation</span>
                     <span class="text-attive">   Completed</span> </p>

                        </div>

                    </div>     
                    
                    <div class="row p-1">
                        
                        <div class="col-lg-8 p-0">
                            
                            <div class="input-icon input-icon--left">
                                <input type="text" placeholder="Search..." id="generalSearch" class="form-control"> <span class="input-icon__icon input-icon__icon--left"><span><i class="la la-search"></i></span></span> <!---->
                            </div>
                          
                        </div>
                        <div class="col-lg-1 p-0 ">
                             <select class="selectpicker form-control1" id="type" name="type" required="">
                                <option value=" pending" selected="">Pending</option>
                                <option value="paid">Paid</option>
                                <option value="carh">Cash</option>                                      
                                                                 
                            </select>
                        </div>
                        <div class="col-lg-1 p-0 ">
                            <select class="selectpicker form-control1" id="type" name="type" required="">
                               <option value=" Latest" selected="">Latest</option>
                               <option value="amount">Amount</option>
                                                                   
                           </select>
                       </div>
                        <div class="col-lg-2 p-0 ">
                            <input type="date" name="dob" id="birthday" class="form-control" placeholder="Date of Birth"> 
                            
                       </div>
                      
                   </div>


                   <div class="row">
                    <div class="col-lg-12">

                            <div class="table-responsive bg-white p-3">
                            <table class="table table-justified" id="example">
                                <thead>
                                    <tr>
                                        <th>Order No</th>
                                        <th>Date</th>
                                         <th>Name</th>
                                         <th>Items</th> 
                                         <th>Amount</th> 
                                         <th>Payment Status</th> 
                                         <th>Fulfillment status</th> 
                                        <th></th>
                                    </tr>
                                 </thead>
                                @if(!empty($orders))  
                                     @foreach($orders as $order)                              
                                      <tr>
                                            <td scope="row">{{ $order->order_no }}</td>
                                            <td>{{date('d-m-Y H:m:s', strtotime($order->created_at))}}</td>
                                            <td>{{ $order->user->name }}</td>
                                            <td>{{ $order->items }}</td> 
                                            <td><i class="fas fa-rupee-sign"></i>{{ $order->amount }}</td> 
                                            <td class="text-success"> <i class="fas fa-credit-card"></i>  Paid </td> 
                                            <td> <select class="selectpicker form-control1" id="type" name="type" required="">
                                                <option value=" packing" selected="">Packing</option>
                                                <option value="reviewing">Reviewing</option>
                                                <option value="ready-for-pick">Ready for pickup</option>                                      
                                                <option value="picked">Picked up</option>                                      
                                            </select></td>
                                            
                                            <td>
                                                <div class="actions">
                                                <a href="#" title="View"><i class="fas faslls fa-eye"></i></a>
                                                <span> <a href="#" title="Share"><i class="fas faslls fa-share-alt"></i></a> </span>
                                                <span> <a href="#" title="Slip"><i class="fas faslls fa-clipboard"></i></a> </span>
                                                <span> <a href="#" title="Cancel Order"><i class="fas faslls fa-window-close"></i></a> </span>
                                                <span> <a href="#" title="Complete Order"><i class="fas faslls fa-check-square"></i> </span>
                                                </div>
                                                </td>
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
                    </div>








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
                 ''
            ]
        } );

} );

    
</script>
