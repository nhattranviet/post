<?php

namespace Nhatcaht\Post\Providers;

use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routers/web.php');
        $this->loadViewsFrom(__DIR__.'/../../resources/view/', 'post');
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations/', 'post');
        $this->mergeConfigFrom(__DIR__.'/../../config/config.php', 'post');
    }

    public function register()
    {
        // $this->mergeConfigFrom(__DIR__.'/../../config/config.php', 'post');
        $list_helper = glob(__DIR__.'/../../helpers/*.php');
        foreach ($list_helper as $helper) {
            require_once $helper;
        }
    }
}