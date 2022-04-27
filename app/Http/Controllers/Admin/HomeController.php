<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Shipping;
use App\Models\Banner;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.auth:admin');
    }

    /**
     * Show the Admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $users = User::orderBy('id', 'desc')->take(5)->get();
        $orders = Order::orderBy('id', 'desc')->take(5)->get();

        return view('admin.home',compact('users','orders'));
    }

    public function manage_shippings(Request $request){

        $shippings = Shipping::orderBy('id','desc')->get();

        return view('admin.shipping.index',compact('shippings'));

    }

    public function edit_shippings($id){

        $shipping = Shipping::where('id',$id)->first();

        return view('admin.shipping.create',compact('shipping'));
    }

    public function store_shippings(Request $request){
         
         $shipping = new Shipping();
         $shipping->pincode = $request->pincode;
         $shipping->price = $request->price;
         $shipping->save();

         return redirect()->back()->with('success', 'Shipping Created successfully');

    }

    public function update_shippings(Request $request){
         
         $shipping = Shipping::where('id',$request->shipping_id)->first();
         $shipping->pincode = $request->pincode;
         $shipping->price = $request->price;
         $shipping->save();

         return redirect()->back()->with('success', 'Shipping Updated successfully');

    }

    public function manage_banners(Request $request){

        $banners = Banner::orderBy('id','desc')->get();

        return view('admin.banner.index',compact('banners'));

    }

    public function edit_banners($id){

        $banner = Banner::where('id',$id)->first();

        return view('admin.banner.create',compact('banner'));
    }

    public function store_banners(Request $request){
         
         $banner = new banner();
         $banner->name = $request->name;
         $banner->status = 1;
         
         if($request->hasfile('image')){
              $imagePath = $request->file('image')->store('banner_image', 'public');
         }
         $banner->image = $imagePath;

         $banner->save();

         return redirect()->back()->with('success', 'Banner Created successfully');

    }

    public function update_banners(Request $request){
         
         $banner = Banner::where('id',$request->banner_id)->first();
         $banner->name = $request->name;
         $banner->status = 1;
         
         if($request->hasfile('image')){
              $imagePath = $request->file('image')->store('banner_image', 'public');
         }
         $banner->image = $imagePath;

         $banner->save();

         return redirect()->back()->with('success', 'Banner Updated successfully');

    }
}
