<?php

namespace App;

use App\Size;
use App\Color;
use App\Genus;
use App\Image;
use App\CartItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

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

    public function scopeGenusFilter($query, $filter)
    {
        if (isset($filter['genus'])) {
            $query->whereHas(
                'genus',
                fn (Builder $query) =>
                $query->whereIn('name', $filter['genus'])
            )->get();
        }
    }
    public function scopeSizeFilter($query, $filter)
    {
        if (isset($filter['size'])) {
            $query->whereHas(
                'size',
                fn (Builder $query) =>
                $query->whereIn('name', $filter['size'])
            )->get();
        }
    }
    public function scopeColorFilter($query, $filter)
    {
        if (isset($filter['color'])) {
            $query->whereHas(
                'color',
                fn (Builder $query) =>
                $query->whereIn('name', $filter['color'])
            )->get();
        }
    }
}
