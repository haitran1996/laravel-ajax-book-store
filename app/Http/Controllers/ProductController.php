<?php

namespace App\Http\Controllers;

use App\Contracts\Product\ProductServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {

      $products = DB::table('products')->paginate(5);
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
        $this->productService->delete($id);
        return back();
    }

    public function edit($id)
    {
        $product = $this->productService->findById($id);
        return view('product.edit',compact('product'));
    }

    public function update(Request $request,$id)
    {
        $this->productService->edit($request,$id);
        return redirect()->route('product.list');
    }
}
