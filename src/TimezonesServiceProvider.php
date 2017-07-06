<?php

namespace Bizzle\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
        __DIR__.'/views' => base_path('resources/views/bizzle/timezones'),
        ]);
        $this->loadViewsFrom(__DIR__.'/Views', 'timezones');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Bizzle\Timezones\TimezonesController');
    }
}