<?php

namespace Testovani;

use PHPUnit\Framework\TestCase;
class ServiceTest extends TestCase {
	public function testSoucet(  ) {
		$service = new Service();
		$this->assertSame(5, $service->soucet(2,3));
	}
}