<?php ## Создание генератора
function simple($from = 0, $to = 100)
{
  for ($i = $from; $i < $to; $i++) {
    yield $i;
  }
}

$obj = simple(1,5);

while($obj->valid()) {
  echo ($obj->current() * $obj->current()) . " ";
  $obj->next();
}