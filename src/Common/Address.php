<?php

/**
 * This file is part of Cdek SDK package.
 *
 * © Appwilio (http://appwilio.com), greabock (https://github.com/greabock), JhaoDa (https://github.com/jhaoda)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Appwilio\CdekSDK\Common;

use JMS\Serializer\Annotation as JMS;

class Address
{
    use Fillable;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("Street")
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $Street;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("House")
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $House;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("Flat")
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $Flat;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("PvzCode")
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $PvzCode;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("SenderName")
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $SenderName;

    public function getSenderName(): string
    {
        return $this->SenderName;
    }

    public function getPvzCode(): string
    {
        return $this->PvzCode;
    }

    public function getFlat(): string
    {
        return $this->Flat;
    }

    public function getHouse(): string
    {
        return $this->House;
    }

    public function getStreet(): string
    {
        return $this->Street;
    }

    public function setStreet(string $Street): Address
    {
        $this->Street = $Street;
        return $this;
    }

    public function setHouse(string $House): Address
    {
        $this->House = $House;
        return $this;
    }

    public function setFlat(string $Flat): Address
    {
        $this->Flat = $Flat;
        return $this;
    }

    public function setPvzCode(string $PvzCode): Address
    {
        $this->PvzCode = $PvzCode;
        return $this;
    }

    public function setSenderName(string $SenderName): Address
    {
        $this->SenderName = $SenderName;
        return $this;
    }
}
