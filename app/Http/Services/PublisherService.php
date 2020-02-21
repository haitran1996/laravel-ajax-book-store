<?php


namespace App\Http\Services;


use App\Contracts\Publisher\PublisherRepositoryInterface;
use App\Contracts\Publisher\PublisherServiceInterface;
use App\Publisher;

class PublisherService implements PublisherServiceInterface
{

    protected $publisherRepository;

    public function __construct(PublisherRepositoryInterface $publisherRepository)
    {
        $this->publisherRepository = $publisherRepository;
    }

    public function all($paginate=null)
    {
        return $this->publisherRepository->all($paginate);
    }

    public function create($request)
    {
        $publisher = new Publisher();
        $publisher->name = $request->name;
        $this->publisherRepository->store($publisher);
    }

    public function edit($request, $id)
    {
        $publisher= $this->publisherRepository->findById($id);
        $publisher->name = $request->name;
        $this->publisherRepository->update($publisher);
    }

    public function delete($id)
    {
        $publisher = $this->publisherRepository->findById($id);
        $this->publisherRepository->delete($publisher);
    }

    public function search($keyword)
    {
        // TODO: Implement search() method.
    }

    public function findById($id)
    {
        return $this->publisherRepository->findById($id);
    }
}
