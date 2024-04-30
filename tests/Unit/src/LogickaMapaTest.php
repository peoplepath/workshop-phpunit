<?php

namespace src;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

class LogickaMapaTest extends TestCase
{
    public function testLogickaMapaAnd() {
        $service = new LogickaMapa();
        $this->assertTrue($service->LogickaMapaAnd(true, true));
    }

    /**
     * @return void
     */
    #[TestWith([false, true], "Test data 1")]
    #[TestWith([false, false])]
    #[TestWith([true, false])]
    
    public function testLogickaMapaAndFalse(bool $a, bool $b) {
        $service = new LogickaMapa();
        $this->assertFalse($service->LogickaMapaAnd($a, $b));
    }
    
    #[DataProvider('vstupniDataPartneru')]
    public function testLogickaMapaPravdyPartneru(OnaVo $ona, OnVo $on, string $expectedResult) {
        $service = new LogickaMapa();
        $this->assertSame($expectedResult, $service->LogickaMapaPravdyPartneru($ona, $on));
    }
    
    public static function vstupniDataPartneru() {
        yield "Ona ma pravdu on se plete" => [new OnaVo(true), new OnVo(false), 'Ona ma pravdu'];
        yield "Ona ma pravdu on ma pravdu" => [new OnaVo(true), new OnVo(true), 'Ona ma pravdu'];
        yield "Ona se plete on ma pravdu" => [new OnaVo(false), new OnVo(true), 'Ona ma pravdu'];
        yield "Ona se plete on se plete" => [new OnaVo(false), new OnVo(false), 'On se plete'];
        yield "Ona se neví on se plete" => [new OnaVo(null), new OnVo(false), 'On se plete'];
        
    }
    
}