<?php
require_once __DIR__ . '/pdo/connectDb.php';

$query = "SELECT * FROM catalogs";

$cat = $pdo->query($query);
$catalog = $cat->fetchAll(PDO::FETCH_CLASS);
echo "<pre>";
print_r($catalog);
echo "</pre>";


try {
  while ($catalog = $cat->fetch()) {
    echo $catalog['name'] . '<br>';
  }
} catch (PDOException $e) {
  echo "Ошибка выполнения запроса" . $e->getMessage();
}