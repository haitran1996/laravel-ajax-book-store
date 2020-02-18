<?php


namespace App\Contracts;


interface ServiceInterface
{
    public function all();

    public function create($request);

    public function edit($request);

    public function delete($id);

    public function update($request, $id);

    public function store($request);

    public function search($keyword);
}
