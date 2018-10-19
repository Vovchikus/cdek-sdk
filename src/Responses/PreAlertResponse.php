<?php

namespace Appwilio\CdekSDK\Responses;

use JMS\Serializer\Annotation as JMS;
use Appwilio\CdekSDK\Common\Order;

/**
 * Class PreAlertResponse
 * @package Appwilio\CdekSDK\Responses
 */
class PreAlertResponse
{
    /**
     * @JMS\XmlList(entry = "Order", inline = true)
     * @JMS\Type("array<Appwilio\CdekSDK\Common\Order>")
     *
     * @var array|Order[]
     */
    protected $orders = [];

}