<?php


namespace App\Services;


interface CartServiceInterface
{
    public function index();
    public function addToCart($request,$productId,$itemQty);
    public function removeProductIntoCart($productId);
    public function updateProductIntoCart($request, $productId);
}
