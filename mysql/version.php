<?php
require_once __DIR__ . '/pdo/connectDb.php';

// выполняем запрос
$query = "SELECT VERSION() AS version";
$ver = $pdo->query($query);

// извлекаем результат
$version = $ver->fetch();

echo '<pre>';
print_r($version);
echo '</pre>';
echo $version['version'];