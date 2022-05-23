<?php

declare(strict_types=1);

namespace CdekSDK2\Actions;

use CdekSDK2\BaseTypes\CalculatorTariff as CalculatorTariffType;
use CdekSDK2\Http\ApiResponse;

/**
 * Class CalculatorTariff
 * @package CdekSDK2\Actions
 */
class CalculatorTariff extends Action
{
    public const URL = '/calculator/tariff';


    public function check(CalculatorTariffType $type): ApiResponse
    {
        $params = $this->serializer->toArray($type);
        return $this->http_client->post($this->slug(), $params);
    }
}
