<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductVariation extends Model
{
    use SoftDeletes;
    protected $fillable = ['title'];
    protected $dates = [ 'deleted_at' ];
}
