<?php

declare(strict_types = 1);

namespace DeepCopy\TypeMatcher;

final class TypeMatcher
{

    /** @var string */
    private $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function matches(mixed $element): bool
    {
        return is_object($element)
            ? is_a($element, $this->type)
            : gettype($element) === $this->type;
    }

}
