<?php

namespace App\Http\Controllers;

use App\Contracts\Product\ProductServiceInterface;
use App\Http\Requests\RequestFormProduct;
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
        return view('admin.product.list',compact('products'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(RequestFormProduct $request)
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
        return view('admin.product.edit',compact('product'));
    }

    public function update(RequestFormProduct $request,$id)
    {
        $this->productService->edit($request,$id);
        return redirect()->route('product.list');
    }

    public function search(Request $request)
    {
      $products=$this->productService->search($request->keyword);
      dd($products,$request->keyword);
      return view('admin.product.list',compact('products'));
    }
}
