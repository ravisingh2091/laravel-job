<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AlphaHelperServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        require_once base_path().'/app/Helpers/AlphaHelpers.php';
    }
}
