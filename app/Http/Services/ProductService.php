<?php


namespace App\Http\Services;


use App\Contracts\Product\ProductRepositoryInterface;
use App\Contracts\Product\ProductServiceInterface;
use App\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductService implements ProductServiceInterface
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function all($paginate=null)
    {
        return $this->productRepository->all($paginate);
    }

    public function create($request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
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

    public function edit($request,$id)
    {
        $product = $this->productRepository->findById($id);
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->desc = $request->desc;
        $product->price = $request->price;

        //neu nguoi dung nhap vao anh moi thi luu vao, khong thi van xai anh cu, tuc la ko thay doi
        if ($request->has('image')) {
            //neu ton tai ten anh nay roi thi xoa anh cu di
            if (Storage::exists('public/images/' . $product->image)) {
                Storage::delete('public/images/' . $product->image);
            }

            //lay doi tuong file tu input "image"
            $file = $request->file('image');
            //luu ten khac cho anh can luu
            $fileName = $product->slug . '.' . $file->getClientOriginalExtension();
            //luu anh vao duong dan storage/pulic/images -- luon luon luu vao storage nen ko can phai ghi.
            // cau truc public/path --path la duong dan de luu.
            $file->storeAs('public/images', $fileName);
            $product->image = $fileName;
        }
        $this->productRepository->update($product);
    }

    public function delete($id)
    {
        $product = $this->productRepository->findById($id);
        if (Storage::exists('public/images/'.$product->image)){
            Storage::delete('public/images/'.$product->image);
        }
        $this->productRepository->delete($product);

    }

    public function update($request, $id)
    {

    }

    public function store($request)
    {
        // TODO: Implement store() method.
    }

    public function search($keyword)
    {
        return $this->productRepository->search($keyword);
    }

    public function findById($id)
    {
        return $this->productRepository->findById($id);
    }
}
