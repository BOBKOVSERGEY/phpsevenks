<?php
header("Status: 200 OK");

// получаем каталог текушего скрипта
$dir = dirname($_SERVER['SERVER_NAME']);

if ($dir = '\\') $dir = '';

// осуществляем переадресацию по абсолютному uri
header("Location: $dir/result.php");
exit();