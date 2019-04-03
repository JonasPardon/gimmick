<?php

namespace App\Http\Traits;

trait SluggableRepo
{
    /**
     * Show a specific entity.
     *
     * @param $slug
     *
     * @return mixed
     */
    public function show($slug)
    {
        return $this->model->where('slug', $slug)->first();
    }
}
