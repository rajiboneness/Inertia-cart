<?php

namespace App\Repositories;

use App\Interfaces\OrderInterface;
use App\Models\Order;
use App\Traits\UploadAble;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class OrderRepository implements OrderInterface 
{
    use UploadAble;

    public function listAll() 
    {
        return Order::latest('id')->get();
    }

    public function listById($id) 
    {
        return Order::findOrFail($id);
    }

    public function listByStatus($status) 
    {
        return Order::latest('id')->where('status', $status)->get();
    }

    // public function create(array $data) 
    // {
    //     DB::beginTransaction();

    //     try {
    //         $collectedData = collect($data);
    //         $newEntry = new Order;
    //         $newEntry->ip = $collectedData['ip'];

    //         $newEntry->user_id = $collectedData['user_id'];
    //         $newEntry->fname = $collectedData['fname'];
    //         $newEntry->lname = $collectedData['lname'];
    //         $newEntry->email = $collectedData['email'];
    //         $newEntry->mobile = $collectedData['mobile'];
    //         $newEntry->alt_mobile = $collectedData['alt_mobile'];

    //         $newEntry->billing_address_id = $collectedData['billing_address_id'];
    //         $newEntry->billing_address = $collectedData['billing_address'];
    //         $newEntry->billing_landmark = $collectedData['billing_landmark'];
    //         $newEntry->billing_country = $collectedData['billing_country'];
    //         $newEntry->billing_state = $collectedData['billing_state'];
    //         $newEntry->billing_city = $collectedData['billing_city'];
    //         $newEntry->billing_pin = $collectedData['billing_pin'];

    //         $newEntry->shipping_address_id = $collectedData['shipping_address_id'];
    //         $newEntry->shipping_address = $collectedData['shipping_address'];
    //         $newEntry->shipping_landmark = $collectedData['shipping_landmark'];
    //         $newEntry->shipping_country = $collectedData['shipping_country'];
    //         $newEntry->shipping_state = $collectedData['shipping_state'];
    //         $newEntry->shipping_city = $collectedData['shipping_city'];
    //         $newEntry->shipping_pin = $collectedData['shipping_pin'];

    //         $newEntry->amount = $collectedData['amount'];
    //         $newEntry->tax_amount = $collectedData['tax_amount'];
    //         $newEntry->discount_amount = $collectedData['discount_amount'];
    //         $newEntry->coupon_code_id = $collectedData['coupon_code_id'];
    //         $newEntry->final_amount = $collectedData['final_amount'];
    //         $newEntry->gst_no = $collectedData['gst_no'];

    //         DB::commit();
    //         return $newEntry;
    //     } catch (\Throwable $th) {
    //         // throw $th;
    //         DB::rollback();
    //     }
    // }

    // public function update($id, array $newDetails) 
    // {
    //     DB::beginTransaction();

    //     try {
    //         $updatedEntry = Order::findOrFail($id);
    //         $collectedData = collect($newDetails);

    //         $updatedEntry->user_id = $collectedData['user_id'];
    //         $updatedEntry->fname = $collectedData['fname'];
    //         $updatedEntry->lname = $collectedData['lname'];
    //         $updatedEntry->email = $collectedData['email'];
    //         $updatedEntry->mobile = $collectedData['mobile'];
    //         $updatedEntry->alt_mobile = $collectedData['alt_mobile'];

    //         $updatedEntry->billing_address_id = $collectedData['billing_address_id'];
    //         $updatedEntry->billing_address = $collectedData['billing_address'];
    //         $updatedEntry->billing_landmark = $collectedData['billing_landmark'];
    //         $updatedEntry->billing_country = $collectedData['billing_country'];
    //         $updatedEntry->billing_state = $collectedData['billing_state'];
    //         $updatedEntry->billing_city = $collectedData['billing_city'];
    //         $updatedEntry->billing_pin = $collectedData['billing_pin'];

    //         $updatedEntry->shipping_address_id = $collectedData['shipping_address_id'];
    //         $updatedEntry->shipping_address = $collectedData['shipping_address'];
    //         $updatedEntry->shipping_landmark = $collectedData['shipping_landmark'];
    //         $updatedEntry->shipping_country = $collectedData['shipping_country'];
    //         $updatedEntry->shipping_state = $collectedData['shipping_state'];
    //         $updatedEntry->shipping_city = $collectedData['shipping_city'];
    //         $updatedEntry->shipping_pin = $collectedData['shipping_pin'];

    //         $updatedEntry->amount = $collectedData['amount'];
    //         $updatedEntry->tax_amount = $collectedData['tax_amount'];
    //         $updatedEntry->discount_amount = $collectedData['discount_amount'];
    //         $updatedEntry->coupon_code_id = $collectedData['coupon_code_id'];
    //         $updatedEntry->final_amount = $collectedData['final_amount'];
    //         $updatedEntry->gst_no = $collectedData['gst_no'];

    //         DB::commit();
    //         return $updatedEntry;
    //     } catch (\Throwable $th) {
    //         //throw $th;
    //         DB::rollback();
    //     }
    // }

    public function toggle($id, $status){
        $updatedEntry = Order::findOrFail($id);
        $updatedEntry->status = $status;
        $updatedEntry->save();

        return $updatedEntry;
    }

    // public function delete($id) 
    // {
    //     Order::destroy($id);
    // }
}