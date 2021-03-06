<?php

namespace App;

use App\Size;
use App\Color;
use App\Genus;
use App\Image;
use App\CartItem;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function genus()
    {
        return $this->belongsTo(Genus::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class)->withPivot('quantity')->withTimestamps();
    }
}
