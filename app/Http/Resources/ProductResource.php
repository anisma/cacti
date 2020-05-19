<?php

namespace App\Http\Resources;

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
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'actual_price' => $this->price,
            'stock' => $this->stock,
            'discount' => $this->discount,
            'sold' => $this->sold,
            'images' => ImageResource::collection($this->images),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'quantity' => $this->whenPivotLoaded('cart_product', function () {
                return $this->pivot->quantity;
            }),
            'price' => ($this->price * $this->discount) + $this->price,
            'genus' => GenusResource::make($this->genus),
            'size' => SizeResource::make($this->size),
            'color' => ColorResource::make($this->color),
        ];
    }
}
