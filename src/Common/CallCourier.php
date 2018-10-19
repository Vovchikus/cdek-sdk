<?php

namespace Appwilio\CdekSDK\Common;

/**
 * Class CallCourier
 * @package Appwilio\CdekSDK\Common
 */
class CallCourier
{
    /**
     * @JMS\SerializedName("CallCourier")
     * @JMS\XmlList(entry="Call")
     * @JMS\Type("Appwilio\CdekSDK\Common\CallCourier")
     *
     * @var Call
     */
    public $CallCourier;

}