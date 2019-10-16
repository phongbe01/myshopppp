<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function colors()
    {
        return $this->belongsToMany('App\Color','product_colors','product_id');
    }

    public function bills()
    {
        return $this->belongsToMany('App\Bill','billDetails');
    }
}
