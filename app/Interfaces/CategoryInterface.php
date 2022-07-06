<?php

namespace App\Interfaces;

interface CategoryInterface 
{
    /**
     * This method is to fetch list of all categories
     */
    public function getAllCategories();

    public function getAllCollections();

    /**
     * This method is to get category details by id
     * @param str $categoryId
     */
    public function getCategoryById($categoryId);
    /**
     * This method is to get category details by slug
     * @param str $slug
     */
        public function getSubCategoryBySlug($slug, array $request = null);

        public function ProductBySubCategory($slug, array $request = null);

    /**
     * This method is to create category
     * @param arr $categoryDetails
     */
    public function createCategory(array $categoryDetails);

    /**
     * This method is to update category details
     * @param int $categoryId
     * @param arr $newDetails
     */
    public function updateCategory($categoryId, array $newDetails);

    /**
     * This method is to toggle category status
     * @param int $categoryId
     */
    public function toggleStatus($categoryId);

    /**
     * This method is to delete category
     * @param int $categoryId
     */
    public function deleteCategory($categoryId);

    /**
     * This method is to delete category
     * @param int $categoryId
     * @param array $filter
     */
    // public function productsByCategory(int $categoryId, array $filter = null);
}