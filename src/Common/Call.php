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

class Call
{
    /**
     * @JMS\SerializedName("Address")
     * @JMS\Type("Appwilio\CdekSDK\Common\Address")
     *
     * @var Address
     */
    public $Address;

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
     * @JMS\SerializedName("TimeBeg")
     * @JMS\Type("DateTimeImmutable<'H:i:s'>")
     *
     * @var \DateTimeImmutable
     */
    public $TimeBeg;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("TimeEnd")
     * @JMS\Type("DateTimeImmutable<'H:i:s'>")
     *
     * @var \DateTimeImmutable
     */
    public $TimeEnd;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("LunchBeg")
     * @JMS\Type("DateTimeImmutable<'H:i:s'>")
     *
     * @var \DateTimeImmutable
     */
    public $LunchBeg;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("LunchEnd")
     * @JMS\Type("DateTimeImmutable<'H:i:s'>")
     *
     * @var \DateTimeImmutable
     */
    public $LunchEnd;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("SendCityCode")
     * @JMS\Type("integer")
     *
     * @var integer
     */
    public $SendCityCode;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("SenderName")
     * @JMS\Type("string")
     *
     * @var string
     */
    public $SenderName;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("SendPhone")
     * @JMS\Type("string")
     *
     * @var string
     */
    public $SendPhone;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("Comment")
     * @JMS\Type("string")
     *
     * @var string
     */
    public $Comment;

    /**
     * @JMS\SerializedName("SendAddress")
     * @JMS\Type("Appwilio\CdekSDK\Common\Address")
     *
     * @var Address
     */
    public $SendAddress;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("Number")
     * @JMS\Type("integer")
     *
     * @var integer
     */
    public $Number;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("Weight")
     * @JMS\Type("integer")
     *
     * @var integer
     */
    public $Weight;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("Msg")
     * @JMS\Type("string")
     *
     * @var string
     */
    public $Msg;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("ErrorCode")
     * @JMS\Type("string")
     *
     * @var string
     */
    public $ErrorCode;

    public function getDate(): \DateTimeImmutable
    {
        return $this->Date;
    }

    public function getTimeBeg(): \DateTimeImmutable
    {
        return $this->TimeBeg;
    }

    public function getTimeEnd(): \DateTimeImmutable
    {
        return $this->TimeEnd;
    }

    public function getLunchBeg(): \DateTimeImmutable
    {
        return $this->LunchBeg;
    }

    public function setDate(\DateTimeImmutable $Date): Call
    {
        $this->Date = $Date;
        return $this;
    }

    public function setTimeBeg(\DateTimeImmutable $TimeBeg): Call
    {
        $this->TimeBeg = $TimeBeg;
        return $this;
    }

    public function setTimeEnd(\DateTimeImmutable $TimeEnd): Call
    {
        $this->TimeEnd = $TimeEnd;
        return $this;
    }

    public function setLunchBeg(\DateTimeImmutable $LunchBeg): Call
    {
        $this->LunchBeg = $LunchBeg;
        return $this;
    }

    public function setLunchEnd(\DateTimeImmutable $LunchEnd): Call
    {
        $this->LunchEnd = $LunchEnd;
        return $this;
    }

    public function setSendCityCode(int $SendCityCode): Call
    {
        $this->SendCityCode = $SendCityCode;
        return $this;
    }

    public function setSendPhone(string $SendPhone): Call
    {
        $this->SendPhone = $SendPhone;
        return $this;
    }

    public function setComment(string $Comment): Call
    {
        $this->Comment = $Comment;
        return $this;
    }

    public function setSendAddress(Address $SendAddress): Call
    {
        $this->SendAddress = $SendAddress;
        return $this;
    }

    public function getSenderName(): string
    {
        return $this->SenderName;
    }

    public function setSenderName(string $SenderName): Call
    {
        $this->SenderName = $SenderName;
        return $this;
    }

    public function getWeight(): int
    {
        return $this->Weight;
    }

    public function setWeight(int $Weight): Call
    {
        $this->Weight = $Weight;
        return $this;
    }
}
