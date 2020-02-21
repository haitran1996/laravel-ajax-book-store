<?php


namespace App\Http\Services;


use App\Author;
use App\Contracts\Author\AuthorRepositoryInterface;
use App\Contracts\Author\AuthorServiceInterface;

class AuthorService implements AuthorServiceInterface
{
    protected $authorRepository;

    public function __construct(AuthorRepositoryInterface $authorRepository)
    {
        $this->authorRepository = $authorRepository;
    }


    public function all($paginate=null)
    {
        return $this->authorRepository->all($paginate);
    }

    public function create($request)
    {
        $author = new Author();
        $author->name = $request->name;
        $this->authorRepository->store($author);
    }

    public function edit($request, $id)
    {
        $author = $this->authorRepository->findById($id);
        $author->name = $request->name;
        $this->authorRepository->update($author);
    }

    public function delete($id)
    {
        $author = $this->authorRepository->findById($id);
        $this->authorRepository->delete($author);
    }

    public function search($keyword)
    {
        return $this->authorRepository->search($keyword);
    }

    public function findById($id)
    {
        return $this->authorRepository->findById($id);
    }
}
