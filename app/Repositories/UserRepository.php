<?php

namespace App\Repositories;

use App\Interfaces\UserInterface;
use App\User;
use App\Models\Address;
use App\Models\Order;
use App\Models\Product;
use App\Models\Wishlist;
use App\Models\Coupon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserRepository implements UserInterface 
{
    public function __construct() {
        $this->ip = $_SERVER['REMOTE_ADDR'];
    }

    public function listAll() 
    {
        return User::all();
    }

    public function listById($id) 
    {
        return User::findOrFail($id);
    }

    public function create(array $data) 
    {
        // DB::beginTransaction();

        // try {
            $collectedData = collect($data);

            $full_name = '';
            if (isset($data['fname'])) {
                $full_name = $collectedData['fname'].' '.$collectedData['lname'];
            }

            $newEntry = new User;
            $newEntry->fname = $collectedData['fname'] ?? NULL;
            $newEntry->lname = $collectedData['lname'] ?? NULL;
            $newEntry->name = $full_name;
            $newEntry->email = $collectedData['email'];
            $newEntry->mobile = $collectedData['mobile'];
            $newEntry->gender = $collectedData['gender'] ?? NULL;
            $newEntry->password = Hash::make($collectedData['password']);

             // Profile Image
             $upload_path = "uploads/User/";
             $image = $collectedData['image'];
             $imageName = time().".".$image->getClientOriginalName();
             $image->move($upload_path, $imageName);
             $uploadedImage = $imageName;
             $newEntry->image = $upload_path.$uploadedImage;

            $newEntry->save();


            DB::commit();

            return true;
        // } catch (\Throwable $th) {
        //     //throw $th;

        //     DB::rollback();
        //     return false;
        // }
    }

    public function update($id, array $newDetails) 
    {
        $upload_path = "uploads/User/";
        $updatedEntry = User::findOrFail($id);
        $collectedData = collect($newDetails);
        $updatedEntry->fname = $collectedData['fname'];
        $updatedEntry->lname = $collectedData['lname'];
        $updatedEntry->mobile = $collectedData['mobile'];
        if (!empty($collectedData['gender'])) {
            $updatedEntry->gender = $collectedData['gender'];
        }
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
        $updatedEntry = User::findOrFail($id);

        $status = ( $updatedEntry->status == 1 ) ? 0 : 1;
        $updatedEntry->status = $status;
        $updatedEntry->save();

        return $updatedEntry;
    }

    public function deleteUser($id) 
    {
        $data = User::findOrFail($id);
        if($data){
            $data->delete();
            return $data;
        }
    }

    public function addressById($id) 
    {
        return Address::where('user_id', $id)->get();
    }

    public function addressCreate(array $data) 
    {
        $collectedData = collect($data);
        $newEntry = new Address;
        $newEntry->user_id = $collectedData['user_id'];
        $newEntry->address = $collectedData['address'];
        $newEntry->landmark = $collectedData['landmark'];
        $newEntry->lat = $collectedData['lat'];
        $newEntry->lng = $collectedData['lng'];
        $newEntry->state = $collectedData['state'];
        $newEntry->city = $collectedData['city'];
        $newEntry->pin = $collectedData['pin'];
        $newEntry->pin = $collectedData['pin'];
        $newEntry->country = $collectedData['country'];
        $newEntry->save();

        return $newEntry;
    }

    public function updateProfile(array $data) 
    {
        $collectedData = collect($data);
        $updateEntry = User::findOrFail(Auth::guard('web')->user()->id);
        $updateEntry->fname = $collectedData['fname'];
        $updateEntry->lname = $collectedData['lname'];
        $updateEntry->name = $collectedData['fname'].' '.$collectedData['lname'];
        $updateEntry->save();

        return $updateEntry;
    }

    public function updatePassword(array $data) 
    {
        $collectedData = collect($data);
        $userExists = User::findOrFail(Auth::guard('web')->user()->id);

        if ($userExists) {
            if (Hash::check($collectedData['old_password'], $userExists->password)) {
                $userExists->password = Hash::make($collectedData['new_password']);
                $userExists->save();
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function orderDetails() 
    {
        $data = Order::where('email', Auth::guard('web')->user()->email)->latest('id')->get();
        return $data;
    }

    public function recommendedProducts() 
    {
        $data = Product::latest('is_best_seller', 'id')->get();
        return $data;
    }

    public function wishlist()
    {
        $data = Wishlist::where('ip', $this->ip)->get();
        return $data;
    }

    public function couponList()
    {
        $data = Coupon::orderBy('end_date', 'desc')->get();
        return $data;
    }
}