<?php


namespace App\Http\Services;


use App\Contracts\Product\ProductRepositoryInterface;
use App\Contracts\Product\ProductServiceInterface;
use App\Product;

class ProductService implements ProductServiceInterface
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function all()
    {
        return $this->productRepository->all();
    }

    public function create($request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->desc = $request->desc;
        $product->price = $request->price;

        //lay doi tuong file tu input "image"
        $file = $request->file('image');
        //luu ten khac cho anh can luu
        $fileName = $product->slug.'.'.$file->getClientOriginalExtension();
        //luu anh vao duong dan storage/pulic/images -- luon luon luu vao storage nen ko can phai ghi.
        // cau truc public/path --path la duong dan de luu.
        $file->storeAs('public/images', $fileName);
        $product->image = $fileName;

        $this->productRepository->store($product);

    }

    public function edit($request)
    {
        // TODO: Implement edit() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
    }

    public function store($request)
    {
        // TODO: Implement store() method.
    }

    public function search($keyword)
    {
        // TODO: Implement search() method.
    }
}
