<?php
require_once __DIR__ . '/pdo/connectDb.php';

try {
  $query = "SELECT * FROM catalogs
            WHERE id_catalog = :id_catalog";

  $cat = $pdo->prepare($query);
  $cat->execute(['id_catalog' => 1]);
  echo $cat->fetch()['name'];
} catch (PDOException $e) {
  echo "Ошибка выплнения запроса" . $e->getMessage();
}