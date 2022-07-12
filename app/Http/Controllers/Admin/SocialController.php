<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\SociallinkInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\SocialLink;

class SocialController extends Controller
{

    public function __construct(SociallinkInterface $sociallinkRepository){
        $this->sociallinkRepository = $sociallinkRepository;
    }
    public function index(Request $request){
        $data = $this->sociallinkRepository->getAllSociallinks();
        return view('admin.Social-link.index', compact('data'));
    }


    public function store(Request $request){
        $request->validate([
            "name" => "required|string|max:255",
            "link" => "required|string|max:255",
            "image" => "required|mimes:jpg,jpeg,png,svg,gif|max:10000000"
        ]);
       $params = $request->except('_token');
       $SocialStore = $this->sociallinkRepository->createSocialLinks($params);
       if($SocialStore){
           return redirect()->route('admin.site.index');
       }else{
           return redirect()->route('admin.site.index')->withInput($request->all());
       }
    }

    public function show(Request $request, $id){
        $data = $this->sociallinkRepository->getSocialById($id);
        return view('admin.Social-link.detail', compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            "name" => "required|string|max:255",
            "link" => "required|string|max:255",
            "image" => "nullable|mimes:jpg,jpeg,png,svg,gif|max:10000000"
        ]);

        $params = $request->except('_token');

        $socialStore = $this->sociallinkRepository->updateSocial($id, $params);

        if ($socialStore) {
            return redirect()->route('admin.site.index');
        } else {
            return redirect()->route('admin.site.view')->withInput($request->all());
        }
    }
    public function status(Request $request, $id){
        $SocialStatus = $this->sociallinkRepository->toggleStatus($id);

        if($SocialStatus){
            return redirect()->route('admin.site.index');
        }else{
            return redirect()->route('admin.site.index')->withInput($request->all());
        }
    }
    public function destroy(Request $request, $id){

        $SocialDelete = $this->sociallinkRepository->DeleteSocial($id);
        if($SocialDelete){
            return redirect()->route('admin.site.index');
        }else{
            return redirect()->route('admin.site.index')->withInput($request->all());
        }
    }

}
