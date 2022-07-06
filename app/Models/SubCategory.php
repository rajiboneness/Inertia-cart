<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'cat_id', 'description', 'image_path', 'slug'];

    public function product() {
        return $this->hasMany('App\Models\Product', 'sub_cat_id', 'id');
    }
    public function category() {
        return $this->belongsTo('App\Models\Category', 'cat_id', 'id');
    }
    protected $dates = [ 'deleted_at' ];
}
