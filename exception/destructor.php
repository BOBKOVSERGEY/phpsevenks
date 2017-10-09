<?php # Деструкторы и исключения
class Orator
{
  private $name;
  public function __construct($name)
  {
    $this->name = $name;
    echo "Создан объект {$this->name} . <br>";
  }

  public function __destruct()
  {
    echo "Уничтожен объект {$this->name}. <br>";
  }
}

function outer()
{
  $obj = new Orator(__METHOD__);
  inner();
}
function inner()
{
  $obj = new Orator(__METHOD__);
  echo "Внимание, вбрасывание";
  throw new Exception("Hello");
}
// основная программа
echo "Начало программы";
try {
  echo "Начало try блока<br>";
  outer();
  echo "Конец try-блока";
} catch (Exception $e) {
  echo "Исключение {$e->getMessage()}<br>";
}
echo "Конец программы<br>";