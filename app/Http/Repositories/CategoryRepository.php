<?php


namespace App\Http\Repositories;


use App\Category;
use App\Contracts\Category\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{

    protected $category;
    public function __constructC(Category $category)
    {
        $this->category = $category;
    }

    public function model()
    {
        // TODO: Implement model() method.
    }

    public function all($paginate)
    {
        // TODO: Implement all() method.
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
        // TODO: Implement store() method.
    }

    public function search($keyword)
    {
        // TODO: Implement search() method.
    }
}
