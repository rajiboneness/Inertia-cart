<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collection extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'description', 'image_path', 'slug'];

    public function categoryDetails() {
        return $this->hasMany('App\Models\Category', 'collection', 'id');
    }
    public function ProductDetails() {
        return $this->hasMany('App\Models\Product', 'collection_id', 'id');
    }

    protected $dates = [ 'deleted_at' ];
}
