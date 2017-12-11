<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=bdtestpdo', 'root', '');
} catch(PDOException $e) {
  echo "Невозможно установить соединение с БД";
}