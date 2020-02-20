<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $cart;

    public function __construct()
    {
        $cart = session()->get('cart');
        $this->cart = new Cart($cart);
    }

    public function add(Request $request)
    {
        $id = $request->id;

        if (!array_key_exists($id, $this->cart->items)) {
            $this->cart->add($id);
            session()->put('cart', $this->cart);
        }

        return back();
    }

    public function update(Request $request, $id)
    {
        $this->cart->update($request, $id);
        session()->put('cart', $this->cart);
    }

    public function delete($id)
    {
        if (array_key_exists($id, $this->cart->items)) {
            $this->cart->delete($id);
            session()->put($this->cart);
        }
    }

    public function clear()
    {
        $this->cart->clear();
    }
}
