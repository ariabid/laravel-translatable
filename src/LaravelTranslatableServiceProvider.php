<?php

namespace AriAbid\LaravelTranslatable;

use Illuminate\Support\ServiceProvider;

class LaravelTranslatableServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }

    public function register()
    {
        $this->app->make('AriAbid\LaravelTranslatable\TranslationsController');
    }
}
