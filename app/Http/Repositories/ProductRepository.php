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

    public function all($paginate)
    {
        return $this->product->all();
    }

    public function delete($obj)
    {
        $obj->delete();
    }

    public function update($obj)
    {
        $obj->save();
    }

    public function store($obj)
    {
        $obj->save();
    }

    public function search($keyword)
    {
        return $this->product->where('name','like',"%$keyword%")->get();
    }

    public function findById($id)
    {
        return $this->product->findOrFail($id);
    }
}
