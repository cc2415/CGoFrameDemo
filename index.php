<?php
define('DIR', dirname(__FILE__));
require_once __DIR__ . '/src/cgo/Application.php';
$app = new \cgo\Application(DIR);
$app->run();

