<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use N1Creator\LaravelFilters\Traits\FilterByTrait;

class Book extends Model
{
    use FilterByTrait, SoftDeletes;

    protected $fillable = [
        'title',
        'author',
        'year',
    ];
}
