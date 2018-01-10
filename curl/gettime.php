<?php ## Обращение к серверу точног времени
// Задаем адрес удаленного сервера

$curl = curl_init("http://www.nist.gov:13");


//  получаем содержимое страницы
$content = curl_exec($curl);
echo $content;
// Закрываес CURL соединение
curl_close($curl);

