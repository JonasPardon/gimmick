<?php

namespace App\Http\Repositories;

use App\Http\Traits\SluggableRepo;
use App\Page;
use Illuminate\Support\Str;

class PageRepository extends GimmickRepository
{
    use SluggableRepo;

    /**
     * PageRepository constructor.
     */
    public function __construct(Page $model)
    {
        $this->model = $model;
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
        $model = $this->attachSlug($model, $data);

        $model->save();

        return $model;
    }

    /**
     * Update the entity with the provided slug.
     *
     * @param       $slug
     * @param array $data
     *
     * @return mixed
     */
    public function update($slug, array $data)
    {
        $model = $this->model->show($slug);
        $model->fill($data);
        $model = $this->attachSlug($model, $data);

        $model->save();

        return $model;
    }

    /**
     * @param       $model
     * @param array $data
     *
     * @return mixed
     */
    protected function attachSlug($model, array $data)
    {
        if(!array_key_exists('slug', $data)) {
            Str::slug($model->name);
        }

        return $model;
    }
}
