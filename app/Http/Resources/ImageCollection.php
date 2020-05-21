<?php

namespace App\Http\Resources;

use App\Image;
use App\Http\Resources\ImageResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ImageCollection extends ResourceCollection
{
    // public $collects = 'App\Http\Resources\ImageResource';

    public $preserveKeys = true;

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $this->collection->transform(function (Image $image) {
            return (new ImageResource($image));
        })->groupBy('id');
        return parent::toArray($request);
    }
}
