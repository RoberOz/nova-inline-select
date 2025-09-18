<?php

namespace Tests;

use Illuminate\Foundation\Application;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use RoberOz\Nova\InlineSelectFieldServiceProvider;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider.
     *
     * @param  Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [InlineSelectFieldServiceProvider::class];
    }
}
