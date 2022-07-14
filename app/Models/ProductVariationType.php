<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductVariationType extends Model
{
    use SoftDeletes;
    protected $fillable = ['product_id', 'title', 'value', 'stock', 'price', 'offer_price'];
    protected $dates = [ 'deleted_at' ];
}
