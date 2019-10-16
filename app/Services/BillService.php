<?php


namespace App\Services;

use App\Bill;
use App\Repositories\BillRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BillService
{
    public $billRepository;

    public function __construct(BillRepository $billRepository)
    {
        $this->billRepository = $billRepository;
    }

    public function getAll()
    {
        return $this->billRepository->getAll();
    }

    public function findById($id)
    {
        return $this->billRepository->findById($id);
    }

    public function getBillId()
    {
        $bills = $this->billRepository->getAll();
        foreach ($bills as $bill)
        {
            $billId = mt_rand(0,100000000);
            if ($billId !== $bill->id)
            {
                return $billId;
            }

            return 'request time out';
        }

    }

    public function create($request)
    {
        $billId = $this->getBillId();
        $bill = new Bill();
        $bill->id = $billId;
        $bill->user_id = Auth::user()->id;
        $bill->price = Session::get('cart')->totalPrice;
        $bill->payDate = date('Y:m:d');
        $bill->payAddress = $request->payAddress;
        $this->billRepository->store($bill);
        $this->storeBillProduct($billId);
        Session::put('cart',null);


    }

    public function getProductFromSession()
    {
        $products = [];
        foreach (Session::get('cart')->items as $product)
        {
            array_push($products,$product);
        }
        return $products;
    }

    public function storeBillProduct($billId)
    {
        $products = $this->getProductFromSession();
        foreach ($products as $product)
        {
            DB::table('billDetails')->insert([
                'bill_id' => $billId,
                'product_id' => $product['item'] -> id,
                'quantity' => $product['qty']
            ]);
        }

    }

    public function getByUser($id)
    {
        return $this->billRepository->findByUSer($id);
    }
}
