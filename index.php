<?php

declare(strict_types = 1);

require_once __DIR__ . '/vendor/autoload.php';

$logickaMapa = new \src\LogickaMapa();
echo "LogickaMapaAnd<br>";
echo ($logickaMapa->LogickaMapaAnd(true, true) === true ? 'Ok' : 'Failure') ."<br>";
echo ($logickaMapa->LogickaMapaAnd(true, false) === false ? 'Ok' : 'Failure') ."<br>";
echo ($logickaMapa->LogickaMapaAnd(false, true) === false ? 'Ok' : 'Failure') ."<br>";
echo ($logickaMapa->LogickaMapaAnd(false, false) === false ? 'Ok' : 'Failure') ."<br>";

echo '<br><br>';
echo "LogickaMapaOr<br>";
echo ($logickaMapa->LogickaMapaOr(true, true) === true ? 'Ok' : 'Failure') ."<br>";
echo ($logickaMapa->LogickaMapaOr(true, false) === true ? 'Ok' : 'Failure') ."<br>";
echo ($logickaMapa->LogickaMapaOr(false, true) === true ? 'Ok' : 'Failure') ."<br>";
echo ($logickaMapa->LogickaMapaOr(false, false) === false ? 'Ok' : 'Failure') ."<br>";