<?php

declare(strict_types = 1);

namespace src;

final class Pocitadlo
{

    public function __construct(private readonly Faktorial $_faktorial) {
    }

    public function sectiFaktorialy(int $a, int $b): int {
        return $this->_faktorial->factorialRecursive($a) + $this->_faktorial->factorialRecursive($b);
    }

}
