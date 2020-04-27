<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Genus extends Model
{
    public function Product()
    {
        return $this->hasMany(Product::class);
    }
}
