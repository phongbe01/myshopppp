<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Services\CartService;
use App\Shirt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{
    public $cartService;

    public function __construct(CartService $cartService)
    {

        $this->cartService = $cartService;
    }

    public function index()
    {
        $cart = $this->cartService->index();
        return view('template.cart.shopping-cart', compact('cart'));
    }

    public function addToCart(Request $request, $productId)
    {
        $itemQty = $request->get('qty');
        $this->cartService->addToCart($request,$productId,$itemQty);
        return redirect()->route('cart.index');
    }
    public function removeProductIntoCart($productId)
    {
        $this->cartService->removeProductIntoCart($productId);
        return redirect()->back();
    }

    public function updateProductIntoCart(Request $request, $productId)
    {
        $this->cartService->updateProductIntoCart($request,$productId);
        return redirect()->back();
    }

    public function back()
    {
        return redirect()->back();
    }

}
