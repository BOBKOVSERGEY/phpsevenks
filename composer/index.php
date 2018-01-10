<?php
require_once __DIR__ . '/vendor/autoload.php';

$log = new \Monolog\Logger('name');
$handler = new \Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING);
$log->pushHandler($handler);
$log->addWarning('Предупреждение');