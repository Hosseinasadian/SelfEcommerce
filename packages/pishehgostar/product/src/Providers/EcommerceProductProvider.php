<?php
namespace Pishehgostar\Product\Providers;

use Illuminate\Support\ServiceProvider;

class EcommerceProductProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void{

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void{
        $this->loadRoutesFrom(__DIR__ . '/../routes/routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');

    }
}
