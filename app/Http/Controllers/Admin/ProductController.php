<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\ProductInterface;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ProductVariationValue;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    public function __construct(ProductInterface $productRepository){
        $this->productRepository = $productRepository;
    }

    public function index(Request $request) 
    {
        $data = $this->productRepository->listAll();
        return view('admin.product.index', compact('data'));
    }

    public function create(Request $request) 
    {
        $categories = $this->productRepository->categoryList();
        $sub_categories = $this->productRepository->subCategoryList();
        $collections = $this->productRepository->collectionList();
        $variations = $this->productRepository->VariationTitle();
        return view('admin.product.create', compact('categories', 'sub_categories', 'collections', 'variations'));
    }

    public function store(Request $request) 
    {
        $request->validate([
            "cat_id" => "required|integer",
            // "sub_cat_id" => "required|integer",
            // "collection_id" => "required|integer",
            "name" => "required|string|max:255",
            "short_desc" => "required",
            // "desc" => "required",
            "price" => "required|integer",
            // "offer_price" => "required|integer",
            // "meta_title" => "required",
            // "meta_desc" => "required",
            // "meta_keyword" => "required",
            "image" => "required",
            "product_images" => "nullable|array",
            "title" => "nullable|array",
            "value" => "nullable|array",
        ]);

        $params = $request->except('_token');
        $storeData = $this->productRepository->create($params);

        if ($storeData) {
            return redirect()->route('admin.product.index');
        } else {
            return redirect()->route('admin.product.create')->withInput($request->all());
        }
    }

    public function show(Request $request, $id)
    {
        $data = $this->productRepository->listById($id);
        $images = $this->productRepository->listImagesById($id);
        return view('admin.product.detail', compact('data', 'images'));
    }

    public function edit(Request $request, $id)
    {
        $categories = $this->productRepository->categoryList();
        $sub_categories = $this->productRepository->subCategoryList();
        $collections = $this->productRepository->collectionList();
        $data = $this->productRepository->listById($id);
        // $images = $this->productRepository->listImagesById($id);
        return view('admin.product.edit', compact('data', 'categories', 'sub_categories', 'collections'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "cat_id" => "nullable|integer",
            "sub_cat_id" => "nullable|integer",
            "collection_id" => "nullable|integer",
            "name" => "required|string|max:255",
            "short_desc" => "required",
            // "desc" => "required",
            "price" => "required|integer",
            // "offer_price" => "required|integer",
            // "meta_title" => "required",
            // "meta_desc" => "required",
            // "meta_keyword" => "required",
            "image" => "nullable",
            // "product_images" => "nullable|array",
        ]);

        $params = $request->except('_token');
        $storeData = $this->productRepository->update($id, $params);

        if ($storeData) {
            return redirect()->route('admin.product.index');
        } else {
            return redirect()->route('admin.product.update', $id)->withInput($request->all());
        }
    }

    public function status(Request $request, $id)
    {
        $storeData = $this->productRepository->toggle($id);

        if ($storeData) {
            return redirect()->route('admin.product.index');
        } else {
            return redirect()->route('admin.product.create')->withInput($request->all());
        }
    }

    // public function sale(Request $request, $id)
    // {
    //     $storeData = $this->productRepository->sale($id);
    //         return redirect()->route('admin.product.index');
    // }

    public function destroy(Request $request, $id) 
    {
        $this->productRepository->delete($id);

        return redirect()->route('admin.product.index');
    }
    public function getCategory($id){
        $catData = Category::orderby("name","asc")
        ->select('id','name')
        ->where('collection',$id)
        ->get();
        return response()->json(['cat' => $catData]);
    }

    public function getSubCategory($id){
        $subcatData = SubCategory::orderby("name","asc")
        ->select('id','name')
        ->where('cat_id',$id)
        ->get();
        return response()->json(['sub' => $subcatData]);
    }
    public function getVariationValue($id){
        $valueData = ProductVariationValue::orderby("id", "ASC")->select('id','value')->where('variation_id', $id)->get();
        return response()->json(['value' => $valueData]);
    }

}
