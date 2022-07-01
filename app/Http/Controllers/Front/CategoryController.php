<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Interfaces\CategoryInterface;
use Illuminate\Http\Request;
use App\Models\Category;

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
}
