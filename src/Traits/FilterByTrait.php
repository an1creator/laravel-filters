<?php

namespace N1Creator\LaravelFilters\Traits;

use N1Creator\LaravelFilters\FilterBuilder;

trait FilterByTrait
{
    public function scopeFilterBy($query, $filters)
    {
        $path = explode('\\', get_class($this));
        $namespace = 'App\Data\Filters\\' . array_pop($path);
        $filter = new FilterBuilder($query, $filters, $namespace);
        return $filter->apply();
    }
}
