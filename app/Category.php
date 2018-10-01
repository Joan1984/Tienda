<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //$categry->products 
    public function products()
    {
    	return $this->hasMany(Product::class);
    }
}
