<?php
class Hooker
{
  public $opened = 'opened';

  public function method()
  {
    echo 'Whoa, deja vu<br>';
  }

  private $vars = [];

  public function __get($name)
  {
    echo "Перехват: получаем значение $name. <br>";

    return isset($this->vars[$name]) ? $this->vars[$name] : null;
  }

  public function __set($name, $value) {
    echo "Перехват: устанавливем значение $name равныи '$value' .<br>";
    return $this->vars[$name] = trim($value);
  }

  public function __call($name, $args)
  {
    echo "Перехват: вызываем $name с аргументами: ";
    var_dump($args);
    return $args[0];
  }
}

$obj = new Hooker();
echo "<strong>Получаем значение обычного свойства</strong><br>";
echo "Значение: {$obj->opened}<br>";
echo "<strong>Вызываем обычный метод</strong><br>";
$obj->method();
echo "<strong>Присваивание несуществующему свойству</strong><br>";
$obj->nonExistent = 101;
echo "<strong>Получаем значение несуществующего свойства</strong><br>";
echo "Значение: {$obj->nonExistent} <br>";
echo "<strong>Обращаемся к несуществующему методу</strong><br>";
$obj->nonExistent(6);

