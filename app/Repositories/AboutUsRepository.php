<?php

namespace App\Repositories;

use App\Interfaces\AboutUsInterface;
use App\Models\Aboutus;
use Illuminate\Http\UploadedFile;

class AboutUsRepository implements AboutUsInterface 
{

    public function getAboutus() 
    {
        return Aboutus::all();
    }
    
    public function getAboutById($aboutId) 
    {
        return Aboutus::findOrFail($aboutId);
    }


    // public function deleteCategory($categoryId) 
    // {
    //     $data = Category::findOrFail($categoryId);
    //     if($data){
    //         $data->delete();
    //         return $data;
    //     }
    // }

    public function createAboutus(array $aboutDetails) 
    {
        $upload_path = "uploads/about/";
        $collection = collect($aboutDetails);

        $about = new Aboutus;
        $about->title = $collection['title'];
        $about->desc = $collection['desc'];

        // thumb image
        $image = $collection['image'];
        $imageName = time().".".mt_rand().".".$image->getClientOriginalName();
        $image->move($upload_path, $imageName);
        $uploadedImage = $imageName;
        $about->image = $upload_path.$uploadedImage;

        $about->save();

        return $about;
    }

//     public function updateBanner($aboutId, array $newDetails) 
//     {
//         $upload_path = "uploads/about/";
//         $about = Aboutus::findOrFail($aboutId);
//         $collection = collect($newDetails); 

//         $about->title = $collection['title'];
//         $about->desc = $collection['desc'];

//         if (isset($newDetails['image'])) {
//             // dd('here');
//             $image = $collection['image'];
//             $imageName = time().".".mt_rand().".".$image->getClientOriginalName();
//             $image->move($upload_path, $imageName);
//             $uploadedImage = $imageName;
//             $about->image = $upload_path.$uploadedImage;
//         }
//         $about->save();

//         return $about;
//     }

//     public function toggleStatus($id){
//         $about = Aboutus::findOrFail($id);
//         $status = ($about->status == 1) ? 0 : 1;
//         $about->status = $status;
//         $about->save();
//         return $about;
//     }

//     public function DeleteAboutUs($id){
//         $about = Aboutus::findOrFail($id);
//         if($about){
//             $about->delete();
//             return $about;
//         }
//     }
}