<?php

namespace AaronAdrian\LaravelModulesStubs;

use Illuminate\Support\ServiceProvider;

class LaravelModulesStubsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/modules.php' => config_path('modules.php'),
            __DIR__.'/../stubs' => resource_path('stubs/laravel-modules'),
        ], 'stubs');
    }
}