<?php ## Использование пространства имен
namespace PHP7;

require_once __DIR__ . "/namespace.php";

$page = new Page('Контакты', 'Содержимое страницы');

debug($page);

