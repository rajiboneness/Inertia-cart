<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Interfaces\CategoryInterface;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;

class CategoryController extends Controller
{
    public function __construct(CategoryInterface $categoryRepository){
        $this->categoryRepository = $categoryRepository;
    } 
    public function subCategorylist($slug){
        $data = $this->categoryRepository->getSubCategoryBySlug($slug);
        if ($data) {
            return view('front.subcategory.list', compact('data'));
        } else {
            return view('front.404');
        }
    }
    public function SubCatWiseProduct($cat, $slug){
        $items = $this->categoryRepository->ProductBySubCategory($slug);
        if($items){
            return view('front.subcategory.details', compact('items'));
        }else{
            return view('front.404');
        }
    }
}
