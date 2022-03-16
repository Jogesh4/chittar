<?php

namespace App\Listeners;

use IlluminateAuthEventsLogin;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Auth\Events\Login;

use App\Models\CartItem;
use App\Models\Item;

class LoginSuccessful
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \IlluminateAuthEventsLogin  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $userID = $event->user->id;
        $cartItems = CartItem::where('user_id', $userID)->get();

        if($cartItems->count() > 0) {
            foreach($cartItems as $cartItem){
                $item = Item::findOrFail($cartItem->item_id);
                \Cart::session($userID)->add(array(
                    'id' => $item->id,
                    'name' => $item->name,
                    'price' => $item->price,
                    'quantity' => 1,
                    'attributes' => array(),
                    'associatedModel' => $item
                ));
            }
        }
    }
}
