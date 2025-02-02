<?php

declare(strict_types = 1);

namespace DeepCopy\Matcher;

/** @final */
final class PropertyNameMatcher implements Matcher
{

    /** @var string */
    private $property;

    /** @param string $property Property name */
    public function __construct(string $property)
    {
        $this->property = $property;
    }

    /**
     * Matches a property by its name.
     *
     * {@inheritDoc}
     */
    public function matches($object, $property)
    {
        return $property === $this->property;
    }

}
