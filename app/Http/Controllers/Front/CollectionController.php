<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Interfaces\CollectionInterface;
use Illuminate\Http\Request;
use App\Models\Collection;

class CollectionController extends Controller
{
    public function __construct(CollectionInterface $collectionRepository) 
    {
        $this->collectionRepository = $collectionRepository;
    }

    public function index(Request $request){
        $collections = $this->collectionRepository->getCollectionData();
        
        return view('front.collection.list', compact('collections'));
    }

    public function detail(Request $request, $slug)
    {
        $data = $this->collectionRepository->getCategoryBySlug($slug);
        if ($data) {
            return view('front.category.list', compact('data'));
        } else {
            return view('front.404');
        }
    }

    



    
}
