<?php

declare(strict_types=1);

namespace CdekSDK2\BaseTypes;

use JMS\Serializer\Annotation\Type;

class Address extends Base
{
    /**
     * Код населенного пункта СДЭК
     * @Type("int")
     * @var int
     */
    public $code;

    /**
     * Почтовый индекс
     * @Type("string")
     * @var string
     */
    public $postal_code;

    /**
     * Код страны в формате  ISO_3166-1_alpha-2
     * @Type("string")
     * @var string
     */
    public $country_code;

    /**
     * Название города
     * @Type("string")
     * @var string
     */
    public $city;

    /**
     * Полная строка адреса
     * @Type("string")
     * @var string
     */
    public $address;

    /**
     * Address constructor
     * @param array $param
     */
    public function __construct(array $param = [])
    {
        parent::__construct($param);
        $this->rules = [
            'code' => 'required'
        ];
    }
}
