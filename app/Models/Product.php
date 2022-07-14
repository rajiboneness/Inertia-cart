<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $fillable = ['cat_id', 'sub_cat_id', 'collection_id', 'name', 'short_desc', 'desc', 'price', 'offer_price', 'slug', 'meta_title', 'meta_desc', 'meta_keyword', 'image'];
    protected $dates = [ 'deleted_at' ];
    
    public function category() {
        return $this->belongsTo('App\Models\Category', 'cat_id', 'id');
    }

    public function subCategory() {
        return $this->belongsTo('App\Models\SubCategory', 'sub_cat_id', 'id');
    }

    public function collection() {
        return $this->belongsTo('App\Models\Collection', 'collection_id', 'id');
    }
    public function MoreImages() {
        return $this->hasMany('App\Models\ProductImage', 'product_id', 'id');
    }
    public function ProductVariation(){
        \DB::statement("SET SQL_MODE=''");
        return $this->hasMany('App\Models\ProductVariationType', 'product_id', 'id')->groupBy('title')->orderBy('id');
    }

}
