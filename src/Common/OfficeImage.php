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

class OfficeImage
{
    use Fillable;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("url")
     * @JMS\Type("string")
     *
     * @var string
     */
    public $url;
}
