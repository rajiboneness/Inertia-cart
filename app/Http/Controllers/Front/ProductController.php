<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Interfaces\ProductInterface;
use App\Models\Collection;
use App\Models\Category;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct(ProductInterface $productRepository){
        $this->productRepository = $productRepository;
    } 

    public function details($slug){
        $data = $this->productRepository->ProductDetails($slug);
        // dd($data);
        if ($data) {
            return view('front.product.details', compact('data'));
        } else {
            return view('front.404');
        }
    }
    
}
