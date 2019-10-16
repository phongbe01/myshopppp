<?php


namespace App\Repositories;


use App\Customer;
use App\User;

class CustomerRepository implements ProductsRepositoryInterface
{

    public function list()
    {
        return User::all();
    }

    public function create($user, $request)
    {
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;

    }

    public function update($request, $id)
    {
        $user = $this->findById($id);
        return $user->update($request->all());
    }

    public function findById($id)
    {
        return User::findOrFail($id);
    }

    public function delete($id)
    {
        $user = $this->findById($id);
        return $user->delete();
    }

    public function storeImage($user)
    {
        // TODO: Implement storeImage() method.
    }

    public function saveData($user)
    {
        return $user->save();
    }
}
