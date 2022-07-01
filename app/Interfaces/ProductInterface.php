<?php

namespace App\Interfaces;

interface ProductInterface 
{
    public function listAll();
    public function categoryList();
    public function subCategoryList();
    public function collectionList();
    // public function listBySlug($slug);
    // public function relatedProducts($id);
    // public function listImagesById($id);
    public function create(array $data);
    public function update($id, array $data);
    public function toggle($id);
    // public function sale($id);
    public function delete($id);
    // public function deleteSingleImage($id);
    // public function wishlistCheck($productId);
}