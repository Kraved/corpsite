<?php


namespace App\Services;


use App\Contracts\ExchangeRate;
use SimpleXMLElement;

/**
 * Класс XMLExchangeRate отвечает за полученние данных с сайта http://www.cbr.ru/scripts/XML_daily.asp
 * @package App\Services
 */
class CbrRuExchangeRate implements ExchangeRate
{

    private $url;

    /**
     * Установка url
     */
    public function __construct()
    {
        $this->url = 'http://www.cbr.ru/scripts/XML_daily.asp';
    }


    /**
     * ПОлучение данных с сайта
     * @return bool|string
     */
    public function curlHandler()
    {
        $resource = curl_init($this->url);
        curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
        $xml = curl_exec($resource);
        curl_close($resource);
        return $xml;
    }

    /**
     * Парсинг, получение данных о курсе доллара
     * @return string
     */
    public function getDollarRate():string
    {
        $xml = $this->curlHandler();
        $parserXML = simplexml_load_string($xml, SimpleXMLElement::class, LIBXML_NOERROR);
        return $parserXML ? $parserXML->xpath('Valute[@ID="R01235"]')[0]->Value : 'Не удалось получить курс долара';
    }

    /**
     * Парсинг, получение данных о курсе евро
     * @return string
     */
    public function getEuroRate():string
    {
        $xml = $this->curlHandler();
        $parserXML = simplexml_load_string($xml, SimpleXMLElement::class, LIBXML_NOERROR);
        return $parserXML ? $parserXML->xpath('Valute[@ID="R01239"]')[0]->Value : 'Не удалось получить курс евро';

    }

    /**
     * Парсинг, получение данных о дате
     * @return string
     */
    public function getDate():string
    {
        $xml = $this->curlHandler();
        $parserXML = simplexml_load_string($xml, SimpleXMLElement::class, LIBXML_NOERROR);
        return $parserXML ? $parserXML->attributes()['Date'] : 'Не удалось получить дату';
    }
}
