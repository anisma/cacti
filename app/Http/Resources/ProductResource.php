<?php

namespace App\Http\Resources;

use App\Http\Resources\ImageCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return
            [
                'id' => $this->id,
                'name' => $this->name,
                'genus' => $this->genus->name,
                'size' => $this->size->name,
                'color' => $this->color->name,
                'description' => $this->description,
                'price' => $this->price,
                'discount' => $this->discount,
                'discount_price' => $this->priceAfterDiscount($this->price, $this->discount),
                'stock' => $this->stock,
                'sold' => $this->sold,
                'image_preview' => $this->images[0]['image'],
                'images' => (new ImageCollection($this->images->keyBy('id'))),
                'quantity' => $this->whenPivotLoaded('cart_product', function () {
                    return $this->pivot->quantity;
                }),
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ];
    }

    private function priceAfterDiscount($price, $discount)
    {
        return $price * ((100 - $discount) / 100);
    }
}
