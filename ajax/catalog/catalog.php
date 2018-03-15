<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php
  // устанавливаем соединение с БД
  require_once __DIR__ . '/connect.php';

  // формируем выпадающий список корневых разделов
  $query = "SELECT * FROM catalogs
            WHERE parent_id = 0 AND is_active = 1
            ORDER BY pos";

  echo "<select id='fst'>";
  echo "<option value='0'>Выберите раздел</option>";

  $com = $pdo->query($query);

  while($catalog = $com->fetch()) {
    echo "<option value='{$catalog['id']}'>{$catalog['name']}</option>";
  }

  echo '</select>';
?>
<select id="snd" disabled>
  <option value="0">Выберите подраздел</option>
</select>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="main.js"></script>
</body>
</html>