<?php


namespace Appwilio\CdekSDK\Responses;


use AppBundle\Dto\DeliveryHandlerResponses\DeliveryParcel;
use AppBundle\Dto\DeliveryHandlerResponses\ISendParcelResponse;
use ShopApiBundle\Dto\Order\OrderErrorResponse;

class ParcelSendResponse implements ISendParcelResponse
{
    /**
     * @var string
     */
    public $deliveryServiceNumber;

    /**
     * @return DeliveryParcel[]
     */
    public function getParcels(): array
    {
        $deliveryParcel = new DeliveryParcel();
        $deliveryParcel->deliveryServiceNumber = $this->deliveryServiceNumber;
        return [$deliveryParcel];
    }

    /**
     * @return array
     */
    public function getSuccessIds(): array
    {
        return [];
    }

    /**
     * @return OrderErrorResponse[]
     */
    public function getErrors(): array
    {
        return [];
    }
}