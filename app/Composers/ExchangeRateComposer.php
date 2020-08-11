<?php


namespace App\Composers;


use App\Contracts\ExchangeRate;
use Illuminate\View\View;

/**
 * Класс ExchangeRateComposer отвечает за отображение курса валют в футере сайта
 * @package App\Composers
 */
class ExchangeRateComposer
{
    public function compose(View $view)
    {
        /** @var ExchangeRate $exchangeRate */
        $exchangeRate = app(ExchangeRate::class);
        $result['date'] = $exchangeRate->getDate();
        $result['dollar'] = $exchangeRate->getDollarRate();
        $result['euro'] = $exchangeRate->getEuroRate();
        $view->with('exchangeRate', $result);
    }
}
