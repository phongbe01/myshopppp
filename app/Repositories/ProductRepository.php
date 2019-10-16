<?php


namespace App\Repositories;


use App\Product;
use App\Services\ProductsServiceInterface;

class ProductRepository implements ProductsRepositoryInterface
{

    public function list()
    {
        $products = Product::paginate(8);
        return $products;
    }

    public function create($product,$request)
    {
        $product->product_code = $request->product_code;
        $product->product_name = $request->product_name;
        $product->price = $request->price;
    }

    public function findById($id)
    {
        return Product::find($id);
    }

    public function update($request, $id)
    {
        $product = $this->findById($id);
        return $product->update($request->all());
    }

    public function delete($id)
    {
        $product = $this->findById($id);
        return $product->delete();
    }

    public function storeImage($product)
    {
       if (request()->has('image'))
       {
           $product->image = request()->image->store('img','public');
       }
    }

    public function saveData($product)
    {
        return $product->save();
    }

    public function getProductsByKey($keySearch)
    {
        $products = Product::where('product_name','like', '%' . $keySearch . '%' )->paginate(8);
        return $products;
    }

    public function updateQty($id)
    {

    }
}
