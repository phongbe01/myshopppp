<?php


namespace App\Services;


interface ProductsServiceInterface
{
    public  function list();
    public function create($request);
    public function findById($id);
    public function update($request,$id);
    public function delete($id);
}
