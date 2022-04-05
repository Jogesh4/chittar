<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function shipping()
    {
        return $this->belongsTo(Address::class,'shipping_address');
    }

    public function billing()
    {
        return $this->belongsTo(Address::class,'billing_address');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
