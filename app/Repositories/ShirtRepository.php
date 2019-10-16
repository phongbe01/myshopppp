<?php


namespace App\Repositories;


use App\Product;
use App\Shirt;
use function Psy\sh;

class ShirtRepository implements ProductsRepositoryInterface
{

    public function list()
    {
        $shirts = Product::where('product_code','like', '%' . 'TS' . '%')->paginate(8);
        return $shirts;
    }

    public function create($shirt,$request){
       $shirt->product_code = $request->product_code;
       $shirt->product_name = $request->product_name;
       $shirt->price = $request->price;
    }

    public function storeImage($shirt)
    {
         if (request() ->has('image'))
        {
            $shirt->image = request()->image->store('image','public');
        }
    }

    public function findById($id)
    {
        return Product::findOrFail($id);
    }


    public function update($request, $id)
    {
        $shirt = $this->findById($id);
        return $shirt->update($request->all());
    }

    public function delete($id)
    {
        $shirt = $this->findById($id);
        return $shirt->delete();
    }

    public function saveData($product)
    {
        return $product->save();
    }
}
