<?php

namespace PHPUnit\Presenters;

use App\Presenters\HomepageFacade;
use PHPUnit\Framework\TestCase;
use Tester\Assert;

class HomepageFacadeTest extends TestCase
{
    public function testSoucet()
    {
        $this->assertSame(5, (new HomepageFacade())->soucet(2,3));
        $this->assertSame(5, (new HomepageFacade())->soucet(2,3));
    }
}