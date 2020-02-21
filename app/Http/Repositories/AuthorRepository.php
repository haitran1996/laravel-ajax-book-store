<?php


namespace App\Http\Repositories;


use App\Author;
use App\Contracts\Author\AuthorRepositoryInterface;

class AuthorRepository implements AuthorRepositoryInterface
{
    protected $author;

    public function __construct(Author $author)
    {
        $this->author = $author;
    }

    public function model()
    {
        // TODO: Implement model() method.
    }

    public function all($paginate)
    {
        return $this->author->all();
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
        return $this->author->where('name','like',"%$keyword%")->get();
    }

    public function findById($id)
    {
        return $this->author->findOrFail($id);
    }
}
