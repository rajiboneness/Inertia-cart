<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductVariationValue extends Model
{
    use SoftDeletes;
    protected $fillable = ['variation_id', 'value'];

    public function VariationId() {
        return $this->belongsTo('App\Models\ProductVariation', 'variation_id', 'id');
    }

    protected $dates = [ 'deleted_at' ];
}
