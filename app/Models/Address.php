<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Address extends Model
{

  use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'addresses';

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}