<?php


namespace App\Http\Services;


use App\Contracts\User\UserRepositoryInterface;
use App\Contracts\User\UserServiceInterface;

class UserService implements UserServiceInterface
{
    protected $userRepo;

    public function __construct(UserRepositoryInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function all($paginate=null)
    {
        return $this->userRepo->all($paginate);
    }

    public function create($request)
    {
        $user = $this->userRepo->model();

        $user->fill($request->input());

        $this->userRepo->store($user);
    }

    public function getById($id)
    {
        return $this->userRepo->getById($id);
    }

    public function edit($request, $id)
    {
        $user = $this->userRepo->model();
        $user->fill($request->input());
        $this->userRepo->update($user);
    }

    public function delete($id)
    {
        $user = $this->userRepo->getById($id);
        $this->userRepo->delete($user);
    }

    public function search($keyword)
    {
        return $this->userRepo->search($keyword);
    }
}
