<?php
require_once __DIR__ . '/cls.php';
// создаем объект
$obj = new cls(100);

// сериализуем объект
$text = serialize($obj);
$fd = fopen('text.obj', "w");

if(!$fd) exit("Невозможно открыть файл");
fwrite($fd, $text);
fclose($fd);

