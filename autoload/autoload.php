<?php ## Использование функции autoload()
// Функция автозагрузки класов
spl_autoload_register();
/*function __autoload($classname)
{
  require_once __DIR__ . "/$classname.php";
}*/

// использование классов
$page = new PHP7\Page('О нас', 'Содержимое страницы');
$page->tags();