<?php

declare(strict_types=1);

namespace Appwilio\CdekSDK\Responses;


use Appwilio\CdekSDK\Common\CityItem;
use JMS\Serializer\Annotation as JMS;


class CityListResponse
{
    /**
     * @JMS\Type("array<Appwilio\CdekSDK\Common\CityItem>")
     *
     * @var CityItem[];
     */
    public $items = [];

    /**
     * @return CityItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
}