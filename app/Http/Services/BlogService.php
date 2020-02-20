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
        return $this->blogRepository->all($paginate = null);
    }

    public function create($request)
    {
        $post = $this->blogRepository->model();

        $post->fill($request->input());

        $this->blogRepository->store($post);
    }


    public function update($request, $id)
    {

        $post = $this->blogRepository->findById($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->blogRepository->update($post, $id);
    }


    public function delete($id)
    {
        $post = $this->blogRepository->findById($id);
        $this->blogRepository->delete($post);
    }

    public function search($keyword)
    {
        // TODO: Implement search() method.
    }

    public function edit($request, $id)
    {
        $post = $this->blogRepository->model();
        $post->fill($request->input());
        $this->blogRepository->update($post);
    }

    public function findById($id)
    {
        return $this->blogRepository->findById($id);
    }
}
