<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collection extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'description', 'image_path', 'slug'];
    protected $dates = [ 'deleted_at' ];
}
