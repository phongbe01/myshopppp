<?php


namespace App\Repositories;


use App\ProductDetail;

class ProductDetailRepository
{
    public function getManProduct()
    {
        $products = ProductDetail::where('sex','men')->get();
    }
}
