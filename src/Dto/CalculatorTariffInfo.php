<?php

declare(strict_types=1);

namespace CdekSDK2\Dto;

use JMS\Serializer\Annotation\Type;

class CalculatorTariffInfo
{
    /**
     * Стоимость доставки
     * @Type("float")
     * @var float
     */
    public $delivery_sum;

    /**
     * Минимальное время доставки
     * @Type("int")
     * @var int
     */
    public $period_min;

    /**
     * Максимальное время доставки
     * @Type("int")
     * @var int
     */
    public $period_max;

    /**
     * Минимальное время доставки (в рабочих днях)
     * @Type("int")
     * @var int
     */
    public $calendar_min;

    /**
     * Максимальное время доставки (в рабочих днях)
     * @Type("int")
     * @var int
     */
    public $calendar_max;

    /**
     * Расчетный вес (в граммах)
     * @Type("int")
     * @var int
     */
    public $weight_calc;

    /**
     * Стоимость доставки с учетом дополнительных услуг
     * @Type("int")
     * @var int
     */
    public $total_sum;

    /**
     * Валюта
     * @Type("string")
     * @var string
     */
    public $currency;
}
