<?php

namespace App\Http\Controllers;

use App\Contracts\Product\ProductServiceInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
      $products = $this->productService->all();
        return view('product.list',compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $this->productService->create($request);
        return back();
    }

    public function delete($id)
    {

    }
}
