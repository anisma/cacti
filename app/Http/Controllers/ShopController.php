<?php

namespace App\Http\Controllers;

use App\Size;
use App\Color;
use App\Genus;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $genera = Genus::orderBy('name', 'asc')->get();
        $colors = Color::orderBy('name', 'asc')->get();
        $sizes = Size::orderBy('name', 'asc')->get();

        $products = Product::orderBy('sold', 'desc')->paginate(9)->onEachSide(1);

        return view('shop.index', compact('products', 'genera', 'colors', 'sizes'));
    }
    public function show(Product $product)
    {
        $sizes = Size::orderBy('name', 'asc')->get();
        $relatedItems = Product::where('genus_id', $product->genus->id)->whereNotIn('id', [$product->id])->take(3)->get();

        return view('shop.show', compact('product', 'sizes', 'relatedItems'));
    }
}
