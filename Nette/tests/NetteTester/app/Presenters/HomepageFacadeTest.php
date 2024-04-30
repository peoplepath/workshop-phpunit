<?php

namespace NetteTester\AppTests\Presenters;


use App\Presenters\HomepageFacade;
use Tester\Assert;
use Tester\TestCase;

require __DIR__ . '/../../../bootstrap.php';


class HomepageFacadeTest extends TestCase
{
    public function testSoucet()
    {
        Assert::same(5, (new HomepageFacade())->soucet(2,3));
    }
    public function testSoucetFail()
    {
        Assert::same(5, (new HomepageFacade())->soucet(2,3));
    }
}

(new HomepageFacadeTest())->run();