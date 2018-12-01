<?php

namespace Appwilio\CdekSDK\Responses;

use Appwilio\CdekSDK\Common\Order;
use JMS\Serializer\Annotation as JMS;

/**
 * Class UpdateResponse
 * @package Appwilio\CdekSDK\Responses
 * @JMS\XmlRoot("response")
 *
 */
class UpdateResponse
{
    /**
     * @JMS\SerializedName("Order")
     * @JMS\Type("Appwilio\CdekSDK\Common\Order")
     * @var Order
     */
    public $Order;
}