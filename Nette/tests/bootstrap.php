<?php

use PHPUnit\AppTests\TestBootstrap;
use Wavevision\NetteTests\Configuration;

require __DIR__ . '/../vendor/autoload.php';

// Konfigurace pro PHP Unit
Configuration::setup([TestBootstrap::class, 'boot']);

// Konfigurace Nette testeru
#Tester\Environment::setup();                # inicializace Nette Tester