<?php

namespace Appwilio\CdekSDK\Requests;

use Appwilio\CdekSDK\Common\Call;
use Appwilio\CdekSDK\Common\Fillable;
use Appwilio\CdekSDK\Contracts\ShouldAuthorize;
use Appwilio\CdekSDK\Contracts\XmlRequest;
use Appwilio\CdekSDK\Requests\Concerns\Authorized;
use Appwilio\CdekSDK\Requests\Concerns\RequestCore;
use JMS\Serializer\Annotation as JMS;

/**
 * Class CallCourierRequest
 * @package Appwilio\CdekSDK\Requests
 * @JMS\XmlRoot(name="CallCourier")
 */
class CallCourierRequest implements XmlRequest, ShouldAuthorize
{
    use Authorized, Fillable, RequestCore;

    protected const METHOD = 'POST';
    protected const ADDRESS = 'call_courier.php';

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("Date")
     * @JMS\Type("DateTimeImmutable<'Y-m-d'>")
     *
     * @var \DateTimeImmutable
     */
    public $Date;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("CallCount")
     * @JMS\Type("integer")
     *
     * @var integer
     */
    public $CallCount;

    /**
     * @JMS\SerializedName("Call")
     * @JMS\XmlList(entry="Call")
     * @JMS\Type("Appwilio\CdekSDK\Common\Call")
     *
     * @var Call
     */
    public $Call;
}