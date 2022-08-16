<?php

namespace N1Creator\LaravelFilters\Facades;

use Illuminate\Support\Facades\Facade;

class FilterBuilder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'filterBuilder';
    }
}
