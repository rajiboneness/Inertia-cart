<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aboutus extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'image', 'desc'];
    protected $dates = [ 'deleted_at' ];
}
