<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{

    public $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Gate::allows('crud-users'))
        {
            return abort(403);
        } else {
            $products = $this->productService->list();
            return view('admin.list-products',compact('products'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $this->productService->create($request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->productService->findById($id);
        return view('products.product-details2',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product =  $this->productService->findById($id);
        return view('admin.edit-product',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->productService->update($request,$id);
        return  redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $this->productService->delete($id);
         return redirect()->route('products.index');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $products = $this->productService->getProductsByKey($search);
        if ($search == null)
        {
            return redirect()->back();
        }
        if (count($products) == 0)
        {
            return redirect()->route('products.null');
        }
        return view('products.list-search',compact('products'));
    }

    public function productNull()
    {
        return view('products.product-null');
    }

    public function updateQty(Request $request,$id)
    {
        $qty = $request->get('qty');
        $this->productService->updateQty($id,$qty);
    }

    public function getMenProduct()
    {
        $products =$this->productService->getMenProduct();
        return view('products.men-clothes.index',compact('products'));
    }
}
