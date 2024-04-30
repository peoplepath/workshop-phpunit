<?php

declare(strict_types = 1);

namespace src;

use DG\BypassFinals;
use PHPUnit\Framework\TestCase;

final class FinalClassTest extends TestCase
{

    public function testNahodneCisloMock(): void
    {
        // Bypass na final třídy
        BypassFinals::enable(false);
        $nahodneCislo = $this->createMock(FinalClass::class);
        $nahodneCislo->method('nahodneCislo')->willReturn(5);

        $this->assertSame(5, $nahodneCislo->nahodneCislo());
    }

    public function testNahodneCislo(): void
    {
        $this->assertIsInt((new FinalClass())->nahodneCislo());
        $this->assertGreaterThanOrEqual(0, (new FinalClass())->nahodneCislo());
        $this->assertLessThanOrEqual(\PHP_INT_MAX, (new FinalClass())->nahodneCislo());
    }

}