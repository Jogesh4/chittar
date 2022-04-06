<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\Favorite;
use App\Models\CartItem;
use App\Models\Variant;
use App\Models\Review;

class ItemController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  Item $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        $similar_items = Item::where('category_id', '!=', $item->category_id)->where('is_active',1)->take(8)->get();

        $color_variants = Variant::where(['item_id' => $item->id,'type' => 'color'])->get();
        $size_variants = Variant::where(['item_id' => $item->id,'type' => 'size'])->get();
        $reviews = Review::where(['item_id' => $item->id,'status' => 1])->get();

    if(auth()->check()){
        \Cart::clear();
         \Cart::session(auth()->user()->id)->clear();
        $carts = CartItem::where(['user_id'=>auth()->user()->id,'status' => 1])->get();
          foreach($carts as $cart){
            \Cart::session(auth()->user()->id)->add(array(
                'id' => $cart->item_id,
                'name' => "fvfdv",
                'price' => 34,
                'quantity' => 1,
                'attributes' => array(),
                'associatedModel' => array()
            ));
        }
    }

        return view('item.show', compact('item', 'similar_items','color_variants','size_variants','reviews'));
    }

    public function add_favorite(Request $request){

        if(!empty(auth()->user()->id)){
            $fav = Favorite::where(['item_id' => $request->item_id,'user_id' => auth()->user()->id])->first();

            if(!$fav){
                $favorite = new Favorite();
                $favorite->item_id = $request->item_id;
                $favorite->user_id = auth()->user()->id;
                $favorite->save();
            }

            return 1;
        }
        else{
            return redirect()->route('login');
        }

    }

    public function save_review(Request $request){
        
        if($request->review_id != "" ){
              $review = Review::where('id',$request->review_id)->first();
              $review->description = $request->review;
        }
        else{
             $review = new Review();
            $review->description = $request->review;
            $review->item_id = $request->item_id;
            $review->user_id = auth()->user()->id;
            $review->status = 1;
            $review->save();
        }
        

           $i = 1;
             if($request->hasfile('review_image')){
                     foreach($request->file('review_image') as $img){

                            $file= $img;
                            $imagePath = $img->store('review_image', 'public');
                            if(empty($review->image)){
                                  $review->image = $imagePath;
                            }
                            else if(empty($review->image1)){
                                  $review->image1 = $imagePath;
                            }
                            else if(empty($review->image2)){
                                  $review->image2 = $imagePath;
                            }
                            else if(empty($review->image3)){
                                  $review->image3 = $imagePath;
                            }
                           
                            $i++;
                     }
         }

         $review->save();

         return back();
    }

    public function edit_review(Request $request){
         
         $review = Review::where('id',$request->id)->first();

           $data['new'] = [
                         'code' => 1,
                         'description' => $review->description,
                         'image' => $review->image,
                         'image1' => $review->image1,
                         'image2' => $review->image2,
                         'image3' => $review->image3,
                     ];

                return json_encode($data);
    }

}
