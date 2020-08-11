<?php

namespace App\Providers;

use App\Composers\ExchangeRateComposer;
use App\Contracts\ExchangeRate;
use App\Services\CbrRuExchangeRate;
use Illuminate\Support\ServiceProvider;
use \Illuminate\Support\Facades\View;

/**
 * Class ExchangeRateServiceProvider отвечает за получение и обработку курса доллара
 * @package App\Providers
 */
class ExchangeRateServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ExchangeRate::class, CbrRuExchangeRate::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.main', ExchangeRateComposer::class);
    }
}
