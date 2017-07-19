<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php

class Counter
{
  private static $count = 0;

  public function __construct()
  {
    self::$count++;
  }

  public function __destruct()
  {
    self::$count--;
  }

  public static function getCount()
  {
    return self::$count;
  }

}

for ($objs = [], $i = 0; $i < 6; $i++)
  $objs[] = new Counter();

echo "Сейчас существует {$objs[0]->getCount()} объектов<br>";

$objs[5] = null;

echo "А теперь существует {$objs[0]->getCount()} объектов<br>";

$objs = [];

echo "Под конец осталось " . Counter::getCount(). " объектов<br>";


?>
</body>
</html>

