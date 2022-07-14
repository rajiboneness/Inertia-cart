<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\AboutUsInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Aboutus;

class AboutUsController extends Controller
{
    public function __construct(AboutUsInterface $AboutusRepository){
        $this->AboutusRepository = $AboutusRepository;
    }
    public function index(){
        $data = $this->AboutusRepository->getAboutus();
        return view('admin.about-us.index', compact('data'));
    }
    public function create(){
        return view('admin.about-us.create');
    }

    public function store(Request $request){
        $request->validate([
            "title" => "required|string|max:255",
             "desc" => "required",
            "image" => "required|mimes:jpg,jpeg,png,svg,gif|max:10000000"
        ]);
        $params = $request->except('_token');
        $aboutusStore = $this->AboutusRepository->createAboutus($params);
        if($aboutusStore){
            return redirect()->route('admin.aboutus.index');
        }else{
            return redirect()->route('admin.aboutus.create')->withInput($request->all());
        }
    }

}
