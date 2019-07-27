<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function users(){
    	return $this->belongsToMany(Product::class);
    }
    protected $fillable = ['product_name','product_price','product_size','product_colour','product_type'];
}
