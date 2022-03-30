<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ItemRequest;
use Illuminate\Http\Request;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Item;
use App\Models\Variant;

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
    public function edit(Item $item)
    {
        $categories = Category::where('is_active', 1)->get();
        $brands = Brand::where('is_active', 1)->get();
        return view('admin.item.create', compact('brands', 'categories'))->with('item',$item);
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
        // dd($request);
        $item->type = $request->product_type;
        $item->name = $request->product_title;
        $item->slug = $request->product_title;
        $item->brand_id = $request->brand;
        $item->category_id = $request->category;
        // $item->description = $request->description;
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
        $item->stock_alert_qty = $request->stock_alert;
        // $item->has_multiple_options = $request->has_multiple_options;
        $item->country_of_origin = $request->country;
        $item->weight_unit = $request->weight_type;
        $item->weight = $request->weight;
        $item->isbn = $request->isbn;
        $item->hsn = $request->hsn;
        $item->sac = $request->sac;
        $item->upc = $request->upc;

        $imagePath = $request->file('product_image')->store('product_image', 'public');

        $item->image = $imagePath;
        $item->video = $request->video_url;

        $item->is_active = $request->publish ?? 0;
        
        if($item->save()) {

            // if(is_array($request->type)) {
            //     $types = $request->type ?? [];
            //     $prices = $request->price;
            //     $qties = $request->qty;
            //     $skus = $request->sku;
            //     for($i=0; $i<count($types);$i++){
            //         $variant = new Variant;
            //         $variant->type=$types[$i];
            //         $variant->price=$prices[$i];
            //         $variant->qty=$qties[$i];
            //         $variant->sku=$skus[$i];
            //         $variant->item_id=$item->id;
            //         $variant->save();
            //     }
            // }

            return redirect()->back()->with('success', 'Item update successfully');
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
