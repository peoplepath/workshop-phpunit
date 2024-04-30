<?php

declare(strict_types = 1);

namespace DeepCopy\Filter;

/**
 * Defines a decorator filter that will not stop the chain of filters.
 */
final class ChainableFilter implements Filter
{

    /** @var Filter */
    protected $filter;

    public function __construct(Filter $filter)
    {
        $this->filter = $filter;
    }

    public function apply($object, $property, $objectCopier): void
    {
        $this->filter->apply($object, $property, $objectCopier);
    }

}
