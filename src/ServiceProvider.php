<?php

namespace diaeai\LaravelPython3;

use diaeai\LaravelPython3\Services\Python3;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom($this->packagePath() . '/config/laravel-python3.php', 'laravel-python3');
        $this->app->singleton('python3', function () { return new Python3();});
    }

    public function boot()
    {
        $this->publishes([$this->packagePath() . '/config/python3.php' => config_path('python3.php')], 'config');
    }

    private function packagePath()
    {
        return __DIR__ . '/..';
    }

}
