<?php


namespace App\Http\Repositories;


use App\Contracts\Product\ProductRepositoryInterface;
use App\Product;

class ProductRepository implements ProductRepositoryInterface
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function model()
    {
        // TODO: Implement model() method.
    }

    public function all()
    {
        return $this->product->all();
    }

    public function delete($obj)
    {
        // TODO: Implement delete() method.
    }

    public function update($obj)
    {
        // TODO: Implement update() method.
    }

    public function store($obj)
    {
        $obj->save();
    }

    public function search($keyword)
    {
        // TODO: Implement search() method.
    }
}
