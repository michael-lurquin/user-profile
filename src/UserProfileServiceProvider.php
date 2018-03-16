<?php

namespace MichaelLurquin\UserProfile;

use Illuminate\Support\ServiceProvider;

class UserProfileServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() : void
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'user-profile');

        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() : void
    {
        //
    }
}