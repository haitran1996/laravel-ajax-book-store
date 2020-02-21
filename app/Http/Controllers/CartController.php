<?php

namespace App\Http\Controllers;

use App\Cart;
use http\Env\Response;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $cart;

    public function __construct()
    {
        $cart = session()->get('cart');
        $this->cart = new Cart($cart);
    }

    public function add($id)
    {
        $this->cart = new Cart(session()->get('cart'));
        if (!array_key_exists($id, $this->cart->items)) {
            $this->cart->add($id);
            session()->put('cart', $this->cart);
        }

        return back();
    }

    public function update(Request $request, $id)
    {
        if ($request->ajax()) {
            $this->cart->update($request, $id);
            session()->put('cart', $this->cart);
        }
        return response('abc');
    }

    public function delete($id)
    {
        $this->cart = new Cart(session()->get('cart'));
        if (array_key_exists($id, $this->cart->items)) {
            $this->cart->delete($id);
            session()->put('cart',$this->cart);
        }
        return back();
    }

    public function clear()
    {
        $this->cart->clear();
    }
}
