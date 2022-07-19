<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\ProductInterface;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ProductVariationValue;
use App\Models\ProductVariation;
use App\Models\ProductVariationType;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use RealRashid\SweetAlert\Facades\Alert;
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
        $collections = $this->productRepository->collectionList();
        $variations = $this->productRepository->VariationTitle();
        $variationValue = $this->productRepository->VariationValue();
        return view('admin.product.create', compact('collections', 'variations', 'variationValue'));
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
    public function SingleVariationTypeAdd(Request $request){
        $fetchType = ProductVariationType::select('value')->where('value', $request->value)->where('product_id', $request->product_id)->first();
        if ($fetchType) {
            Alert::success('Success Title', 'Success Message');
            return redirect()->back();
        } else {
            $params = $request->except('_token');
            $data = $this->productRepository->SVTypeAdd($params);
            if ($data) {
                return redirect()->back();
            } else {
                return redirect()->back()->withInput($request->all());
            }
        }
        
    }
    public function SingleVariationTypeDelete(Request $request, $id){
        $this->productRepository->SVTypeDelete($id);
        return redirect()->back();
        
    }
    public function VariationAdd(Request $request){

        $request->validate([
            'title' => 'required',
            'value' => 'required',
        ]);
        $variationTitle = ProductVariation::where('id', $request->title)->first();
        $variationValue = ProductVariationValue::where('id', $request->value)->first();

        $ProductVariation = new ProductVariationType();
        $ProductVariation->product_id = $request->product_id;
        $ProductVariation->title = $variationTitle->title;
        $ProductVariation->value = $variationValue->value;
        $ProductVariation->save();

        return redirect()->back();
    }

    public function show(Request $request, $id)
    {
        $data = $this->productRepository->listById($id);
        $images = $this->productRepository->listImagesById($id);
        return view('admin.product.detail', compact('data', 'images'));
    }

    public function edit(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::select('name', 'id')->where('id', $product->cat_id)->first();
        $subcategories = SubCategory::select('name', 'id')->where('id', $product->sub_cat_id)->first();
        $collections = $this->productRepository->collectionList();
        $variations = $this->productRepository->VariationTitle();
        $data = $this->productRepository->listById($id);
        $productVariationGroup = ProductVariationType::select('id', 'title', 'status', 'value')->where('product_id', $id)->groupBy('title')->orderBy('id')->get();
        return view('admin.product.edit', compact('data', 'categories', 'collections', 'subcategories', 'variations', 'productVariationGroup'));
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
        $variationValue = ProductVariationValue::orderBy('value', 'asc')
        ->select('id', 'value')
        ->where('variation_id', $id)
        ->get();
        return response()->json(['value' => $variationValue]);
    }
    

}
