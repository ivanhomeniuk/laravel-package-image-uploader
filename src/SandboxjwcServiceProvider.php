<?php

namespace Victorycto\Sandboxjwc;

use Illuminate\Support\ServiceProvider;
use Victorycto\Sandboxjwc\ImageSaver;

class SandboxjwcServiceProvider extends ServiceProvider
{

    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
         $this->loadMigrationsFrom(__DIR__.'/../migrations');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {

        $this->app->make('Victorycto\Sandboxjwc\Controller\ImageUploadController');

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['sandboxjwc'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration files.
        $this->publishes([
            __DIR__.'/../config/aws.php' => config_path('aws.php'),
        ], 'sandboxjwc.config');

        $this->publishes([
            __DIR__.'/../config/image.php' => config_path('image.php'),
        ], 'sandboxjwc.config');

        // Register the routes in Service provider
//        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');


        //Migration
        $this->loadMigrationsFrom(__DIR__.'/migrations/CreateImagesTable.php');

        // Publishing the views.
        $this->publishes([
            __DIR__.'/../resources/view/imageLoader.blade.php' => base_path('resources/views/victorycto/imageLoader.blade.php'),
        ], 'sandboxjwc.views');

    }
}
