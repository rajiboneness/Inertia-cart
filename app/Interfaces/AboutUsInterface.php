<?php

namespace App\Interfaces;

interface AboutUsInterface 
{
    /**
     * This method is to fetch list of all categories
     */
    public function getAboutus();

    public function getAboutById($aboutId);

    public function createAboutus(array $aboutDetails);
    
    // public function updateAboutUs($aboutId, array $newDetails);

    // public function toggleStatus($id);
    
    // public function DeleteAboutUs($id);

}