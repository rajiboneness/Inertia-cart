<?php

namespace App\Interfaces;

interface ProductInterface 
{
    public function listAll();
    public function collectionList();
    public function VariationTitle();
    public function VariationValue();
    // public function listBySlug($slug);
    // public function relatedProducts($id);
    public function listImagesById($id);
    public function create(array $data);
    public function SVTypeAdd(array $data);
    public function update($id, array $data);
    public function toggle($id);
    public function delete($id);
    public function SVTypeDelete($id);
    public function ProductDetails($slug, array $request = null);
    // public function deleteSingleImage($id);
    // public function wishlistCheck($productId);
}