<?php
// подключаем сериализацию класса
require_once __DIR__ . '/User.php';

// создаем объект

$obj = new User('nick', 'password');

echo '<pre>';
print_r($obj);
echo '</pre>';

// сериализуем объект
$object = serialize($obj);

echo $object;