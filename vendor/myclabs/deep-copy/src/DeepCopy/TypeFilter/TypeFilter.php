<?php

declare(strict_types = 1);

namespace DeepCopy\TypeFilter;

interface TypeFilter
{

    /**
     * Applies the filter to the object.
     */
    public function apply(mixed $element): void;

}
