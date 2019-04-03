<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'slug',
        'name',
        'html',
        'css',
        'extras',
        'lang',
        'active',
        'created_at',
        'updated_at',
    ];
}
