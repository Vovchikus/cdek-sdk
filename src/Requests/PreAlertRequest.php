<?php

namespace Appwilio\CdekSDK\Requests;

use Appwilio\CdekSDK\Common\Order;
use Appwilio\CdekSDK\Common\Fillable;
use Appwilio\CdekSDK\Contracts\ShouldAuthorize;
use Appwilio\CdekSDK\Contracts\XmlRequest;
use Appwilio\CdekSDK\Requests\Concerns\Authorized;
use Appwilio\CdekSDK\Requests\Concerns\OrdersAware;
use Appwilio\CdekSDK\Requests\Concerns\RequestCore;

use JMS\Serializer\Annotation as JMS;


/**
 * Class PrintReceiptRequest
 *
 * @JMS\XmlRoot(name="PreAlert")
 *
 * @package Appwilio\CdekSDK\Requests
 */
class PreAlertRequest implements XmlRequest, ShouldAuthorize
{
    use Authorized, Fillable, OrdersAware, RequestCore;

    protected const METHOD = 'POST';
    protected const ADDRESS = 'https://integration.cdek.ru/addPreAlert';

    public function addOrder(Order $order)
    {
        $this->orders[$order->getDispatchNumber()] = $order;

        return $this;
    }

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("PlannedMeetingDate")
     * @JMS\Type("DateTimeImmutable<'Y-m-d'>")
     *
     * @var \DateTimeImmutable
     */
    public $PlannedMeetingDate;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("receiverBranch")
     * @JMS\Type("string")
     *
     * @var string
     */
    public $receiverBranch;
}