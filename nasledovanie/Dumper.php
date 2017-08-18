<?php
class Dumper
{
  public static function print($obj)
  {
    print_r($obj);
  }
}

Dumper::print(new class {
  public $title;
  public function __construct()
  {
    $this->title = "Hello, world!";
  }
});

$array = [
  'name' => 'vasy',
  'lastname' => 'ivanov'
];

class Debug
{
  public static function printarr($arr)
  {
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
  }
}

Debug::printarr($array);