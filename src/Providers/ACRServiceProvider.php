<?php
namespace BAF\ACR\Providers;

use Illuminate\Support\ServiceProvider;

class ACRServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        
        // $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        // $this->publishes([
        //     __DIR__ . '/../../publishable/assets' => public_path('vendor/masterdata/assets'),
        // ], 'public');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'acr');
    }
    public function register(): void
    {
        // $this->mergeConfigFrom(
        //     __DIR__ . '/../config/sidebar.php','navigation'
        // );
    }

}