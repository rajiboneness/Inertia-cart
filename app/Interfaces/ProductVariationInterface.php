<?php

namespace App\Interfaces;

interface ProductVariationInterface 
{
    /**
     * This method is to fetch list of all categories
     */
    public function getAllVariation();
    public function getVariationById($variationId);
    public function createVariation(array $variationDetails);
    public function updateVariation($variationId, array $newDetails);
    public function toggleStatus($variationId);
    public function deleteVariation($variationId);

    // Product Variation Value details
    public function getAllVariationValue();
    public function getVariationValueById($variationId);
    public function createVariationValue(array $variationDetails);
    public function updateVariationValue($variationId, array $newDetails);
    public function toggleValueStatus($variationId);
    public function deleteVariationValue($variationId);
}