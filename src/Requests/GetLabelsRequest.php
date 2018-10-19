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
 * @JMS\XmlRoot(name="OrdersPackagesPrint")
 *
 * @package Appwilio\CdekSDK\Requests
 */
class GetLabelsRequest implements XmlRequest, ShouldAuthorize
{
    use Authorized, Fillable, OrdersAware, RequestCore;

    protected const METHOD = 'POST';
    protected const ADDRESS = 'https://integration.cdek.ru/ordersPackagesPrint';

    public function addOrder(Order $order)
    {
        $this->orders[$order->getDispatchNumber()] = $order;

        return $this;
    }

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("OrderCount")
     * @JMS\Type("integer")
     */
    public $OrderCount;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("printFormat")
     * @JMS\Type("string")
     */
    public $printFormat;


}