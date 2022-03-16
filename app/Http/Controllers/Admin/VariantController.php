<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VariantController extends Controller
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

    public function store(Request $request)
    {
        $variant = new Variant;
        $variant->type=$request->type;
        $variant->price=$request->price;
        $variant->qty=$request->qty;
        $variant->sku=$request->sku;
        $variant->item_id=$request->item_id;
        $variant->save();
    }
}
