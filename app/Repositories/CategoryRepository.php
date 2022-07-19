<?php

namespace App\Repositories;

use App\Interfaces\CategoryInterface;
use App\Models\Category;
use App\Models\Collection;
use App\Models\SubCategory;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class CategoryRepository implements CategoryInterface 
{
    // use UploadAble;

    public function getAllCategories() 
    {
        return Category::all();
    }
    public function getAllCollections(){
        return Collection::orderBy('name','ASC')->get();
    }
    
    public function getCategoryById($categoryId) 
    {
        return Category::findOrFail($categoryId);
    }

    public function getSubCategoryBySlug($slug, array $request = null) 
    {
        return Category::where('slug', $slug)->with('SubCategoryDetails')->first();
    }

    public function ProductBySubCategory($slug, array $request = null)
    {
        return SubCategory::where('slug', $slug)->with('product', 'category')->first();
    }

    public function deleteCategory($categoryId) 
    {
        $data = Category::findOrFail($categoryId);
        if($data){
            $data->delete();
            return $data;
        }
    }

    public function createCategory(array $categoryDetails) 
    {
        $upload_path = "uploads/category/";
        $collection = collect($categoryDetails);

        $category = new Category;
        $category->name = $collection['name'];
        $category->collection = $collection['call_id'];
        $category->description = $collection['description'];

        // generate slug
        $slug = Str::slug($collection['name'], '-');
        $slugExistCount = Category::where('slug', $slug)->count();
        if ($slugExistCount > 0) $slug = $slug.'-'.($slugExistCount+1);
        $category->slug = $slug;

        // thumb image
        $image = $collection['image_path'];
        $imageName = time().".".mt_rand().".".$image->getClientOriginalName();
        $image->move($upload_path, $imageName);
        $uploadedImage = $imageName;
        $category->image_path = $upload_path.$uploadedImage;

        $category->save();

        return $category;
    }

    public function updateCategory($categoryId, array $newDetails) 
    {
        $upload_path = "uploads/category/";
        $category = Category::findOrFail($categoryId);
        $collection = collect($newDetails); 

        $category->name = $collection['name'];
        $category->collection = $collection['call_id'];
        $category->description = $collection['description'];

        // generate slug
        $slug = Str::slug($collection['name'], '-');
        $slugExistCount = Category::where('slug', $slug)->count();
        if ($slugExistCount > 0) $slug = $slug.'-'.($slugExistCount+1);
        $category->slug = $slug;

        if (isset($newDetails['image_path'])) {
            // dd('here');
            $image = $collection['image_path'];
            $imageName = time().".".mt_rand().".".$image->getClientOriginalName();
            $image->move($upload_path, $imageName);
            $uploadedImage = $imageName;
            $category->image_path = $upload_path.$uploadedImage;
        }
        $category->save();

        return $category;
    }

    public function toggleStatus($id){
        $category = Category::findOrFail($id);

        $status = ( $category->status == 1 ) ? 0 : 1;
        $category->status = $status;
        $category->save();

        return $category;
    }

}