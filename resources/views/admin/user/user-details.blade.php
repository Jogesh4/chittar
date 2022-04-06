@extends('admin.layouts.dashboard') @section('title', 'All Users') @section('content')
<section>
	<div class="container-fluid">
		<div class="row ">
			<div class="col-3">
				<div class="row p-4 ">
					<div class="col-12 shadow p-3 m-2  border  fw-bold text-dark bg-active" id="details">
						<p> <i class="fas pink-color fa-fw fa-user "></i> Details </p>
					</div>
					<div class="col-12 shadow p-3 m-2 pink-color border  fw-bold text-dark" id="address">
						<p> <i class="fas pink-color fa-fw fa-user"></i> Addresses</p>
					</div>
					<div class="col-12 shadow p-3 m-2 pink-color border  fw-bold text-dark" id="order">
						<p> <i class="fas pink-color fa-list"></i> Orders</p>
					</div>
					<div class="col-12 shadow p-3 m-2 pink-color border  fw-bold text-dark" id="reward">
						<p> <i class="fas pink-color fa-box"></i> Reward Point History</p>
					</div>
					<div class="col-12 shadow p-3 m-2 pink-color border  fw-bold text-dark" id="redeem">
						<p> <i class="fas pink-color fa-money-bill"></i> Redeemed Coupons</p>
					</div>
					<div class="col-12 shadow p-3 m-2 pink-color border  fw-bold text-dark" id="cancel">
						<p> <i class="fas pink-color fa-ban"></i> Cancellation Requests</p>
					</div>
					<div class="col-12 shadow p-3 m-2 pink-color border  fw-bold text-dark" id="return">
						<p> <i class="fas pink-color fa-exchange-alt"></i> Return Requests</p>
					</div>
					<div class="col-12 shadow p-3 m-2 pink-color border  fw-bold text-dark" id="review">
						<p> <i class="fas pink-color fa-keyboard"></i> Product Reviews</p>
					</div>
					<div class="col-12 shadow p-3 m-2 pink-color border  fw-bold text-dark" id="card">
						<p> <i class="fas pink-color fa-fw fa-user"></i> Saved Cards</p>
					</div>
				</div>
			</div>
			<div class="col-9">
				<div class="row p-2 ">
					<div class="col-4 email-show-user mt-2"> {{ $user->email }} <span><a href="/admin/users" class="text-white fw-bold m-2 ">X</a></span></div>
				</div>
				<div class="row p-3 bg-white mt-2" id="detail_div">
					<h3>Personal Detail</h3>
					<div class="col-md-12 col-lg-6 form-outline p-2">
						<input type="text" name="type-product" id="" placeholder="Bhanu Tripathi   " class="form-control2 " value="{{ $user->name }}" /> </div>
					<div class="col-md-12 col-lg-6 form-outline p-2">
						<input type="text" name="type-product" id="" placeholder="Bhanu@justconsult.us" class="form-control2 " value="{{ $user->email }}" /> </div>
					<div class="col-md-12 col-lg-6 form-outline p-2">
						<input type="text" name="type-product" id="" placeholder="contact number" class="form-control2 " value="" /> </div>
					<div class="col-md-12 col-lg-6 form-outline p-2">
						<input type="text" name="type-product" id="" placeholder="address" class="form-control2 " value="" /> </div>
					<div class="col-md-12 col-lg-4 form-outline p-2">
						<input type="text" name="type-product" id="" placeholder="city" class="form-control2 " value="" /> </div>
					<div class="col-md-12 col-lg-4 form-outline p-2">
						<input type="text" name="type-product" id="" placeholder="state" class="form-control2 " value="" /> </div>
					<div class="col-md-12 col-lg-4 form-outline p-2">
						<input type="text" name="type-product" id="" placeholder="zipcode" class="form-control2 " value="" /> </div>
					<div class="col-md-12 col-lg-4 form-outline p-2">
						<p>Created:<span> admin | {{ $user->created_at }}</span></p>
						<p>Last updated:<span> admin | {{ $user->updated_at }}</span></p>
					</div>
					<div class="col-md-12 col-lg-4 form-outline p-2"> </div>
				</div>

				<div class="row p-3 bg-white mt-3 d-none" id="reward_div">
					<h3> Reward Point History</h3>
					<div class="portlet__body p-0 flex-grow-1">
						<!---->
						<table class="table table-data">
							<thead>
								<tr>
									<th colspan="2">Available Balance: 0 Points</th>
									<th colspan="1" class="text-right"><a href="javascript:;" class="links">Manage Reward</a></th>
								</tr>
								<tr>
									<th>Date</th>
									<th>Points</th>
									<th>Comments</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td width="25%">31-03-2021</td>
									<td class="text-success"><span>4700</span></td>
									<td>
										<ul>
											<li><span>4700 points earned for Costa Smeralda</span></li>
										</ul>
										<!---->
										<!---->
										<!---->
										<!---->
										<!---->
									</td>
								</tr>
								<tr>
									<td width="25%">31-03-2021</td>
									<td class="text-success"><span>290</span></td>
									<td>
										<ul>
											<li><span>140 points earned for COCO MADEMOISELLE Eau de Parfum Fragrance Collection</span></li>
											<li><span>150 points earned for Clé de Peau Beauté Concealer SPF 25</span></li>
										</ul>
										<!---->
										<!---->
										<!---->
										<!---->
										<!---->
									</td>
								</tr>
								<tr>
									<td width="25%">31-03-2021</td>
									<td class="text-danger"><span>-50</span></td>
									<td>
										<!---->
										<!---->
										<!----><span>-50 points used towards order #10006</span>
										<!---->
										<!---->
									</td>
								</tr>
								<tr>
									<td width="25%">31-03-2021</td>
									<td class="text-success"><span>310</span></td>
									<td>
										<ul>
											<li><span>40 points earned for Sunglasses, MU 05SS</span></li>
											<li><span>270 points earned for Ralph Polarized Sunglasses , RA4004</span></li>
										</ul>
										<!---->
										<!---->
										<!---->
										<!---->
										<!---->
									</td>
								</tr>
							</tbody>
						</table>
						<!---->
						<!---->
						<!---->
						<!---->
						<!---->
						<!---->
						<!---->
						<!---->
						<!---->
					</div>
				</div>
				<div class="row p-3 bg-white mt-3 d-none" id="redeem_div">
					<h3> Redeemed Coupons</h3>
					<div class="portlet">
						<div class="portlet__body p-0 flex-grow-1">
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
							<table class="table table-data">
								<thead>
									<tr>
										<th colspan="3"><span>Total Order Amount</span> : $740.45 </th>
									</tr>
									<tr>
										<th>Order Date</th>
										<th>Order#</th>
										<th>Amount</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>31-03-2021</td>
										<td><a href="#/order/10009" class="btn btn-link" target="_blank">#10009</a></td>
										<td>$100.00</td>
									</tr>
									<tr>
										<td>31-03-2021</td>
										<td><a href="#/order/10007" class="btn btn-link" target="_blank">#10007</a></td>
										<td>$320.05</td>
									</tr>
									<tr>
										<td>31-03-2021</td>
										<td><a href="#/order/10006" class="btn btn-link" target="_blank">#10006</a></td>
										<td>$249.25</td>
									</tr>
									<tr>
										<td>31-03-2021</td>
										<td><a href="#/order/10004" class="btn btn-link" target="_blank">#10004</a></td>
										<td>$71.15</td>
									</tr>
								</tbody>
							</table>
							<!---->
							<!---->
							<!---->
							<!---->
							<!---->
						</div>
						<div class="portlet__foot">
							<div class="pagination px-4">
								<ul class="pagination__links">
									<!---->
									<!---->
									<li class="pagination__link--active" style="display: none;"><a href="javascript:;">1</a></li>
									<!---->
									<!---->
								</ul>
								<div class="pagination__toolbar">
									<!----><span class="pagination__desc">
                                                Showing 1 to 4 of 4 Records
                                    </span></div>
							</div>
							<!---->
						</div>
					</div>
				</div>

				<div class="row bg-white mt-3 d-none" id="order_div">
					<h3 class="bg-white mt-3"> Orders</h3>
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
                                         {{-- <th>Fulfillment status</th>  --}}
                                        <th>Action</th>
                                    </tr>
                                 </thead>
                                @if($orders->count() > 0)  
                                     @foreach($orders as $order)                              
                                      <tr>
                                            <td scope="row">{{ $order->order_no }}</td>
                                            <td>{{date('d-m-Y H:m:s', strtotime($order->created_at))}}</td>
                                            <td>{{ $order->user->name }}</td>
                                            <td>{{ $order->items }}</td> 
                                            <td><i class="fas fa-rupee-sign"></i>{{ $order->amount }}</td> 
                                            <td>
                                                @if($order->status == 'PAID')
                                                <span class="text-success"> <i class="fas fa-credit-card"></i>  Paid </span>
                                                @endif 
                                                @if($order->status == 'UNPAID')
                                                <span class="text-danger"> <i class="fas fa-credit-card"></i>  UnPaid </span>
                                                @endif
                                                @if($order->status == 'COD')
                                                <span class="text-success"> <i class="fas fa-money-bill"></i>  Cash </span>
                                                @endif
                                                @if($order->status == 'FAILED')
                                                <span class="text-danger"> <i class="fas fa-credit-card"></i>  Failed </span>
                                                @endif
                                            </td>
                                            
                                            {{-- <td> <select class="selectpicker form-control1" id="type" name="type" required="">
                                                <option value=" packing" selected="">Packing</option>
                                                <option value="reviewing">Reviewing</option>
                                                <option value="ready-for-pick">Ready for pickup</option>                                      
                                                <option value="picked">Picked up</option>                                      
                                            </select></td> --}}
                                            
                                            <td>
                                                <div class="actions">
                                                <a href="/admin/orders/{{ $order->id }}" title="View"><i class="fas faslls fa-eye"></i></a>
                                                <a href="/admin/orders/{{ $order->id }}/edit" title="View"><i class="fas faslls fa-pen"></i></a>
                                                {{-- <span> <a href="#" title="Share"><i class="fas faslls fa-share-alt"></i></a> </span>
                                                <span> <a href="#" title="Slip"><i class="fas faslls fa-clipboard"></i></a> </span>
                                                <span> <a href="#" title="Cancel Order"><i class="fas faslls fa-window-close"></i></a> </span>
                                                <span> <a href="#" title="Complete Order"><i class="fas faslls fa-check-square"></i> </span> --}}
                                                </div>
                                                </td>
                                      </tr>
                                      @endforeach
                                  @else
                                         <div class="text-center">
                                              <h3>No Order Found</h3>
                                         </div>
                                      @endif
                                </table>

                            </div>
                        </div>
                    </div>
				</div>

				<div class="row bg-white mt-3 d-none" id="address_div">
					<h3 class="bg-white mt-3"> Addresses</h3>
					<h5 class="text-center"></h5>
					<div class="portlet__body p-0 flex-grow-1">
						
						<ul class="my-addresses list-addresses p-5">
                            @if($addressess->count() > 0)
                              @foreach($addressess as $address)
																		<li>
																		         <div class="my-addresses__body">
																												<address class="delivery-address">
																														<h5>{{ $address->firstname }} {{ $address->lastname }}</h5> 
																														<p>{{ $address->address }},{{ $address->city }},{{ $address->state }},{{ $address->country }},{{ $address->pincode }}</p>
																															<p class="phone-txt"><i class="fas fa-mobile-alt"></i>{{ $address->phone }}</p>
																													</address>
																											</div>
																			</li>
                              @endforeach
                            @else
																				<div class="text-center mt-3">
																							<h4>No Address Found</h4>
																				</div>

                            @endif
							
						</ul>
						<!---->
					</div>
				</div>
				<div class="row bg-white mt-3 d-none" id="review_div">
					<h3 class="bg-white mt-3"> Product Reviews</h3>
					<div class="row">
                    <div class="col-lg-12">

                            <div class="table-responsive bg-white p-3">
                            <table class="table table-justified" id="example">
                                <thead>
                                    <tr>
                                        <th>Sno</th>
                                        <th>Review</th>
                                        <th>Images</th>
                                         {{-- <th>Status</th>
                                         <th>Action</th> --}}
                                    </tr>
                                 </thead>
                                @if($reviews->count() > 0)  
                                     @foreach($reviews as $review)                              
                                      <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ $review->description }}</td>
                                            <td>
																							<div class="row mt-2">
																										<div class="col-md-12 col-lg-12 form-outline mb-2">
																												@if(!empty($review->image))
																													<div class="position-relative d-inline p-1">
																															<img src="{{ !empty($review->image) ? asset('storage/'.$review->image) : '#' }}" alt="your image" width="50" height="50"/>
																													</div>
																												@endif
																												@if(!empty($review->image1))
																													<div class="position-relative d-inline p-1">
																															<img src="{{ !empty($review->image1) ? asset('storage/'.$review->image1) : '#' }}" alt="your image" width="50" height="50"/>
																													</div>
																												@endif
																												@if(!empty($review->image2))
																													<div class="position-relative d-inline p-1">
																															<img src="{{ !empty($review->image2) ? asset('storage/'.$review->image2) : '#' }}" alt="your image" width="50" height="50"/>
																													</div>
																												@endif
																												@if(!empty($review->image3))
																													<div class="position-relative d-inline p-1">
																															<img src="{{ !empty($review->image3) ? asset('storage/'.$review->image3) : '#' }}" alt="your image" width="50" height="50"/>
																													</div>
																												@endif
																													
																										</div>
																						</div>
																						</td>
                                            
                                      </tr>
                                      @endforeach
                                  @else
                                         <div class="text-center">
                                              <h3>No Order Found</h3>
                                         </div>
                                      @endif
                                </table>

                            </div>
                        </div>
                    </div>
				</div>

				<div class="row bg-white mt-3 d-none" id="return_div">
					<h3 class="bg-white mt-3"> Return Requests</h3>
					<div> <img class="img-fluid text-center" src="/images/empty-state-cart.jpg" style=" max-width: 80%; "> </div>
				</div>

				<div class="row bg-white mt-3 d-none" id="cancel_div">
					<h3 class="bg-white mt-3"> Cancellation Requests</h3>
					<div> <img class="img-fluid text-center" src="/images/empty-state-cart.jpg" style=" max-width: 80%; "> </div>
				</div>

				<div class="row bg-white mt-3 d-none" id="card_div">
					<h3 class="bg-white mt-3">Saved Cards</h3>
					<div> <img class="img-fluid text-center" src="/images/empty-state-cart.jpg" style=" max-width: 80%; "> </div>
				</div>
			</div>
		</div>
