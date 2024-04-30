<?php

declare(strict_types = 1);

namespace DeepCopy\Filter;

/**
 * Filter to apply to a property while copying an object
 */
interface Filter
{

    /**
     * Applies the filter to the object.
     */
    public function apply(object $object, string $property, callable $objectCopier): void;

}
