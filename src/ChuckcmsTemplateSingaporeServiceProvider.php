<?php

namespace Chuckbe\ChuckcmsTemplateSingapore;

use Chuckbe\ChuckcmsTemplateSingapore\Commands\PublishSingapore;

use Illuminate\Support\ServiceProvider;

class ChuckcmsTemplateSingaporeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {   
        $this->loadMigrationsFrom(__DIR__.'/migrations');

        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishSingapore::class,
            ]);
        }
        
        //php artisan vendor:publish --tag=chuckcms-template-singapore-public --force
        $this->publishes([
            __DIR__.'/resources' => public_path('chuckbe/chuckcms-template-singapore'),
        ], 'chuckcms-template-singapore-public');

        // $this->publishes([
        //     __DIR__ . '/config/chuckcms-template-singapore.php' => config_path('chuckcms-template-singapore'),
        // ], 'chuckcms-template-singapore-config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'chuckcms-template-singapore');

        // $this->mergeConfigFrom(
        //     __DIR__ . '/config/chuckcms-template-singapore.php', 'chuckcms-template-singapore-config'
        // );
    }
}
