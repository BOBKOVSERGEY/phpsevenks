<?php
require_once __DIR__ . '/pdo/connectDb.php';

try {
  $query = "SELECT * FROM catalogs";

  $cat = $pdo->query($query);
  $catalogs = $cat->fetchAll();
  echo "<pre>";
  print_r($catalogs);
  echo "</pre>";


  foreach ($catalogs as $catalog) {
    echo $catalog['name'] . '<br>';
  }
} catch (PDOException $e) {
  echo "Ошибка выполнения запроса: " . $e->getMessage();
}
