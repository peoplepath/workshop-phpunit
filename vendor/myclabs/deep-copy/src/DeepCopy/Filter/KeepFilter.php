<?php

declare(strict_types = 1);

namespace DeepCopy\Filter;

final class KeepFilter implements Filter
{

    /**
     * Keeps the value of the object property.
     *
     * {@inheritDoc}
     */
    public function apply($object, $property, $objectCopier)
    {
        // Nothing to do
    }

}
