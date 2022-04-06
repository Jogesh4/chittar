@extends('admin.layouts.dashboard') @section('title', 'All Users') @section('content')
<section>
	<div class="container">
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
			<div class="col-8">
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
					<div> <img class="img-fluid text-center" src="/images/empty-state-cart.jpg" style=" max-width: 80%; "> </div>
				</div>
				<div class="row bg-white mt-3 d-none" id="address_div">
					<h3 class="bg-white mt-3"> Addresses</h3>
					<h5 class="text-center"></h5>
					<div class="portlet__body p-0 flex-grow-1">
						
						<ul class="my-addresses list-addresses p-5">
                            @if(!empty($addressess))
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
					<div> <img class="img-fluid text-center" src="/images/empty-state-cart.jpg" style=" max-width: 80%; "> </div>
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
<script>
$(document).ready(function() {
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