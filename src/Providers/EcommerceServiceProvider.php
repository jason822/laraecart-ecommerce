<?php

namespace Laraecart\Ecommerce\Providers;

use Illuminate\Support\ServiceProvider;

class EcommerceServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Load view
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'ecommerce');

        // Load translation
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'ecommerce');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // Call pblish redources function
        $this->publishResources();

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Bind facade
        $this->app->bind('laraecart.ecommerce', function ($app) {
            return $this->app->make('Laraecart\Ecommerce\Ecommerce');
        });

        // Bind Category to repository
        $this->app->bind(
            'Laraecart\Ecommerce\Interfaces\CategoryRepositoryInterface',
            \Laraecart\Ecommerce\Repositories\Eloquent\CategoryRepository::class
        );
        // Bind Brand to repository
        $this->app->bind(
            'Laraecart\Ecommerce\Interfaces\BrandRepositoryInterface',
            \Laraecart\Ecommerce\Repositories\Eloquent\BrandRepository::class
        );
        // Bind Product to repository
        $this->app->bind(
            'Laraecart\Ecommerce\Interfaces\ProductRepositoryInterface',
            \Laraecart\Ecommerce\Repositories\Eloquent\ProductRepository::class
        );
        // Bind Review to repository
        $this->app->bind(
            'Laraecart\Ecommerce\Interfaces\ReviewRepositoryInterface',
            \Laraecart\Ecommerce\Repositories\Eloquent\ReviewRepository::class
        );

        $this->app->register(\Laraecart\Ecommerce\Providers\AuthServiceProvider::class);
        
        $this->app->register(\Laraecart\Ecommerce\Providers\RouteServiceProvider::class);
                
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laraecart.ecommerce'];
    }

    /**
     * Publish resources.
     *
     * @return void
     */
    private function publishResources()
    {
        // Publish configuration file
        $this->publishes([__DIR__ . '/../../config/config.php' => config_path('laraecart/ecommerce.php')], 'config');

        // Publish admin view
        $this->publishes([__DIR__ . '/../../resources/views' => base_path('resources/views/vendor/ecommerce')], 'view');

        // Publish language files
        $this->publishes([__DIR__ . '/../../resources/lang' => base_path('resources/lang/vendor/ecommerce')], 'lang');

        // Publish public files and assets.
        $this->publishes([__DIR__ . '/public/' => public_path('/')], 'public');
    }
}
