<?php
require_once __DIR__ . '/pdo/connectDb.php';
// Формируем и вполняем sql запрос
$query = "CREATE TABLE catalogs (
             id_catalog INT(11) NOT NULL AUTO_INCREMENT,
             name TINYTEXT NOT NULL,
             PRIMARY KEY (id_catalog))";

$count = $pdo->exec($query);

if ($count !== false)
  echo "Таблица созданза успешно";
else {
  echo "Не удалось создать таблицу";
  echo "<pre>";
  print_r($pdo->errorInfo());
  echo "</pre>";
}