<?php

namespace App\Http\Controllers\Admin;

use App\Interfaces\CollectionInterface;
use App\Models\Collection;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class CollectionController extends Controller
{
    public function __construct(CollectionInterface $collectionRepository) 
    {
        $this->collectionRepository = $collectionRepository;
    } 

    public function index(Request $request){
        $data = $this->collectionRepository->getAllCollections();
        return view('admin.collection.index', compact('data'));
    }

    public function store(Request $request) 
    {
        $request->validate([
            "name" => "required|string|max:255",
            "description" => "nullable|string",
            // "icon_path" => "required|mimes:jpg,jpeg,png,svg,gif|max:10000000",
            // "sketch_icon" => "required|mimes:jpg,jpeg,png,svg,gif|max:10000000",
            "image_path" => "required|mimes:jpg,jpeg,png,svg,gif|max:10000000"
        ]);

        $params = $request->except('_token');
        $storeData = $this->collectionRepository->createCollection($params);

        if ($storeData) {
            return redirect()->route('admin.collection.index');
        } else {
            return redirect()->route('admin.collection.index')->withInput($request->all());
        }
    }

    public function show(Request $request, $id)
    {
        $data = $this->collectionRepository->getCollectionById($id);
        return view('admin.collection.detail', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            "name" => "required|string|max:255",
            "description" => "nullable|string",
            "image_path" => "nullable|mimes:jpg,jpeg,png,svg,gif|max:10000000"
        ]);

        $params = $request->except('_token');
        $storeData = $this->collectionRepository->updateCollection($id, $params);

        if ($storeData) {
            return redirect()->route('admin.collection.index');
        } else {
            return redirect()->route('admin.collection.index')->withInput($request->all());
        }
    }

    public function status(Request $request, $id)
    {
        $storeData = $this->collectionRepository->toggleStatus($id);

        if ($storeData) {
            return redirect()->route('admin.collection.index');
        } else {
            return redirect()->route('admin.collection.index')->withInput($request->all());
        }
    }

    public function destroy(Request $request, $id) 
    {
        $this->collectionRepository->deleteCollection($id);

        return redirect()->route('admin.collection.index');
    }
}
