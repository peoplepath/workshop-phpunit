<?php

declare(strict_types = 1);

namespace src;

use function rand;

final class FinalClass
{

    public function nahodneCislo(): int
    {
        return rand();
    }

}