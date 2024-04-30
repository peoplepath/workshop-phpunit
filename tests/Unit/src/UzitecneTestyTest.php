<?php

declare(strict_types = 1);

namespace src;

use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;
use PHPUnit\Framework\Attributes\RequiresPhp;
use PHPUnit\Framework\Attributes\RequiresPhpExtension;
use PHPUnit\Framework\Attributes\RequiresPhpunit;
use PHPUnit\Framework\TestCase;

class UzitecneTestyTest extends TestCase
{

    /**
     * Test verze PHP
     */
    ##[RequiresPhp("< 8.4")]
    #[RequiresPhp("7.4")]
    public function testJenProPHP74(): void
    {
        $this->assertTrue(true);
    }


    #[RequiresPhpExtension("zlib", '>= 1.2.13')]
    #[RequiresPhpunit('11.1.2')]
    public function testJenProMySQLiVerzeAPhpUnitVerze(): void
    {
        $this->assertTrue(true);
    }


    #[DoesNotPerformAssertions]
    public function testBezAssertu(): void
    {
        // Jak udělat test bez assertu
    }

}