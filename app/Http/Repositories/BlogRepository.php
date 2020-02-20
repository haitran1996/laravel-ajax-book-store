<?php


namespace App\Http\Repositories;


use App\Blog;
use App\Contracts\Blog\BlogRepositoryInterface;

class BlogRepository implements BlogRepositoryInterface
{


    protected $post;

    public function __construct(Blog $post)
    {
        $this->post = $post;
    }

    public function model()
    {
        return $this->post;
    }

    public function all($paginate)
    {
        return $this->post->all();
    }

    public function delete($obj)
    {
        $obj->delete();
    }

    public function store($post)
    {
        $post->save();
    }

    public function findById($id)
    {
        return $this->post->findOrFail($id);
    }

    public function search($keyword)
    {
        // TODO: Implement search() method.
    }

    public function update($post)
    {
        $post->save();
    }
}
