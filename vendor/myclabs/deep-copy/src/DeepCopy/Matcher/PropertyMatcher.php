<?php

declare(strict_types = 1);

namespace DeepCopy\Matcher;

/** @final */
final class PropertyMatcher implements Matcher
{

    /** @var string */
    private $class;

    /** @var string */
    private $property;

    /**
     * @param string $class Class name
     * @param string $property Property name
     */
    public function __construct(string $class, string $property)
    {
        $this->class = $class;
        $this->property = $property;
    }

    /**
     * Matches a specific property of a specific class.
     *
     * {@inheritDoc}
     */
    public function matches($object, $property)
    {
        return ($object instanceof $this->class) && $property === $this->property;
    }

}
