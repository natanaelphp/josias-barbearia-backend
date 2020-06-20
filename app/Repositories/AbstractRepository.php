<?php

namespace App\Repositories;

class AbstractRepository
{
    protected $model;

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function updateOrCreate(array $where, array $data)
    {
        return $this->model->updateOrCreate($where, $data);
    }

    public function update(array $data, $id)
    {
        $entity = $this->model->find($id);
        $entity->update($data);

        return $entity;
    }

    public function delete($idOrArrayOfIds)
    {
        return $this->model->destroy($idOrArrayOfIds);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

    public function getAll()
    {
        return $this->model->all();
    }
}
