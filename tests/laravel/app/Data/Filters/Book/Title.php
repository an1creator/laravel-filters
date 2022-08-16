<?php

namespace App\Data\Filters\Book;

use N1Creator\LaravelFilters\FilterInterface;

class Title implements FilterInterface
{
    protected $query;

    public function __construct($query)
    {
        $this->query = $query;
    }

    public function handle($value): void
    {
        $this->query->where('title', 'like', '%' . $value . '%');
    }
}
