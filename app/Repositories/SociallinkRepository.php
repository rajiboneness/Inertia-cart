<?php

namespace App\Repositories;

use App\Interfaces\SociallinkInterface;
use App\Models\SocialLink;
use Illuminate\Http\UploadedFile;

class SociallinkRepository implements SociallinkInterface 
{
    public function getAllSociallinks() 
    {
        return SocialLink::all();
    }
    
    public function getSocialById($SocialId) 
    {
        return SocialLink::findOrFail($SocialId);
    }
    public function createSocialLinks(array $socialDetails) 
    {
        $upload_path = "uploads/site/";
        $collection = collect($socialDetails);

        $Social = new SocialLink;
        $Social->name = $collection['name'];
        $Social->link = $collection['link'];

        // thumb image
        $image = $collection['image'];
        $imageName = time().".".mt_rand().".".$image->getClientOriginalName();
        $image->move($upload_path, $imageName);
        $uploadedImage = $imageName;
        $Social->image = $upload_path.$uploadedImage;

        $Social->save();

        return $Social;
    }

    public function updateSocial($socialId, array $newDetails) 
    {
        $upload_path = "uploads/site/";
        $social = SocialLink::findOrFail($socialId);
        $collection = collect($newDetails); 

        $social->name = $collection['name'];
        $social->link = $collection['link'];

        if (isset($newDetails['image'])) {
            $image = $collection['image'];
            $imageName = time().".".mt_rand().".".$image->getClientOriginalName();
            $image->move($upload_path, $imageName);
            $uploadedImage = $imageName;
            $social->image = $upload_path.$uploadedImage;
        }
        $social->save();

        return $social;
    }

    public function toggleStatus($id){
        $social = SocialLink::findOrFail($id);
        $status = ($social->status == 1) ? 0 : 1;
        $social->status = $status;
        $social->save();
        return $social;
    }

    public function DeleteSocial($id){
        $social = SocialLink::findOrFail($id);
        if($social){
            $social->delete();
            return $social;
        }
    }
}