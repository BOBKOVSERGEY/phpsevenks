<?php ## Объявление пространства имен
namespace PHP7;
// отладочная функция
function debug($obj)
{
  echo '<pre>';
  var_dump($obj);
  echo '</pre>';
}

// класс страницы

class Page {
  // заголовок
  protected $title;

  // содержимое
  protected $content;

  // конструктор класса
  public function __construct($title = '', $content = '')
  {
    echo $this->title = $title;
    echo "<br>";
    echo $this->content = $content;
  }
}
