<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Requests\CreateProductRequest;
use App\Services\ShirtService;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class ShirtController extends Controller
{
    public $shirtService;

    public function __construct(ShirtService $shirtService)
    {
        $this->shirtService = $shirtService;
    }

    public function index()
    {
        $shirts = $this->shirtService->list();
        return( view('products.shirts.index',compact('shirts')));
    }

}
