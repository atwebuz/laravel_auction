<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarMaker extends Model
{
    use HasFactory;

    protected $fillable = ['name','country'];

    public function brands(){
        return $this->hasMany(Brand::class);
    }

}
