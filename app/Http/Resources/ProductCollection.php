<?php

namespace App\Http\Resources;

use App\Product;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    public $preserveKeys = true;

    // public $collects = 'App\Http\Resources\ProductResource';

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $this->collection->transform(function (Product $product) {
            return (new ProductResource($product));
        });


        return parent::toArray($request);
    }
}
