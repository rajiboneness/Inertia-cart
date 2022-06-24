<?php 
namespace App\Repositories;

use App\Interfaces\CollectionInterface;
use App\Models\Collection;
use Illuminate\Support\Str;

class CollectionRepository implements CollectionInterface 
{

    public function getAllCollections() 
    {
        return Collection::all();
    }

    public function getCollectionById($collectionId) 
    {
        return Collection::findOrFail($collectionId);
    }
    // public function getCollectionBySlug($slug, array $request = null) 
    // {
    //     return Collection::where('slug', $slug)->with('ProductDetails')->first();
    // }

    public function deleteCollection($collectionId) 
    {
        Collection::destroy($collectionId);
    }

    public function createCollection(array $data) 
    {
        $upload_path = "uploads/collection/";
        $collection = collect($data);

        $modelDetails = new Collection;
        $modelDetails->name = $collection['name'];
        $modelDetails->description = $collection['description'];

        // generate slug
        $slug = Str::slug($collection['name'], '-');
        $slugExistCount = Collection::where('slug', $slug)->count();
        if ($slugExistCount > 0) $slug = $slug.'-'.($slugExistCount+1);
        $modelDetails->slug = $slug;
        // thumb image
        $image = $collection['image_path'];
        $imageName = time().".".mt_rand().".".$image->getClientOriginalName();
        $image->move($upload_path, $imageName);
        $uploadedImage = $imageName;
        $modelDetails->image_path = $upload_path.$uploadedImage;
        $modelDetails->save();
        return $modelDetails;
    }

    // public function updateCollection($id, array $newDetails) 
    // {
    //     $upload_path = "uploads/collection/";
    //     $modelDetails = Collection::findOrFail($id);
    //     $collection = collect($newDetails); 
    //     // dd($newDetails);

    //     $modelDetails->name = $collection['name'];
    //     $modelDetails->description = $collection['description'];
    //     // $modelDetails->slug = $collection['slug'];

    //     // if (in_array('image_path', $newDetails)) {
    //     //     $image = $collection['image_path'];
    //     //     $imageName = time().".".mt_rand().".".$image->getClientOriginalName();
    //     //     $image->move($upload_path, $imageName);
    //     //     $uploadedImage = $imageName;
    //     //     $modelDetails->image_path = $upload_path.$uploadedImage;
    //     // }

    //     // generate slug
    //     $slug = Str::slug($collection['name'], '-');
    //     $slugExistCount = Collection::where('slug', $slug)->count();
    //     if ($slugExistCount > 0) $slug = $slug.'-'.($slugExistCount+1);
    //     $modelDetails->slug = $slug;

    //     if (isset($newDetails['icon_path'])) {
    //         $image = $collection['icon_path'];
    //         $imageName = time().".".mt_rand().".".$image->getClientOriginalName();
    //         $image->move($upload_path, $imageName);
    //         $uploadedImage = $imageName;
    //         $modelDetails->icon_path = $upload_path.$uploadedImage;
    //     }

    //     if (isset($newDetails['sketch_icon'])) {
    //         $image = $collection['sketch_icon'];
    //         $imageName = time().".".mt_rand().".".$image->getClientOriginalName();
    //         $image->move($upload_path, $imageName);
    //         $uploadedImage = $imageName;
    //         $modelDetails->sketch_icon = $upload_path.$uploadedImage;
    //     }

    //     if (isset($newDetails['image_path'])) {
    //         $image = $collection['image_path'];
    //         $imageName = time().".".mt_rand().".".$image->getClientOriginalName();
    //         $image->move($upload_path, $imageName);
    //         $uploadedImage = $imageName;
    //         $modelDetails->image_path = $upload_path.$uploadedImage;
    //     }

    //     if (isset($newDetails['banner_image'])) {
    //         // dd('here');
    //         $bannerImage = $collection['banner_image'];
    //         $bannerImageName = time().".".mt_rand().".".$bannerImage->getClientOriginalName();
    //         $bannerImage->move($upload_path, $bannerImageName);
    //         $uploadedImage = $bannerImageName;
    //         $modelDetails->banner_image = $upload_path.$uploadedImage;
    //     }

    //     $modelDetails->save();

    //     return $modelDetails;
    // }

    // public function toggleStatus($id){
    //     $collection = Collection::findOrFail($id);

    //     $status = ( $collection->status == 1 ) ? 0 : 1;
    //     $collection->status = $status;
    //     $collection->save();

    //     return $collection;
    // }
}