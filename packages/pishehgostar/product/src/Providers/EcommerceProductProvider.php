<?php
namespace Pishehgostar\Product\Providers;

use Illuminate\Support\ServiceProvider;
use Pishehgostar\Product\Models\GroupVariant;
use Pishehgostar\Product\Models\GroupVariantValue;
use Pishehgostar\Product\Models\ProductGroup;
use Pishehgostar\Product\Observers\GroupVariantObserver;
use Pishehgostar\Product\Observers\GroupVariantValueObserver;
use Pishehgostar\Product\Observers\ProductGroupObserver;

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

        ProductGroup::observe(ProductGroupObserver::class);
        GroupVariant::observe(GroupVariantObserver::class);
        GroupVariantValue::observe(GroupVariantValueObserver::class);
    }
}
