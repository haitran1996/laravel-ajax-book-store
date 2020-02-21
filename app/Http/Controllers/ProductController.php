<?php

namespace App\Http\Controllers;

use App\Contracts\Product\ProductServiceInterface;
use App\Http\Requests\RequestFormProduct;
use App\Product;
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
        if ($request->ajax()) {
            $output = '';
            $products = $this->productService->search($request->keyword);
            if ($products) {
                $output = '';
                foreach ($products as $key => $product) {
                    $output .=  "<tr>".
                    "<th scope='row'>".++$key."</th>".
                    "<td>$product->name</td>".
                        "<td><img src='".asset('storage/images/'.$product->image)."' alt='No image' style='height: 100px'></td>".
                        "<td>$product->price</td>".
                    "<td>$product->desc</td>".
                    "<td>".
                        "<div class='btn-group'>".
                            "<a class='btn btn-success' href="."route('product.edit',$product->id)"."><i class='icon_check_alt2'></i></a>".
                            "<a class='btn btn-danger' href="."route('product.delete',$product->id)". "onclick='"."return confirm('Are you sure ?')"."><i class='icon_close_alt2'></i></a>".
                        "</div>".
                    "</td>".
                "</tr>";
                }
            }
            return Response($output);
        }
//        $users = $this->userService->search($request->keyword);
//        return view('admin.user.index', compact('users'));
    }
}
