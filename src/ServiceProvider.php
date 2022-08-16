<?php

namespace N1Creator\LaravelFilters;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;
use N1Creator\LaravelFilters\Console\MakeFilterCommand;
use N1Creator\LaravelFilters\Facades\FilterBuilder;

class ServiceProvider extends IlluminateServiceProvider
{
    public function register()
    {
        $this->app->bind('filterBuilder', function ($app) {
            return new FilterBuilder();
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeFilterCommand::class
            ]);
        }
    }
}
