<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarAuction extends Model
{
    use HasFactory;

    protected $fillable =['product_id','start_time','end_time','description','is_salled'];

    public function products(){
        return $this->belongsTo(Product::class);
    }
    public function bids(){
        return $this->belongsTo(Bid::class);
    }

}
