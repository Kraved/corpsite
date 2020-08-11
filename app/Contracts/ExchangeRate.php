<?php


namespace App\Contracts;


interface ExchangeRate
{

    /**
     * Получение курса доллара
     * @return string
     */
    public function getDollarRate(): string;

    /**
     * Получение курса евро
     * @return string
     */
    public function getEuroRate(): string;

    /**
     * Получение даты
     * @return string
     */
    public function getDate() : string;
}
