<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function Product()
    {
        return $this->hasMany(Product::class);
    }
}
