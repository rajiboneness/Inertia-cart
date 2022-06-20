<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('front.product.list');
    }
    public function details(){
        return view('front.product.details');
    }
}