</section> @endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

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

	$("#details").click(function() {
		document.getElementById('detail_div').classList.remove('d-none');
		document.getElementById('reward_div').classList.add('d-none');
		document.getElementById('redeem_div').classList.add('d-none');
		document.getElementById('order_div').classList.add('d-none');
		document.getElementById('address_div').classList.add('d-none');
		document.getElementById('review_div').classList.add('d-none');
		document.getElementById('return_div').classList.add('d-none');
		document.getElementById('cancel_div').classList.add('d-none');
		document.getElementById('card_div').classList.add('d-none');
		document.getElementById('details').classList.add('bg-active');
		document.getElementById('reward').classList.remove('bg-active');
		document.getElementById('redeem').classList.remove('bg-active');
		document.getElementById('order').classList.remove('bg-active');
		document.getElementById('address').classList.remove('bg-active');
		document.getElementById('review').classList.remove('bg-active');
		document.getElementById('return').classList.remove('bg-active');
		document.getElementById('cancel').classList.remove('bg-active');
		document.getElementById('card').classList.remove('bg-active');
	});
	$("#reward").click(function() {
		document.getElementById('detail_div').classList.add('d-none');
		document.getElementById('reward_div').classList.remove('d-none');
		document.getElementById('redeem_div').classList.add('d-none');
		document.getElementById('order_div').classList.add('d-none');
		document.getElementById('address_div').classList.add('d-none');
		document.getElementById('review_div').classList.add('d-none');
		document.getElementById('return_div').classList.add('d-none');
		document.getElementById('cancel_div').classList.add('d-none');
		document.getElementById('card_div').classList.add('d-none');
		document.getElementById('details').classList.remove('bg-active');
		document.getElementById('reward').classList.add('bg-active');
		document.getElementById('redeem').classList.remove('bg-active');
		document.getElementById('order').classList.remove('bg-active');
		document.getElementById('address').classList.remove('bg-active');
		document.getElementById('review').classList.remove('bg-active');
		document.getElementById('return').classList.remove('bg-active');
		document.getElementById('cancel').classList.remove('bg-active');
		document.getElementById('card').classList.remove('bg-active');
	});
	$("#redeem").click(function() {
		document.getElementById('detail_div').classList.add('d-none');
		document.getElementById('reward_div').classList.add('d-none');
		document.getElementById('redeem_div').classList.remove('d-none');
		document.getElementById('order_div').classList.add('d-none');
		document.getElementById('address_div').classList.add('d-none');
		document.getElementById('review_div').classList.add('d-none');
		document.getElementById('return_div').classList.add('d-none');
		document.getElementById('cancel_div').classList.add('d-none');
		document.getElementById('card_div').classList.add('d-none');
		document.getElementById('details').classList.remove('bg-active');
		document.getElementById('reward').classList.remove('bg-active');
		document.getElementById('redeem').classList.add('bg-active');
		document.getElementById('order').classList.remove('bg-active');
		document.getElementById('address').classList.remove('bg-active');
		document.getElementById('review').classList.remove('bg-active');
		document.getElementById('return').classList.remove('bg-active');
		document.getElementById('cancel').classList.remove('bg-active');
		document.getElementById('card').classList.remove('bg-active');
	});
	$("#order").click(function() {
		document.getElementById('detail_div').classList.add('d-none');
		document.getElementById('reward_div').classList.add('d-none');
		document.getElementById('redeem_div').classList.add('d-none');
		document.getElementById('order_div').classList.remove('d-none');
		document.getElementById('address_div').classList.add('d-none');
		document.getElementById('review_div').classList.add('d-none');
		document.getElementById('return_div').classList.add('d-none');
		document.getElementById('cancel_div').classList.add('d-none');
		document.getElementById('card_div').classList.add('d-none');
		document.getElementById('details').classList.remove('bg-active');
		document.getElementById('reward').classList.remove('bg-active');
		document.getElementById('redeem').classList.remove('bg-active');
		document.getElementById('order').classList.add('bg-active');
		document.getElementById('address').classList.remove('bg-active');
		document.getElementById('review').classList.remove('bg-active');
		document.getElementById('return').classList.remove('bg-active');
		document.getElementById('cancel').classList.remove('bg-active');
		document.getElementById('card').classList.remove('bg-active');
	});
	$("#address").click(function() {
		document.getElementById('detail_div').classList.add('d-none');
		document.getElementById('reward_div').classList.add('d-none');
		document.getElementById('redeem_div').classList.add('d-none');
		document.getElementById('order_div').classList.add('d-none');
		document.getElementById('address_div').classList.remove('d-none');
		document.getElementById('review_div').classList.add('d-none');
		document.getElementById('return_div').classList.add('d-none');
		document.getElementById('cancel_div').classList.add('d-none');
		document.getElementById('card_div').classList.add('d-none');
		document.getElementById('details').classList.remove('bg-active');
		document.getElementById('reward').classList.remove('bg-active');
		document.getElementById('redeem').classList.remove('bg-active');
		document.getElementById('order').classList.remove('bg-active');
		document.getElementById('address').classList.add('bg-active');
		document.getElementById('review').classList.remove('bg-active');
		document.getElementById('return').classList.remove('bg-active');
		document.getElementById('cancel').classList.remove('bg-active');
		document.getElementById('card').classList.remove('bg-active');
	});
	$("#review").click(function() {
		document.getElementById('detail_div').classList.add('d-none');
		document.getElementById('reward_div').classList.add('d-none');
		document.getElementById('redeem_div').classList.add('d-none');
		document.getElementById('order_div').classList.add('d-none');
		document.getElementById('address_div').classList.add('d-none');
		document.getElementById('review_div').classList.remove('d-none');
		document.getElementById('return_div').classList.add('d-none');
		document.getElementById('cancel_div').classList.add('d-none');
		document.getElementById('card_div').classList.add('d-none');
		document.getElementById('details').classList.remove('bg-active');
		document.getElementById('reward').classList.remove('bg-active');
		document.getElementById('redeem').classList.remove('bg-active');
		document.getElementById('order').classList.remove('bg-active');
		document.getElementById('address').classList.remove('bg-active');
		document.getElementById('review').classList.add('bg-active');
		document.getElementById('return').classList.remove('bg-active');
		document.getElementById('cancel').classList.remove('bg-active');
		document.getElementById('card').classList.remove('bg-active');
	});
	$("#return").click(function() {
		document.getElementById('detail_div').classList.add('d-none');
		document.getElementById('reward_div').classList.add('d-none');
		document.getElementById('redeem_div').classList.add('d-none');
		document.getElementById('order_div').classList.add('d-none');
		document.getElementById('address_div').classList.add('d-none');
		document.getElementById('review_div').classList.add('d-none');
		document.getElementById('return_div').classList.remove('d-none');
		document.getElementById('cancel_div').classList.add('d-none');
		document.getElementById('card_div').classList.add('d-none');
		document.getElementById('details').classList.remove('bg-active');
		document.getElementById('reward').classList.remove('bg-active');
		document.getElementById('redeem').classList.remove('bg-active');
		document.getElementById('order').classList.remove('bg-active');
		document.getElementById('address').classList.remove('bg-active');
		document.getElementById('review').classList.remove('bg-active');
		document.getElementById('return').classList.add('bg-active');
		document.getElementById('cancel').classList.remove('bg-active');
		document.getElementById('card').classList.remove('bg-active');
	});
	$("#cancel").click(function() {
		document.getElementById('detail_div').classList.add('d-none');
		document.getElementById('reward_div').classList.add('d-none');
		document.getElementById('redeem_div').classList.add('d-none');
		document.getElementById('order_div').classList.add('d-none');
		document.getElementById('address_div').classList.add('d-none');
		document.getElementById('review_div').classList.add('d-none');
		document.getElementById('return_div').classList.add('d-none');
		document.getElementById('cancel_div').classList.remove('d-none');
		document.getElementById('card_div').classList.add('d-none');
		document.getElementById('details').classList.remove('bg-active');
		document.getElementById('reward').classList.remove('bg-active');
		document.getElementById('redeem').classList.remove('bg-active');
		document.getElementById('order').classList.remove('bg-active');
		document.getElementById('address').classList.remove('bg-active');
		document.getElementById('review').classList.remove('bg-active');
		document.getElementById('return').classList.remove('bg-active');
		document.getElementById('cancel').classList.add('bg-active');
		document.getElementById('card').classList.remove('bg-active');
	});
	$("#card").click(function() {
		document.getElementById('detail_div').classList.add('d-none');
		document.getElementById('reward_div').classList.add('d-none');
		document.getElementById('redeem_div').classList.add('d-none');
		document.getElementById('order_div').classList.add('d-none');
		document.getElementById('address_div').classList.add('d-none');
		document.getElementById('review_div').classList.add('d-none');
		document.getElementById('return_div').classList.add('d-none');
		document.getElementById('cancel_div').classList.add('d-none');
		document.getElementById('card_div').classList.remove('d-none');
		document.getElementById('details').classList.remove('bg-active');
		document.getElementById('reward').classList.remove('bg-active');
		document.getElementById('redeem').classList.remove('bg-active');
		document.getElementById('order').classList.remove('bg-active');
		document.getElementById('address').classList.remove('bg-active');
		document.getElementById('review').classList.remove('bg-active');
		document.getElementById('return').classList.remove('bg-active');
		document.getElementById('cancel').classList.remove('bg-active');
		document.getElementById('card').classList.add('bg-active');
	});
});
</script>