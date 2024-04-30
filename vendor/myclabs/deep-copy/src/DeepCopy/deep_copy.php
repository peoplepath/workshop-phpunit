<?php

declare(strict_types = 1);

namespace DeepCopy;

use function function_exists;

if (false === function_exists('DeepCopy\deep_copy')) {
    /**
     * Deep copies the given value.
     */
    function deep_copy(mixed $value, bool $useCloneMethod = false): mixed
    {
        return (new DeepCopy($useCloneMethod))->copy($value);
    }
}
