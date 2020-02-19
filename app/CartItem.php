<?php


namespace App;


class CartItem
{
    public $product;
    public $quantity;
    public $totalPrice;

    public function __construct($id, $quantity = null)
    {
        $this->product = Product::findOrFail($id);
        if ($quantity !== null) {
            $this->quantity = $quantity;
            $this->totalPrice = $quantity * $this->product->price;
        } else {
            $this->quantity = 1;
            $this->totalPrice = $this->product->price;
        }
    }
}
