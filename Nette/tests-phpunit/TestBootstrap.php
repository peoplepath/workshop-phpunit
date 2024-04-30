<?php
namespace PHPUnit\AppTests;

use App\Bootstrap;
use Nette\Bootstrap\Configurator;

class TestBootstrap {
    public static function boot(): Configurator
    {
        $configurator = Bootstrap::boot();
        $configurator
            ->addConfig(__DIR__.'/config/service.neon');
        return $configurator;
    }
}
