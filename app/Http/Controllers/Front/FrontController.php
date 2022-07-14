<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Banner;
use App\Models\SocialLink;
use App\Models\Product;

class FrontController extends Controller
{
    public function index(Request $request){
        $categories = Category::orderBy('id')->take(12)->get();
        // $mobile = SocialLink::select('link')->where('id', 3)->first();
        // $email = SocialLink::select('link')->where('id', 4)->first();
        $collections = Collection::orderBy('name', 'asc')->take(12)->get();
        $banner = Banner::latest('id')->get();
        $products = Product::latest('is_trending', 'id')->take(6)->get();
        return view('front.welcome', compact('categories', 'collections', 'products', 'banner'));
    }

}
