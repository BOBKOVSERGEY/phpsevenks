<?php
// Задаем адрес удаленного сервера

$curl = curl_init("http://uprav.ru");

// Устанавливаем параметры соединения
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

//  получаем содержимое страницы
$content = curl_exec($curl);

// Закрываес CURL соединение
curl_close($curl);

// Выводим содержимое страницы
echo $content;