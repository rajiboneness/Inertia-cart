<?php

namespace App\Interfaces;

interface SociallinkInterface 
{
    /**
     * This method is to fetch list of all categories
     */
    public function getAllSociallinks();

    public function getSocialById($SocialId);

    public function createSocialLinks(array $socialDetails);
    
    public function updateSocial($socialId, array $newDetails);

    public function toggleStatus($id);
    
    public function DeleteSocial($id);

}