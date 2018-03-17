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
        $this->loadRoutesFrom(__DIR__ . '/routes.php');

        $this->publishes([
            __DIR__ . '/resources/views/profile.blade.php' => resource_path('views/profile.blade.php'),
            __DIR__ . '/resources/views/app.blade.php' => resource_path('views/layouts/app.blade.php'),
        ], 'views');

        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('user-profile.php'),
        ], 'config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() : void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'user-profile');
    }
}