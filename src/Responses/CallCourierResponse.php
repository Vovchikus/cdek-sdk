<?php

namespace Appwilio\CdekSDK\Responses;

use Appwilio\CdekSDK\Common\Call;
use Appwilio\CdekSDK\Common\Order;
use Appwilio\CdekSDK\Responses\Types\Result;
use JMS\Serializer\Annotation as JMS;


/**
 * Class CallCourierResponse
 * @package Appwilio\CdekSDK\Responses
 */
class CallCourierResponse
{
    /**
     * @JMS\SerializedName("Call")
     * @JMS\Type("Appwilio\CdekSDK\Common\Call")
     *
     * @var Call
     */
    public $Call;

    /**
     * @JMS\SerializedName("CallCourier")
     * @JMS\Type("Appwilio\CdekSDK\Common\Call")
     *
     * @var Call
     */
    public $CallCourier;
}