<?php

namespace App\Repositories;

use App\Interfaces\SubcategoryInterface;
use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class SubCategoryRepository implements SubcategoryInterface 
{
    // use UploadAble;

    public function getAllSubcategories() 
    {
        return SubCategory::all();
    }

    public function getAllCategories() 
    {
        return Category::all();
    }

    public function getSubcategoryById($subcategoryId) 
    {
        return SubCategory::findOrFail($subcategoryId);
    }

    public function deleteSubcategory($subcategoryId) 
    {
        $data = SubCategory::findOrFail($subcategoryId);
        if($data){
            $data->delete();
            return $data;
        }
    }

    public function createSubcategory(array $subcategoryDetails) 
    {
        $collection = collect($subcategoryDetails);

        $category = new SubCategory;
        $category->cat_id = $collection['cat_id'];
        $category->name = $collection['name'];
        $category->description = $collection['description'];
        $category->slug = $collection['slug'];

        $upload_path = "uploads/sub-category/";
        $image = $collection['image_path'];
        $imageName = time().".".$image->getClientOriginalName();
        $image->move($upload_path, $imageName);
        $uploadedImage = $imageName;
        $category->image_path = $upload_path.$uploadedImage;

        $category->save();

        return $category;
    }

    public function updateSubcategory($subcategoryId, array $newDetails) 
    {
        $category = SubCategory::findOrFail($subcategoryId);
        $collection = collect($newDetails); 
        // dd($newDetails);

        if (!empty($collection['cat_id'])) {
            $category->cat_id = $collection['cat_id'];
        }
        $category->name = $collection['name'];
        $category->description = $collection['description'];
        $category->slug = $collection['slug'];

        // if (in_array('image_path', $newDetails)) {
        if (isset($newDetails['image_path'])) {
            // dd('here');
            $upload_path = "uploads/sub-category/";
            $image = $collection['image_path'];
            $imageName = time().".".$image->getClientOriginalName();
            $image->move($upload_path, $imageName);
            $uploadedImage = $imageName;
            $category->image_path = $upload_path.$uploadedImage;
        }
        // dd('outside');

        $category->save();

        return $category;
    }

    public function toggleStatus($id){
        $category = SubCategory::findOrFail($id);

        $status = ( $category->status == 1 ) ? 0 : 1;
        $category->status = $status;
        $category->save();

        return $category;
    }
}