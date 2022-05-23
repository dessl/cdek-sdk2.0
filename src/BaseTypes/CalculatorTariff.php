<?php

declare(strict_types=1);

namespace CdekSDK2\BaseTypes;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;

/**
 * Class CalculatorTariff
 * @package CdekSDK2\BaseTypes
 */
class CalculatorTariff extends Base
{
    /**
     * Дата и время планируемой передачи заказа
     * @SkipWhenEmpty()
     * @Type("string")
     * @var string
     */
    public $date;

    /**
     * Название компании
     * @Type("int")
     * @var int
     */
    public $type = 1;

    /**
     * Валюта
     * @Type("int")
     * @var int
     */
    public $currency = 2;

    /**
     * Код тарифа
     * @Type("int")
     * @var int
     */
    public $tariff_code;

    /**
     * Адрес отправления
     * @Type("CdekSDK2\BaseTypes\Address")
     * @var Address
     */
    public $from_location;

    /**
     * Адрес получения
     * @Type("CdekSDK2\BaseTypes\Address")
     * @var Address
     */
    public $to_location;

    /**
     * Список информации по местам (упаковкам)
     * @Type("array<CdekSDK2\BaseTypes\TariffPackage>")
     * @var TariffPackage[]
     */
    public $packages;


    /**
     * CalculatorTariff constructor
     * @param array $param
     */
    public function __construct(array $param = [])
    {
        parent::__construct($param);
        $this->rules = [
            'type' => 'required|numeric',
            'tariff_code' => 'required|numeric',
            'from_location' => [
                'required',
                function ($value) {
                    if ($value instanceof Address) {
                        return $value->validate();
                    }
                }
            ],
            'to_location' => [
                'required',
                function ($value) {
                    if ($value instanceof Address) {
                        return $value->validate();
                    }
                }
            ],
            'packages' => [
                'required', 'array',
                function ($value) {
                    if (!is_array($value) || empty($value) || count($value) < 1) {
                        return false;
                    }
                    $i = 0;
                    foreach ($value as $item) {
                        if ($item instanceof TariffPackage) {
                            $i += (int)$item->validate();
                        }
                    }
                    return ($i === count($value));
                }
            ],
        ];
    }
}
