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
        $this->publishes([
            __DIR__ . '/resources/views/profile.blade.php' => resource_path('views/profile.blade.php'),
            __DIR__ . '/resources/views/app.blade.php' => resource_path('views/layouts/app.blade.php'),
        ], 'views');

        $this->loadRoutesFrom(__DIR__ . '/routes.php');
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