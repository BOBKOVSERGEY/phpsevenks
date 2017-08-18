<?php
require_once __DIR__ . '/Debug0.php';
$logger = new Debug0('test', 'test.log');
croak($logger, "Hasta lavista");
function croak(FileLogger $l, $msg)
{
  $l->log($msg);
  exit();
}