<?php

declare(strict_types = 1);

namespace DeepCopy\TypeFilter;

/** @final */
final class ShallowCopyFilter implements TypeFilter
{

    /**
     * {@inheritDoc}
     */
    public function apply($element)
    {
        return clone $element;
    }

}
