<?php

use App\Size;
use App\Color;
use App\Genus;
use App\Image;
use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 100)->create()->each(function ($product) {
            $product->images()->save(factory(Image::class)->make());
            $product->images()->save(factory(Image::class)->make());
            $product->images()->save(factory(Image::class)->make());
            $product->images()->save(factory(Image::class)->make());
            // $product->color()->save(factory(Color::class)->make());
            // $product->genus()->save(factory(Genus::class)->make());
            // $product->size()->save(factory(Size::class)->make());
        });
    }
}
