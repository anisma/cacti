<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        $featuredItems = Product::orderBy('updated_at','asc')->take(3)->get();
        return view('home.index', compact('featuredItems'));
    }
}
