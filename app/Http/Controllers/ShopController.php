<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('shop.home');
    }

    public function books()
    {
        $books = Product::all();
        return view('shop.books', compact('books'));
    }
}
