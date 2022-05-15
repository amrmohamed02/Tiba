<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    public $table = "characteristics";
    public function product()
    {
       return $this->belongsTo('App\Models\Product');
    }
    use HasFactory;
}
