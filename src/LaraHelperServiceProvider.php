<?php


namespace Shuvo\LaraHelper;

use Illuminate\Support\ServiceProvider;

class LaraHelperServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/route.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'dev');
    }

    public function register()
    {
        parent::register(); // TODO: Change the autogenerated stub
    }
}
