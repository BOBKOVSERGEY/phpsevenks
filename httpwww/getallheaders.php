<?php # получение заголловков запроса
$headers = getallheaders();
Header("Content-type: text/plain");
print_r($headers);

print_r($_SERVER);