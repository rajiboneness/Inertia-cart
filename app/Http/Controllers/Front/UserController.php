<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Interfaces\UserInterface;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(UserInterface $userRepository){
        $this->userRepository = $userRepository;
    }
    public function register(Request $request){
        return view('front.auth.register');
    }
    public function create(Request $request){
        $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|integer|digits:10|unique:users,mobile',
            'password' => 'required|string|min:2|max:100',
        ]);
        $storeData = $this->userRepository->create($request->except('_token'));

        if($storeData){
            return redirect()->route('front.user.login')->with('success', 'Account created successfully');
        }else{
            return redirect()->route('front.user.login')->withInput($request->all())->with('failure', 'Something happened');
        }
    }
    public function login(Request $request)
    {
        return view('front.auth.login');
    }
    public function check(Request $request){
        {
            $request->validate([
                'email' => 'required | string | email',
                'password' => 'required | string'
            ]);
    
            $userCreds = $request->only('email', 'password');
    
            if ( Auth::guard('web')->attempt($userCreds) ) {
                return redirect()->route('front.home');
            } else {
                return redirect()->route('front.user.login')->withInputs($request->all())->with('failure', 'Invalid credentials. Try again');
            }
        }
    }
}
