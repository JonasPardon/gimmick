<?php

namespace App\Http\Repositories;

class GimmickRepository
{
    protected $model;

    /**
     * Show all entities.
     *
     * @return mixed
     */
    public function index()
    {
        return $this->model->all();
    }

    /**
     * Show a specific entity.
     *
     * @param $id
     *
     * @return mixed
     */
    public function show($id)
    {
        return $this->model->find($id);
    }

    /**
     * Store a new entity.
     *
     * @param array $data
     *
     * @return mixed
     */
    public function store(array $data)
    {
        $model = $this->model->fill($data);
        $model->save();

        return $model;
    }

    /**
     * Update the entity with the provided id.
     *
     * @param       $id
     * @param array $data
     *
     * @return mixed
     */
    public function update($id, array $data)
    {
        $model = $this->show($id);
        $model->fill($data);
        $model->save();

        return $model;
    }
}
