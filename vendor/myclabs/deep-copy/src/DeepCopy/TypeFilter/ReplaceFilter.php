<?php

declare(strict_types = 1);

namespace DeepCopy\TypeFilter;

/** @final */
final class ReplaceFilter implements TypeFilter
{

    /** @var callable */
    protected $callback;

    /** @param callable $callable Will be called to get the new value for each element to replace */
    public function __construct(callable $callable)
    {
        $this->callback = $callable;
    }

    /**
     * {@inheritDoc}
     */
    public function apply($element)
    {
        return call_user_func($this->callback, $element);
    }

}
