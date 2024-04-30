<?php

declare(strict_types = 1);

namespace src;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

final class FaktorialTest extends TestCase
{

    private Faktorial $_faktorial;

    public function testFactorial2(): void {
        $this->assertEquals(1, $this->_faktorial->factorialRecursive2(0));
        $this->assertEquals(1, $this->_faktorial->factorialRecursive2(1));
        $this->assertEquals(2, $this->_faktorial->factorialRecursive2(2));
        $this->assertEquals(6, $this->_faktorial->factorialRecursive2(3));
        $this->assertEquals(24, $this->_faktorial->factorialRecursive2(4));
        $this->assertEquals(120, $this->_faktorial->factorialRecursive2(5));
    }

    public function testFactorial3Error(): void {
//        $this->expectException(InvalidArgumentException::class);
        // Contains message
//        $this->expectExceptionMessage('číslo musí být kladné');
        $this->_faktorial->factorialRecursive3(-1);
    }

    public function testFactorial3ErrorReg(): void {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessageMatches('/^Toto číslo musí být kladné. Dostal jsem$/');
        $this->_faktorial->factorialRecursive3(-1);
    }

    protected function setUp(): void {
        $this->_faktorial = new Faktorial();
    }

}