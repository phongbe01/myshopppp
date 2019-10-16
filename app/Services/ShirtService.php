<?php


namespace App\Services;


use App\Product;
use App\Repositories\ShirtRepository;
use App\Shirt;

class ShirtService implements ProductsServiceInterface
{
    public $shirtRepsitory;

    public function __construct(ShirtRepository $shirtRepository)
    {
        $this->shirtRepsitory = $shirtRepository;
    }

    public function list()
    {
       return $this->shirtRepsitory->list();
    }

    public function create($request)
    {
        $shirt = new Product();
        $this->shirtRepsitory->create($shirt,$request);
        $this->shirtRepsitory->storeImage($shirt);
        return $this->shirtRepsitory->saveData($shirt);
    }

    public function update($request, $id)
    {
        $shirt = $this->shirtRepsitory->findById($id);
        $this->shirtRepsitory->storeImage($shirt);
        return $this->shirtRepsitory->update($request,$shirt);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }



    public function findById($id)
    {
        return $this->shirtRepsitory->findById($id);
    }
}
