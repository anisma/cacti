<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        
        $products = Product::paginate(9);

        return view('shop.index', compact('products'));
    }
    public function show(Product $product){
        
        $relatedItems = Product::where('genus_id', $product->genus->id)->whereNotIn('id',[$product->id])->take(3)->get();
       
        return view('shop.show',compact('product','relatedItems'));
    }

    
}
