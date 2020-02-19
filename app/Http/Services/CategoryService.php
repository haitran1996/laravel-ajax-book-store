<?php


namespace App\Http\Services;


use App\Contracts\Category\CategoryRepositoryInterface;
use App\Contracts\Category\CategoryServiceInterface;

class CategoryService implements CategoryServiceInterface
{
    protected $categoryRepo;
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepo = $categoryRepository;
    }


    public function all($paginate)
    {
        // TODO: Implement all() method.
    }

    public function create($request)
    {
        // TODO: Implement create() method.
    }

    public function edit($request, $id)
    {
        // TODO: Implement edit() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function search($keyword)
    {
        // TODO: Implement search() method.
    }
}
