@extends('layouts.userdashboard')
@section('content')

<div class="container-fluid">

                    <div class="row">
                    <!-- Area -->
                        <div class="col-xl-12 col-lg-12">
						
						<div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                
                                <!-- Card Body -->
                                <div class="card-body">
						
						<div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ $user->name }}</span><span class="text-black-50">{{ $user->email }}</span><span> </span></div>
        </div>
        <div class="col-md-9 border-right">
            <div class="p-3 py-3">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4"><input type="text" class="form-control" placeholder="first name" value="{{ !empty($user->name)?$user->name : "" }}"></div>
                    <div class="col-lg-6 col-md-12 mb-4"><input type="text" class="form-control" placeholder="Email id" value="{{ !empty($user->email)?$user->email : "" }}"></div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4"><input type="text" class="form-control" placeholder="Phone number" value="{{ !empty($user->phone)?$user->phone : "" }}"></div>
                    <div class="col-lg-6 col-md-12 mb-4"><input type="text" class="form-control" placeholder="Postcode" value="{{ !empty($user->pincode)?$user->pincode : "" }}"></div>
					  </div>
					  <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4"><input type="text" class="form-control" placeholder="state" value="{{ !empty($user->state)?$user->state : "" }}"></div>
                    <div class="col-lg-6 col-md-12 mb-4"><input type="text" class="form-control" placeholder="City" value="{{ !empty($user->city)?$user->city : "" }}"></div>
					  </div>
					 
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4"><input type="text" class="form-control" placeholder="country" value="{{ !empty($user->country)?$user->country : "" }}"></div>
                    <div class="col-lg-6 col-md-12 mb-4"><input type="text" class="form-control" value="{{ !empty($user->address)?$user->address : "" }}" placeholder="Address"></div>
                </div>
                <div class="text-center"><button class="btn-blu-login" type="button">Save Profile</button></div>
            </div>
        </div>
        
    </div>
</div>
</div>
								
                                </div>
                            </div>
                    <!-- Content Row -->
                    

                </div>

@endsection