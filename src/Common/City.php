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

class City
{
    use Fillable;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("Code")
     * @JMS\Type("int")
     *
     * @var int
     */
    protected $Code;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("PostCode")
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $PostCode;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("Name")
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $Name;

    public function getCode(): ?int
    {
        return $this->Code;
    }

    public function getPostCode(): string
    {
        return $this->PostCode;
    }

    public function getName(): string
    {
        return $this->Name;
    }

    public function setCode(int $Code): City
    {
        $this->Code = $Code;
        return $this;
    }

    public function setPostCode(string $PostCode): City
    {
        $this->PostCode = $PostCode;
        return $this;
    }

    public function setName(string $Name): City
    {
        $this->Name = $Name;
        return $this;
    }
}
