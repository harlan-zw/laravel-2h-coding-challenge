<?php

namespace App\Providers;

use App\Facade\CalculationFacade;
use App\helpers\ServiceCalculateIncome;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(CalculationFacade::class, function () {
            return ServiceCalculateIncome::class;
        });
    }
}
