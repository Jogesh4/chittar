<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Review extends Model
{

  use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reviews';

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}