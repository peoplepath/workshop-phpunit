<?php

declare(strict_types = 1);

namespace src;

use InvalidArgumentException;

class Faktorial
{

    public function factorialRecursive1(int $n): int
    {
        return $n * $this->factorialRecursive1($n - 1);
    }

    public function factorialRecursive2(int $n): int
    {
        if ($n > 1) {
            return $n * $this->factorialRecursive2($n - 1);
        }

        return 1;
    }

    public function factorialRecursive3(int $n): int
    {
        if ($n < 0) {
            throw new InvalidArgumentException('Toto číslo musí být kladné. Dostal jsem ' . $n);
        }

        if ($n > 1) {
            return $n * $this->factorialRecursive3($n - 1);
        }

        return 1;
    }

    public function factorialRecursive(int $a): int {
        return $this->factorialRecursive3($a);
    }

}