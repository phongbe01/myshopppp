<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Services\BillService;
use App\Services\CartService;
use App\Services\CustomerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    public $billService;
    public $userService;
    public $cartService;


    public function __construct(BillService $billService, CustomerService $userService,CartService $cartService)
    {
        $this->billService = $billService;
        $this->userService = $userService;
        $this->cartService = $cartService;
    }

    public function create()
    {
        $user = Auth::user();
        $cart = $this->cartService->index();
        $date = date('Y/m/d');
        return view('Cart.bill',compact('user','cart','date'));
    }

    public function listBills()
    {
        $bills = $this->billService->getByUser(Auth::user()->id);
        return view('Account.listBills',compact('bills'));
    }
    public function store(Request $request)
    {

        $this->billService->create($request);
        return redirect()->route('home');
    }

    public function billDetail($billId)
    {
        $bill = $this->billService->findById($billId);
        $billProducts = DB::table('billDetails')->where('bill_id',$billId)->get();
        return view('Account.billDetail',compact('bill','billProducts'));
    }


}
