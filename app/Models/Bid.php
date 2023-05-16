<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    protected $fillable =['car_auction_id','user_id','bid_amount','bid_time'];

    public function products(){
        return $this->belongsTo(Product::class);
    }
}
