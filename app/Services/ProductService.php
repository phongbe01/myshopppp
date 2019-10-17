<?php


namespace App\Services;


use App\Product;
use App\Repositories\ProductRepository;

class ProductService implements ProductsServiceInterface
{
    public $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function list()
    {
        return $this->productRepository->list();
    }

    public function create($request)
    {
        $product = new  Product();
        $this->productRepository->create($product,$request);
        $this->productRepository->storeImage($product);
        return $this->productRepository->saveData($product);
    }

    public function findById($id)
    {
        return $this->productRepository->findById($id);
    }

    public function update($request, $id)
    {
       $product = $this->productRepository->findById($id);
       $this->productRepository->update($request,$id);
       $this->productRepository->storeImage($product);
       return $this->productRepository->saveData($product);
    }

    public function delete($id)
    {
        return $this->productRepository->delete($id);
    }

    public function getProductsByKey($keySearch)
    {
        return $this->productRepository->getProductsByKey($keySearch);
    }

    public function updateQty($id,$qty)
    {
        $product = $this->productRepository->findById($id);
        $product->quality = $product->quality - $qty;
        $this->productRepository->saveData($product);

    }

    public function getMenProduct()
    {
        return $this->productRepository->getMenProduct();
    }
}
