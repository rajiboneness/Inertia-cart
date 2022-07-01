<?php

namespace App\Repositories;

use App\Interfaces\ProductInterface;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Collection;
// use App\Traits\UploadAble;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProductRepository implements ProductInterface 
{
    // use UploadAble;

    public function listAll() 
    {
        return Product::all();
    }

    public function categoryList() 
    {
        return Category::all();
    }

    public function subCategoryList() 
    {
        return SubCategory::all();
    }

    public function collectionList() 
    {
        return Collection::all();
    }
    
    public function listById($id) 
    {
        return Product::findOrFail($id);
    }

    public function listBySlug($slug) 
    {
        return Product::where('slug', $slug)->with('category', 'subCategory', 'collection', 'colorSize')->first();
    }

    // public function relatedProducts($id) 
    // {
    //     $product = Product::findOrFail($id);
    //     $cat_id = $product->cat_id;
    //     return Product::where('cat_id', $cat_id)->where('id', '!=', $id)->with('category', 'subCategory', 'collection', 'colorSize')->get();
    // }

    // public function listImagesById($id) 
    // {
    //     return ProductImage::where('product_id', $id)->latest('id')->get();
    // }

    public function create(array $data) 
    {
            $collectedData = collect($data);
            $newEntry = new Product;
            $newEntry->cat_id = $collectedData['cat_id'];
            $newEntry->sub_cat_id = $collectedData['sub_cat_id'];
            $newEntry->collection_id = $collectedData['collection_id'];
            $newEntry->name = $collectedData['name'];
            $newEntry->short_desc = $collectedData['short_desc'];
            $newEntry->desc = $collectedData['desc'];
            $newEntry->price = $collectedData['price'];
            $newEntry->offer_price = $collectedData['offer_price'];
            $newEntry->meta_title = $collectedData['meta_title'];
            $newEntry->meta_desc = $collectedData['meta_desc'];
            $newEntry->meta_keyword = $collectedData['meta_keyword'];

            // slug generate
            $slug = \Str::slug($collectedData['name'], '-');
            $slugExistCount = Product::where('slug', $slug)->count();
            if ($slugExistCount > 0) $slug = $slug.'-'.($slugExistCount+1);
            $newEntry->slug = $slug;

            // main image handling
            $upload_path = "uploads/product/";
            $image = $collectedData['image'];
            $imageName = time().".".$image->getClientOriginalName();
            $image->move($upload_path, $imageName);
            $uploadedImage = $imageName;
            $newEntry->image = $upload_path.$uploadedImage;
            // dd($newEntry);
            $newEntry->save();
            return $newEntry;
    }

    public function update($id, array $newDetails) 
    {
            $upload_path = "uploads/product/";
            $updatedEntry = Product::findOrFail($id);
            // dd($updatedEntry);
            $collectedData = collect($newDetails); 
            if (!empty($collectedData['cat_id'])) $updatedEntry->cat_id = $collectedData['cat_id'];
            if (!empty($collectedData['sub_cat_id'])) $updatedEntry->sub_cat_id = $collectedData['sub_cat_id'];
            if (!empty($collectedData['collection_id'])) $updatedEntry->collection_id = $collectedData['collection_id'];
            $updatedEntry->name = $collectedData['name'];
            $updatedEntry->short_desc = $collectedData['short_desc'];
            $updatedEntry->desc = $collectedData['desc'];
            $updatedEntry->price = $collectedData['price'];
            $updatedEntry->offer_price = $collectedData['offer_price'];

            // slug generate
            $slug = \Str::slug($collectedData['name'], '-');
            $slugExistCount = Product::where('slug', $slug)->count();
            if ($slugExistCount > 0) $slug = $slug.'-'.($slugExistCount+1);

            $updatedEntry->slug = $slug;
            $updatedEntry->meta_title = $collectedData['meta_title'];
            $updatedEntry->meta_desc = $collectedData['meta_desc'];
            $updatedEntry->meta_keyword = $collectedData['meta_keyword'];

            if (isset($newDetails['image'])) {
                // delete old image
                if (Storage::exists($updatedEntry->image)) unlink($updatedEntry->image);

                $image = $collectedData['image'];
                $imageName = time().".".$image->getClientOriginalName();
                $image->move($upload_path, $imageName);
                $uploadedImage = $imageName;
                $updatedEntry->image = $upload_path.$uploadedImage;
            }

            $updatedEntry->save();
            return $updatedEntry;
    }

    public function toggle($id){
        $updatedEntry = Product::findOrFail($id);

        $status = ( $updatedEntry->status == 1 ) ? 0 : 1;
        $updatedEntry->status = $status;
        $updatedEntry->save();

        return $updatedEntry;
    }

    // public function sale($id){
    //     $saleExist = Sale::where('product_id', $id)->first();

    //     if ($saleExist) {
    //         $resp = Sale::where(['product_id' => $id])->delete();
    //         return $resp;
    //     } else {
    //         $resp = Sale::create(['product_id' => $id]);
    //         return $resp;
    //     }
    // }

    public function delete($id) 
    {
        $data = Product::findOrFail($id);
        if($data){
            $data->delete();
            return $data;
        }
    }

    // public function deleteSingleImage($id) 
    // {
    //     ProductImage::destroy($id);
    // }

    // public function wishlistCheck($productId) 
    // {
    //     $ip = $_SERVER['REMOTE_ADDR'];
    //     $data = Wishlist::where('product_id', $productId)->where('ip', $ip)->first();
    //     return $data;
    // }

    // public function primaryColorSizes($productId)
    // {
    //     $primaryColor = ProductColorSize::select('color')->where('product_id', $productId)->first();

    //     if ($primaryColor) {
    //         $sizes = ProductColorSize::where('product_id', $productId)->where('color', $primaryColor->color)->get();
    //         return $sizes;
    //     }
    //     return false;
    // }
}