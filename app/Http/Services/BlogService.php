<?php


namespace App\Http\Services;


use App\Contracts\Blog\BlogRepositoryInterface;
use App\Contracts\Blog\BlogServiceInterface;

class BlogService implements BlogServiceInterface
{
    protected $blogRepository;

    public function __construct(BlogRepositoryInterface $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function all($paginate)
    {
        return $this->blogRepository->all($paginate=null);
    }

    public function create($request)
    {
        $post = $this->blogRepository->model();

        $post->fill($request->input());

        $this->blogRepository->store($post);
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
