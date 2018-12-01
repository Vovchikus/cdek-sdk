<?php

namespace Appwilio\CdekSDK\Requests;

use JMS\Serializer\Annotation as JMS;

/**
 * Class UpdateRequest
 * @package Appwilio\CdekSDK\Requests
 * @JMS\XmlRoot(name="UpdateRequest")
 */
class UpdateRequest extends DeliveryRequest
{
    protected const ADDRESS = 'https://integration.cdek.ru/update';
}