<?php
namespace Mxy\Unit;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class UnitServiceProvide extends ServiceProvider
{
    public function boot()
    {
        $this->registerRoutes();

        $this->loadViewsFrom(
            __DIR__.'/../resources/views', 'unit'
        );
    }

    private function routeConfiguration()
    {
        return [
            'namespace' => 'Mxy\Unit\Http\Controllers',
            'prefix' => 'unit',
        ];
    }
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
        });
    }
}
