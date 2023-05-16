<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','brand_id', 'name', 'paragraph', 'price', 'color', 'image','reads','date_of_year','millage','transmission','oil_type','condition','address'];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function brand(){
        return $this->belongsTo(Category::class);
    }

    public function gallery(){
        return $this->hasMany(Gallery::class);
    }

}
