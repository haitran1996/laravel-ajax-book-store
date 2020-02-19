<?php


namespace App\Contracts;


interface RepositoryInterface
{
    public function model(); //return doi tuong.

    public function all($paginate);

    public function delete($obj);

    public function update($obj);

    public function store($obj);

    public function search($keyword);
}
