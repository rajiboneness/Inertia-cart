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
    public function index(Request $request){
        $collections = $this->productRepository->getCollectionData();
        // $colData = $this->productRepository->getCollectionWiseCategory();
        
        return view('front.product.list', compact('collections'));
    }
    public function details(){
        return view('front.product.details');
    }
    
}
