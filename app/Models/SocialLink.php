<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SocialLink extends Model
{
    use softDeletes;
    protected $fillable = ['image', 'name', 'link'];

    protected $dates = [ 'deleted_at' ];
}
