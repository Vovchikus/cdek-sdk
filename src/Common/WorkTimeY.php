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

class WorkTimeY
{
    use Fillable;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("day")
     * @JMS\Type("int")
     *
     * @var int
     */
    public $day;

    /**
     * @JMS\XmlAttribute
     * @JMS\SerializedName("periods")
     * @JMS\Type("string")
     *
     * @var string
     */
    public $periods;
}
