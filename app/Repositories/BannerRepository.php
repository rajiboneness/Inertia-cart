<?php

namespace App\Repositories;

use App\Interfaces\BannerInterface;
use App\Models\Banner;
use Illuminate\Http\UploadedFile;

class BannerRepository implements BannerInterface 
{
    // use UploadAble;

    public function getAllBanners() 
    {
        return Banner::all();
    }
    
    public function getBannerById($bannerId) 
    {
        return Banner::findOrFail($bannerId);
    }


    // public function deleteCategory($categoryId) 
    // {
    //     $data = Category::findOrFail($categoryId);
    //     if($data){
    //         $data->delete();
    //         return $data;
    //     }
    // }

    public function createBanner(array $bannerDetails) 
    {
        $upload_path = "uploads/banner/";
        $collection = collect($bannerDetails);

        $banner = new Banner;
        $banner->title = $collection['title'];
        $banner->link = $collection['link'];

        // thumb image
        $image = $collection['image'];
        $imageName = time().".".mt_rand().".".$image->getClientOriginalName();
        $image->move($upload_path, $imageName);
        $uploadedImage = $imageName;
        $banner->image = $upload_path.$uploadedImage;

        $banner->save();

        return $banner;
    }

    public function updateBanner($bannerId, array $newDetails) 
    {
        $upload_path = "uploads/banner/";
        $banner = Banner::findOrFail($bannerId);
        $collection = collect($newDetails); 

        $banner->title = $collection['title'];
        $banner->link = $collection['link'];

        if (isset($newDetails['image'])) {
            // dd('here');
            $image = $collection['image'];
            $imageName = time().".".mt_rand().".".$image->getClientOriginalName();
            $image->move($upload_path, $imageName);
            $uploadedImage = $imageName;
            $banner->image = $upload_path.$uploadedImage;
        }
        $banner->save();

        return $banner;
    }

    public function toggleStatus($id){
        $banner = Banner::findOrFail($id);
        $status = ($banner->status == 1) ? 0 : 1;
        $banner->status = $status;
        $banner->save();
        return $banner;
    }

    public function DeleteBanner($id){
        $banner = Banner::findOrFail($id);
        if($banner){
            $banner->delete();
            return $banner;
        }
    }
}