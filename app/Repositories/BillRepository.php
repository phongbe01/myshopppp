<?php


namespace App\Repositories;


use App\Bill;

class BillRepository implements BillRepositoryInterface
{

    public function getAll()
    {
        return Bill::all();
    }

    public function create($request)
    {
        return Bill::create($request->all());
    }
    public function store($bill)
    {
        return $bill->save();
    }

    public function findById($id)
    {
        //dd(Bill::findOrFail($id));
        return Bill::find($id);
    }

    public function delete($id)
    {
        $bill = $this->findById($id);
        return $bill->delete();
    }

    public function findByUSer($id)
    {
        $bill = Bill::where('user_id',$id)->orderBy('payDate','desc')->get();
        return $bill;
    }


}
