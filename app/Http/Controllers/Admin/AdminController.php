<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function check(Request $request)
    {
        $request->validate([
            'email' => 'required | string | email | exists:admins',
            'password' => 'required | string'
        ]);

        $adminCreds = $request->only('email', 'password');

        if ( Auth::guard('admin')->attempt($adminCreds) ) {
            return redirect()->route('admin.home');
        } else {
            return redirect()->route('admin.login')->withInputs($request->all())->with('failure', 'Invalid credentials. Try again');
        }
    }

    public function home()
    {
        // $data = $userRepository->listAll();
        // dd($data->count());
        // $data = (object)[];
        // $data->users = User::count();
        // $data->category = Category::count();
        // $data->subcategory = SubCategory::count();
        // $data->products = Product::latest('id')->limit(5)->get();
        // $data->orders = Order::latest('id')->limit(5)->get();
        return view('admin.home');
    }
}
