<?php

declare(strict_types=1);

namespace Tests;

use Illuminate\Support\Facades\Artisan;
use Orchestra\Testbench\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

abstract class TestCase extends BaseTestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $this->app->setBasePath(__DIR__ . '/laravel');

        $this->withFactories(database_path('factories'));

        Artisan::call('migrate:fresh', ['--database' => 'testing']);
    }
}
