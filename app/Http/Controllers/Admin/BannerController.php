<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\BannerInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Banner;

class BannerController extends Controller
{
    public function __construct(BannerInterface $BannerRepository){
        $this->BannerRepository = $BannerRepository;
    }

    public function index(Request $request) 
    {
        $data = $this->BannerRepository->getAllBanners();
        return view('admin.banner.index', compact('data'));
    }

    public function store(Request $request){
        $request->validate([
            "title" => "required|string|max:255",
            "link" => "required|string|max:255",
            "image" => "required|mimes:jpg,jpeg,png,svg,gif|max:10000000"
        ]);
        $params = $request->except('_token');

        $bannerStore = $this->BannerRepository->createBanner($params);
        if($bannerStore){
            return redirect()->route('admin.banner.index');
        }else{
            return redirect()->route('admin.banner.index')->withInput($request->all());
        }
    }
    public function show(Request $request, $id){
        $data = $this->BannerRepository->getBannerById($id);
        return view('admin.banner.detail', compact('data'));
    }
    public function update(Request $request, $id){
        $request->validate([
            "title" => "required|string|max:255",
            "link" => "required|string|max:255",
            "image" => "nullable|mimes:jpg,jpeg,png,svg,gif|max:10000000"
        ]);

        $params = $request->except('_token');

        $bannnerStore = $this->BannerRepository->updateBanner($id, $params);

        if ($bannnerStore) {
            return redirect()->route('admin.banner.index');
        } else {
            return redirect()->route('admin.banner.view')->withInput($request->all());
        }
    }


    public function status(Request $request, $id){
        $BannerStatus = $this->BannerRepository->toggleStatus($id);

        if($BannerStatus){
            return redirect()->route('admin.banner.index');
        }else{
            return redirect()->route('admin.banner.index')->withInput($request->all());
        }
    }
    public function destroy(Request $request, $id){

        $BannerDelete = $this->BannerRepository->DeleteBanner($id);
        if($BannerDelete){
            return redirect()->route('admin.banner.index');
        }else{
            return redirect()->route('admin.banner.index')->withInput($request->all());
        }
    }
}
