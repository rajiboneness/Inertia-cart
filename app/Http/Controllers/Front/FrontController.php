<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;

class FrontController extends Controller
{
    public function index(Request $request){
        $categories = Category::latest('id')->take(12)->get();
        $collections = Collection::latest('id')->take(9)->get();
        $products = Product::latest('is_trending', 'id')->take(6)->get();
        return view('front.welcome', compact('categories', 'collections', 'products'));
    }
}
