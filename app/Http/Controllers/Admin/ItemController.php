<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ItemRequest;
use Illuminate\Http\Request;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Item;
use App\Models\Variant;
use App\Models\Review;
use App\Models\User;
use App\Models\Shipping;

class ItemController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('admin.item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->edit(new Item());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\ItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->update($request, new Item());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::where('id',$id)->first();
        $categories = Category::where('is_active', 1)->get();
        $brands = Brand::where('is_active', 1)->get();
        $variants = Variant::where('item_id', $id)->get();

        return view('admin.item.create', compact('brands', 'categories','variants'))->with('item',$item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\ItemRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        if(!empty($item->id)){
            $url = 'update';
        }
        else{
            $url = 'save';
        }
        // dd($request);
        $item->type = $request->product_type;
        $item->name = $request->product_title;
        $item->slug = $request->product_title;
        $item->brand_id = $request->brand;
        $item->category_id = $request->category;
        $item->description = $request->description;
        $item->model = $request->model;
        $item->tax_category = $request->tax_category;
        $item->condition = $request->product_condition;
        $item->warranty = $request->warranty;
        $item->return = $request->return;
        $item->track_inventory = $request->track_inventory;
        $item->selling_at = $request->want_sell;
        $item->continue_selling_when_stock_out = $request->continue_selling;
        $item->cash_on_delivery = $request->cash_on_delivery;
        $item->gift_wrap = $request->gift_wrap;
        $item->min_purchase_qty = $request->min_purchase;
        $item->max_purchase_qty = $request->max_purchase;
        $item->price = $request->cost_price;
        $item->sale_price = $request->sale_price;
        $item->stock_alert_qty = $request->stock_alert;
        $item->has_multiple_options = $request->multiple_options;
        $item->country_of_origin = $request->country;
        $item->weight_unit = $request->weight_type;
        $item->weight = $request->weight;
        $item->isbn = $request->isbn;
        $item->hsn = $request->hsn;
        $item->sac = $request->sac;
        $item->upc = $request->upc;
        $item->save();

        $i = 1;
             if($request->hasfile('product_image')){
                     foreach($request->file('product_image') as $img){

                            $file= $img;
                            $imagePath = $img->store('product_image', 'public');
                            if(empty($item->image)){
                                  $item->image = $imagePath;
                            }
                            else if(empty($item->image1)){
                                  $item->image1 = $imagePath;
                            }
                            else if(empty($item->image2)){
                                  $item->image2 = $imagePath;
                            }
                            else if(empty($item->image3)){
                                  $item->image3 = $imagePath;
                            }
                           
                            $i++;
                     }
         }

        // $imagePath = $request->file('product_image')->store('product_image', 'public');

        $item->video = $request->video_url;

        $item->is_active = $request->publish ?? 0;
        
        if($item->save()) {

            if(is_array($request->type)) {
                if(!empty($request->type[0])){
                    $types = $request->type ?? [];
                    $variants = $request->variant;
                    $prices = $request->price;
                    $qties = $request->qty;
                    $skus = $request->sku;
                    for($i=0; $i<count($types);$i++){

                        $variant = Variant::where(['item_id' => $item->id,'variant_name' => $variants[$i]])->first();

                        if(!$variant){
                            $variant = new Variant;
                        }
                            $variant->type=$types[$i];
                            $variant->variant_name=$variants[$i];
                            $variant->price=$prices[$i];
                            $variant->qty=$qties[$i];
                            $variant->sku=$skus[$i];
                            $variant->item_id=$item->id;
                            $variant->save();
                    }
              }
            }


            if($url == 'save'){
                  return redirect()->back()->with('success', 'Item update successfully');
            }
            else{
                  return redirect()->route('admin.items.index');
            }
            
        } else {
            return redirect()->back()->with('failure', 'Failed to update item');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function change_status($type,$id,$status){
         
        if($type == 'item'){
             $item = Item::where('id',$id)->first();
             $item->is_active = $status;
             $item->save();
        }
        else if($type == 'category'){
             $item = Category::where('id',$id)->first();
             $item->is_active = $status;
             $item->save();
        }
        else if($type == 'review'){
             $review = Review::where('id',$id)->first();
             $review->status = $status;
             $review->save();
        }
        else if($type == 'user'){
             $user = User::where('id',$id)->first();
             $user->is_active = $status;
             $user->save();
        }
        else if($type == 'brand'){
             $brand = Brand::where('id',$id)->first();
             $brand->is_active = $status;
             $brand->save();
        }
        else if($type == 'shipping'){
             $shipping = Shipping::where('id',$id)->first();
             $shipping->status = $status;
             $shipping->save();
        }

        return back();
    }

    public function manage_reviews(){
         $reviews = Review::orderBy('id','desc')->get();

         return view('admin.review.index',compact('reviews'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
