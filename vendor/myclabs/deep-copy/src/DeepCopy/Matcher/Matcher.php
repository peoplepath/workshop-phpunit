<?php

declare(strict_types = 1);

namespace DeepCopy\Matcher;

interface Matcher
{

    public function matches(object $object, string $property): bool;

}
