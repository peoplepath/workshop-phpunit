<?php

declare(strict_types=1);

use Tracy\Debugger;

require __DIR__ . '/../vendor/autoload.php';
Debugger::enable();
Debugger::$strictMode = true; // display all errors
Debugger::$strictMode = E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED;
$configurator = App\Bootstrap::boot();
$container = $configurator->createContainer();
$application = $container->getByType(Nette\Application\Application::class);
$application->run();
