<?php


namespace App\Http\Repositories;


use App\Contracts\Publisher\PublisherRepositoryInterface;
use App\Publisher;

class PublisherRepository implements PublisherRepositoryInterface
{

    protected $publisher;
    public function __construct(Publisher $publisher)
    {
        $this->publisher = $publisher;
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
        // TODO: Implement search() method.
    }

    public function findById($id)
    {
        return $this->publisher->findOrFail($id);
    }
}
