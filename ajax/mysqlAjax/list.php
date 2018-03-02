<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="list">
  <?php
  // устанавливаем соединение с БД
  require_once __DIR__ . '/connect.php';

  $query = "SELECT * FROM users ORDER BY name";
  $usr = $pdo->query($query);

  try {
    echo "<div class='jumbotron'>";
    while ($user = $usr->fetch()) {
      echo "<div><a class='list__item' href='#' data-id='" . $user['id'] . "'>" . htmlspecialchars($user['name']) . "</a></div>";
    }
    echo "</div>";
  } catch (PDOException $e) {
    echo 'Ошибка выполнения запроса: ' . $e->getMessage();
  }

  ?>
</div>
<div id="info" class="hidden">
  <h1>Список</h1>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="main.js"></script>
</body>
</html>