<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\CategoryInterface;
use App\Interfaces\CollectionInterface;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct(CategoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index(Request $request) 
    {
        $data = $this->categoryRepository->getAllCategories();
        $collectios = $this->categoryRepository->getAllCollections();
        return view('admin.category.index', compact('data', 'collectios'));
    }

    public function store(Request $request) 
    {
        $request->validate([
            "name" => "required|string|max:255",
            "call_id" => "required|string|max:255",
            "description" => "nullable|string",
            "image_path" => "required|mimes:jpg,jpeg,png,svg,gif|max:10000000"
        ]);

        $params = $request->except('_token');

        $categoryStore = $this->categoryRepository->createCategory($params);

        if ($categoryStore) {
            return redirect()->route('admin.category.index');
        } else {
            return redirect()->route('admin.category.index')->withInput($request->all());
        }
    }

    public function show(Request $request, $id)
    {
        $data = $this->categoryRepository->getCategoryById($id);
        $collection = $this->categoryRepository->getAllCollections();
        return view('admin.category.detail', compact('data', 'collection'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());

        $request->validate([
            "name" => "required|string|max:255",
            "call_id" => "required|string|max:255",
            "description" => "nullable|string",
            "image_path" => "nullable|mimes:jpg,jpeg,png,svg,gif|max:10000000"
        ]);

        $params = $request->except('_token');

        $categoryStore = $this->categoryRepository->updateCategory($id, $params);

        if ($categoryStore) {
            return redirect()->route('admin.category.index');
        } else {
            return redirect()->route('admin.category.view')->withInput($request->all());
        }
    }

    public function status(Request $request, $id)
    {
        $categoryStat = $this->categoryRepository->toggleStatus($id);

        if ($categoryStat) {
            return redirect()->route('admin.category.index');
        } else {
            return redirect()->route('admin.category.create')->withInput($request->all());
        }
    }

    public function destroy(Request $request, $id) 
    {
        $this->categoryRepository->deleteCategory($id);

        return redirect()->route('admin.category.index');
    }
}
