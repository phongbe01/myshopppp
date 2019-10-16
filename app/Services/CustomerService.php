<?php


namespace App\Services;


use App\Customer;
use App\Repositories\CustomerRepository;

class CustomerService implements ProductsServiceInterface
{
    public $userRepository;


    public function __construct(CustomerRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function list()
    {
        return $this->userRepository->list();
    }

    public function create($request)
    {
        $user = new Customer();
        $this->userRepository->create($user, $request);
        return $this->userRepository->saveData($user);
    }

    public function findById($id)
    {

        return $this->userRepository->findById($id);

    }

    public function update($request, $id)
    {
        $user = $this->findById($id);
        $this->userRepository->update($request,$id);
        return $this->userRepository->saveData($user);

    }

    public function delete($id)
    {
        return $this->userRepository->delete();
    }
}
