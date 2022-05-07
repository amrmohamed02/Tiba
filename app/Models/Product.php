<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = "products";
    public function dosings()
    {
        return $this->hasMany('App\Models\Dosing');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    use HasFactory;
}
