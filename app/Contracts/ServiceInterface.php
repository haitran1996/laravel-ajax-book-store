<?php


namespace App\Contracts;


interface ServiceInterface
{
    public function all($paginate);

    public function create($request);

    public function edit($request, $id);

    public function delete($id);

    public function search($keyword);
}
