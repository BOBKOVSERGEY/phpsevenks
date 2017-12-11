<?php #Счетчик посещения страниц одни пользователем
$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
$counter++;
setcookie("counter", $counter, 0x7FFFFFFF);

echo "Вы запустили этот сценарий $counter раз(a)";