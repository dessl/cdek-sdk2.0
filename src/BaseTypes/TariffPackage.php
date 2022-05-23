<?php

declare(strict_types=1);

namespace CdekSDK2\BaseTypes;

use JMS\Serializer\Annotation\Type;

/**
 * Class Package
 * @package CdekSDK2\BaseTypes
 */
class TariffPackage extends Base
{
    /**
     * Общий вес (в граммах)
     * @Type("int")
     * @var int
     */
    public $weight;

    /**
     * Габариты упаковки. Длина (в сантиметрах)
     * @Type("int")
     * @var int
     */
    public $length;

    /**
     * Габариты упаковки. Ширина (в сантиметрах)
     * @Type("int")
     * @var int
     */
    public $width;

    /**
     * Габариты упаковки. Высота (в сантиметрах)
     * @Type("int")
     * @var int
     */
    public $height;

    /**
     * TariffPackage constructor
     * @param array $param
     */
    public function __construct(array $param = [])
    {
        parent::__construct($param);
        $this->rules = [
            'weight' => 'required|numeric',
            'length' => 'numeric',
            'width' => 'numeric',
            'height' => 'numeric'
        ];
    }
}
