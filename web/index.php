<?php


use cgo\CgoFrame\Application;

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Application(__DIR__.'/..');
$app->run();
