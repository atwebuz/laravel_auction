<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['maker_id','name'];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function car_maker(){
        return $this->belongsTo(CarMaker::class);
    }
}
