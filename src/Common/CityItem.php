<?php

namespace Appwilio\CdekSDK\Common;

use JMS\Serializer\Annotation as JMS;


/**
 * Class CityItem
 * @package Appwilio\CdekSDK\Common
 */
class CityItem
{
    /**
     * @JMS\SerializedName("cityName")
     * @JMS\Type("string")
     *
     * @var string
     */
    public $cityName;

    /**
     * @JMS\SerializedName("cityCode")
     * @JMS\Type("string")
     *
     * @var string
     */
    public $cityCode;

    /**
     * @JMS\SerializedName("cityUuid")
     * @JMS\Type("string")
     *
     * @var string
     */
    public $cityUuid;

    /**
     * @JMS\SerializedName("country")
     * @JMS\Type("string")
     *
     * @var string
     */
    public $country;

    /**
     * @JMS\SerializedName("countryCode")
     * @JMS\Type("string")
     *
     * @var string
     */
    public $countryCode;

    /**
     * @JMS\SerializedName("region")
     * @JMS\Type("string")
     *
     * @var string
     */
    public $region;

    /**
     * @JMS\SerializedName("regionCode")
     * @JMS\Type("string")
     *
     * @var string
     */
    public $regionCode;

    /**
     * @JMS\SerializedName("regionCodeExt")
     * @JMS\Type("string")
     *
     * @var string
     */
    public $regionCodeExt;

    /**
     * @JMS\SerializedName("subRegion")
     * @JMS\Type("string")
     *
     * @var string
     */
    public $subRegion;

    /**
     * @JMS\SerializedName("longitude")
     * @JMS\Type("string")
     *
     * @var string
     */
    public $longitude;

    /**
     * @JMS\SerializedName("latitude")
     * @JMS\Type("string")
     *
     * @var string
     */
    public $latitude;

    /**
     * @JMS\SerializedName("kladr")
     * @JMS\Type("string")
     *
     * @var string
     */
    public $kladr;

    /**
     * @JMS\SerializedName("fiasGuid")
     * @JMS\Type("string")
     *
     * @var string
     */
    public $fiasGuid;

    /**
     * @JMS\SerializedName("paymentLimit")
     * @JMS\Type("string")
     *
     * @var string
     */
    public $paymentLimit;

}