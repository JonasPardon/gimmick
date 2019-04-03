<?php

namespace App\Http\Repositories;

use App\Http\Traits\SluggableRepo;
use App\Page;

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
}
