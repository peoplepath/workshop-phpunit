<?php

declare(strict_types = 1);

namespace DeepCopy\TypeFilter\Date;

use DateInterval;
use DeepCopy\TypeFilter\TypeFilter;

/**
 * @final
 * @deprecated Will be removed in 2.0. This filter will no longer be necessary in PHP 7.1+.
 */
final class DateIntervalFilter implements TypeFilter
{

    /**
     * {@inheritDoc}
     *
     * @param DateInterval $element
     * @see http://news.php.net/php.bugs/205076
     */
    public function apply($element)
    {
        $copy = new DateInterval('P0D');

        foreach ($element as $propertyName => $propertyValue) {
            $copy->{$propertyName} = $propertyValue;
        }

        return $copy;
    }

}
