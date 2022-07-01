<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'collection', 'description', 'image_path', 'slug'];

    public function SubCategoryDetails() {
        return $this->hasMany('App\Models\SubCategory', 'cat_id', 'id');
    }

    protected $dates = [ 'deleted_at' ];
}
