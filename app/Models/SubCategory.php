<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'cat_id', 'description', 'image_path', 'slug'];
    protected $dates = [ 'deleted_at' ];
}
