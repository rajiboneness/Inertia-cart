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

    public function detail(Request $request, $slug)
    {
        $data = $this->collectionRepository->getCollectionBySlug($slug);
        if ($data) {
            return view('front.collection.collection-product', compact('data'));
        } else {
            return view('front.404');
        }
    }
    



    
}
