@extends('layouts.userdashboard')
@section('content')

<div class="container-fluid">

    @if(!empty($order))
          <div class="row">
                        <div class="col-xl-12 col-lg-12">
 <div class="card card-1">
        <div class="card-header bg-white">
            <div class="media flex-sm-row flex-column-reverse justify-content-between ">
                <div class="col my-auto">
                    <h4 class="mb-0">Thanks for your Order,<span class="change-color">{{ $user->name }}</span> !</h4>
                </div>
                
            </div>
        </div>
        <div class="card-body">
            <div class="row justify-content-between mb-3">
                <div class="col-auto">
                    <h6 class="color-1 mb-0 change-color">Receipt</h6>
                </div>
                <div class="col-auto "> <small>Receipt Voucher : 1KAU9-84UIL</small> </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card card-2">
                        <div class="card-body">
                        @if(!empty($orderitems))
                          @foreach($orderitems as $item)
                            <div class="media mt-2">
                                <div class="sq align-self-center "> <img class="img-fluid my-auto align-self-center mr-2 mr-md-4 pl-0 p-0 m-0" src="{{ asset('storage/'.$item->image) }}" width="100" height="80" /> </div>
                                <div class="media-body my-auto text-right">
                                  
                                          <div class="row my-auto flex-column flex-md-row">
                                              <div class="col my-auto">
                                                  <h6 class="mb-0">{{ $item->name }}</h6>
                                              </div>
                                              {{-- <div class="col-auto my-auto"> <small>Golden Blue </small></div> --}}
                                              <div class="col my-auto"> <small>Size : {{ $item->size }}</small></div>
                                              <div class="col my-auto"> <small>Color : {{ $item->color }}</small></div>
                                              <div class="col my-auto"> <small>Qty : {{ $item->qty }}</small></div>
                                              <div class="col my-auto">
                                                  <h6 class="mb-0">$ {{ $item->price }}</h6>
                                              </div>
                                          </div>
                                </div>
                            </div>
                          @endforeach
                        @endif
                            <hr class="my-3 ">
                            <div class="row">
                                <div class="col-md-3 mb-3"> <small> Track Order <span><i class=" ml-2 fa fa-refresh" aria-hidden="true"></i></span></small> </div>
                                <div class="col mt-auto">
                                    <div class="progress my-auto">
                                        <div class="progress-bar progress-bar rounded" style="width: 62%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="media row justify-content-between ">
                                        <div class="col-auto text-right"><span> <small class="text-right mr-sm-2"></small> <i class="fa fa-circle active"></i> </span></div>
                                        <div class="col-auto"> <span> <small class="text-right mr-sm-2">Out for delivary</small><i class="fa fa-circle active"></i></span></div>
                                        <div class="col-auto flex-col-auto"><small class="text-right mr-sm-2">Delivered</small><span> <i class="fa fa-circle"></i></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row mt-4">
                <div class="col">
                    <div class="row justify-content-between">
                        <div class="col-auto">
                            <p class="mb-1 text-dark"><b>Order Details</b></p>
                        </div>
                        <div class="flex-sm-col text-right col">
                            <p class="mb-1"><b>Total</b></p>
                        </div>
                        <div class="flex-sm-col col-auto">
                            <p class="mb-1">$ {{ $order->amount }}</p>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="flex-sm-col text-right col">
                            <p class="mb-1"> <b>Discount</b></p>
                        </div>
                        <div class="flex-sm-col col-auto">
                            <p class="mb-1">150</p>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="flex-sm-col text-right col">
                            <p class="mb-1"><b>GST 18%</b></p>
                        </div>
                        <div class="flex-sm-col col-auto">
                            <p class="mb-1">843</p>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="flex-sm-col text-right col">
                            <p class="mb-1"><b>Delivery Charges</b></p>
                        </div>
                        <div class="flex-sm-col col-auto">
                            <p class="mb-1">Free</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row invoice ">
                <div class="col">
                    <p class="mb-1"> Invoice Number : 788152</p>
                    <p class="mb-1">Invoice Date : 22 Jan,2022</p>
                    <p class="mb-1">Recepits Voucher:18KU-62IIK</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="jumbotron-fluid">
                <div class="row justify-content-between ">
                    <div class="col-auto my-auto ">
                        <h2 class="mb-0 font-weight-bold text-dark">TOTAL PAID</h2>
                    </div>
                    <div class="col-auto my-auto ml-auto">
                        <h3 class="text-dark">$ {{ $order->amount }}</h3>
                    </div>
                </div>
                <div class="row mb-3 mt-3 mt-md-0">
                    <div class="col-auto border-line"> <small class="text-white">PAN:AA02hDW7E</small></div>
                    <div class="col-auto border-line"> <small class="text-white">CIN:UMMC20PTC </small></div>
                    <div class="col-auto "><small class="text-white">GSTN:268FD07EXX </small> </div>
                </div>
            </div>
        </div>
    </div>
					
					
</div>
                    </div>

                    <div class="row">
                         <button type="button" id="cancel" class="checkout-btn text-center">Cancel Order</button>
                    </div>

    @else

           <div class="text-center mt-5">
                  <h3>No Order to Display.</h3>
           </div>

    @endif 

                    <!-- Content Row -->
                </div>

@endsection