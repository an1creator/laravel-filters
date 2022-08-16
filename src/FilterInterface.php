<?php

namespace N1Creator\LaravelFilters;

interface FilterInterface
{
    public function handle($value): void;
}
