<?php

declare(strict_types = 1);

namespace src;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use src\Pocitadlo;

class PocitadloTest extends TestCase
{

    public function testPocitadlo(): void {
        $pocitadlo = new Pocitadlo(new Faktorial());
        $this->assertEquals(8, $pocitadlo->sectiFaktorialy(2, 3));
    }

    public function testPocitadloError(): void {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Toto číslo musí být kladné');
        $pocitadlo = new Pocitadlo(new Faktorial());
        $pocitadlo->sectiFaktorialy(2, -1);
    }

    public function testPocitadloMock(): void {
        $faktorial = $this->createMock(Faktorial::class);
        $faktorial->method('factorialRecursive')->willReturn(15);
        
        $pocitadlo = new Pocitadlo($faktorial);
        $this->assertEquals(30, $pocitadlo->sectiFaktorialy(2, 3));
    }

    public function testPocitadloMockWith(): void {
        $faktorial = $this->createMock(Faktorial::class);
        
        $faktorial->method('factorialRecursive')->with(2)->willReturn(10);
        
        $pocitadlo = new Pocitadlo($faktorial);
        $this->assertEquals(20, $pocitadlo->sectiFaktorialy(2, 2));
    }

    public function testPocitadloMockWithCallback(): void {
        $faktorial = $this->createMock(Faktorial::class);
        
        $faktorial->method('factorialRecursive')
            ->with($this->callback(static function (int $value): bool {
            return match ($value) {
                2, 3 => true,
                default => false,
            };
        }))->willReturn(10);
        
        $pocitadlo = new Pocitadlo($faktorial);
        $this->assertEquals(20, $pocitadlo->sectiFaktorialy(2, 3));
    }

    public function testPocitadloMockWithCallbackConsecutiveReturn(): void {
        $faktorial = $this->createMock(Faktorial::class);
        
        $faktorial->method('factorialRecursive')->with($this->callback(static function (int $value): bool {
            return match ($value) {
                2, 3 => true,
                default => false,
            };
        }))->willReturnOnConsecutiveCalls(10, 15);
        
        $pocitadlo = new Pocitadlo($faktorial);
        $this->assertEquals(25, $pocitadlo->sectiFaktorialy(2, 3));
    }

    public function testPocitadloMockWithCallbackExactOrder(): void {
        $faktorial = $this->createMock(Faktorial::class);

        $exactly = $this->exactly(2);
        $faktorial->expects($exactly)
            ->method('factorialRecursive')
            ->with($this->callback(static function (int $value) use ($exactly): bool {
            return $value === match ($exactly->numberOfInvocations()) {
                1 => 7,
                2 => 12,
            };
        }))->willReturnCallback(static function () use ($exactly): int {
            return match ($exactly->numberOfInvocations()) {
                    1 => 15,
                    2 => 20,
                };
        });
        
        $pocitadlo = new Pocitadlo($faktorial);
        $this->assertEquals(35, $pocitadlo->sectiFaktorialy(7, 12));
    }
    
    
    public function testCastecnyMock() : void {
        $faktorialMock = $this->createPartialMock(Faktorial::class, ['factorialRecursive3']);
        $faktorialMock->method('factorialRecursive3')->willReturn(7);
        
        $this->assertEquals(7, $faktorialMock->factorialRecursive3(25));
        $this->assertEquals(7, $faktorialMock->factorialRecursive3(3));
        $this->assertEquals(6, $faktorialMock->factorialRecursive2(3));
        
    }

}