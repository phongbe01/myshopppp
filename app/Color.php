<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $guarded = [];

    public function product()
    {
       return  $this->belongsToMany('App\Product','product_id','color_id');
    }
}
