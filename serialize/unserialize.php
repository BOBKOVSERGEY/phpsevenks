<?php ## Восстанавливаем объект из строки
// Подключаем определение cls
require_once __DIR__ . '/cls.php';

$fd = fopen("text.obj", 'r');
if(!fd) exit("Невозможно открыть файл");
$text = fread($fd, filesize("text.obj"));
fclose($fd);

// восстанавливаем объект

$obj = unserialize($text);

echo "<pre>";
print_r($obj);
echo "</pre>";
