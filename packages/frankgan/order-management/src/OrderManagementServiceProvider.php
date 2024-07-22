<?php

namespace Frankgan\OrderManagement;

use Illuminate\Support\ServiceProvider;

class OrderManagementServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'order-management');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/order-management'),
        ], 'public');
    }
}
