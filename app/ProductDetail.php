<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $guarded = [];

    protected $table = 'productDetail';

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
