<?php


namespace App\Repositories;


interface ProductsRepositoryInterface
{
    public function list();

    public function create($product, $request);

    public function update($request, $id);

    public function findById($id);

    public function delete($id);

    public function storeImage($product);

    public function saveData($product);
}
