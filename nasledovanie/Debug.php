<?php
require_once __DIR__ . "/FileLogger.php";

class Debug extends FileLogger
{
  public function __construct($fname)
  {
    parent::__construct(basename($fname), $fname);
  }
  public function debug()
  {

  }
}
