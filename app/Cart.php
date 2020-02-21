<?php


namespace App;


use Illuminate\Support\Facades\Session;

class Cart
{
    public $items = [];
    public $totalPrice = 0;
    public $totalItems = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalItems = $oldCart->totalItems;
        }
    }

    public function getProductById($id)
    {
        return Product::findOrFail($id);
    }

    public function getItemById($id)
    {
        return $this->items[$id];
    }

    public function add($id)
    {
        $this->items[$id] = new CartItem($this->getProductById($id),1);
        $this->totalPrice += $this->items[$id]->product->price;
        $this->totalItems++;
    }

    public function update($request)
    {
        foreach($this->items as $key => $item) {
            $cartItem = new CartItem($key, $request->input("quantity$key"));
            $this->totalPrice += ($cartItem->quantity - $this->items[$key]->quantity)
                * $item->product->price;
            $this->items[$key] = $cartItem;
        }
    }

    public function delete($id)
    {
        $this->totalPrice -= $this->items[$id]->totalPrice;
        $this->totalItems--;
        unset($this->items[$id]);
    }

    public function clear()
    {
        session()->forget('cart');
    }
}
