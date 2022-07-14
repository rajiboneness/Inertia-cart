<?php

namespace App\Repositories;

use App\Interfaces\ProductVariationInterface;
use App\Models\ProductVariation;
use App\Models\ProductVariationValue;
use App\Models\Product;

class ProductVariationRepository implements ProductVariationInterface 
{
    public function getAllVariation() 
    {
        return ProductVariation::all();
    }
    
    public function getVariationById($variationId) 
    {
        return ProductVariation::findOrFail($variationId);
    }


    public function deleteVariation($variationId) 
    {
        $data = ProductVariation::findOrFail($variationId);
        if($data){
            $data->delete();
            return $data;
        }
    }

    public function createVariation(array $variationDetails) 
    {
        $collection = collect($variationDetails);

        $variation = new ProductVariation;
        $variation->title = $collection['title'];
        $variation->save();

        return $variation;
    }

    public function updateVariation($variationId, array $newDetails) 
    {
        $variation = ProductVariation::findOrFail($variationId);
        $collection = collect($newDetails); 

        $variation->title = $collection['title'];

        $variation->save();

        return $variation;
    }

    public function toggleStatus($id){
        $variation = ProductVariation::findOrFail($id);

        $status = ( $variation->status == 1 ) ? 0 : 1;
        $variation->status = $status;
        $variation->save();

        return $variation;
    }

    //  Product Variation Value Details

    public function getAllVariationValue() 
    {
        return ProductVariationValue::with('VariationId')->get();
    }
    
    public function getVariationValueById($variationId) 
    {
        return ProductVariationValue::findOrFail($variationId);
    }


    public function deleteVariationValue($variationId) 
    {
        $data = ProductVariationValue::findOrFail($variationId);
        if($data){
            $data->delete();
            return $data;
        }
    }

    public function createVariationValue(array $variationDetails) 
    {
        $collection = collect($variationDetails);

        $variation = new ProductVariationValue;
        $variation->value = $collection['value'];
        $variation->variation_id = $collection['variation_id'];
        $variation->save();

        return $variation;
    }

    public function updateVariationValue($variationId, array $newDetails) 
    {
        $variation = ProductVariationValue::findOrFail($variationId);
        $collection = collect($newDetails); 

        $variation->value = $collection['value'];
        $variation->variation_id = $collection['variation_id'];

        $variation->save();

        return $variation;
    }

    public function toggleValueStatus($id){
        $variation = ProductVariationValue::findOrFail($id);

        $status = ( $variation->status == 1 ) ? 0 : 1;
        $variation->status = $status;
        $variation->save();

        return $variation;
    }
    
}