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
<h1>Добавьте свое сообщение</h1>
<form action="controller.php" method="post">
  Ваше имя: <input type="text" name="new[name]"><br>
  Комментарий: <br>
  <textarea name="new[text]" id="" cols="30" rows="10"></textarea><br>
  <input type="submit" name="doAdd" value="Добавить">
</form>
<h2>Гостевая книга:</h2>
<?php foreach ($book as $id => $e) {?>
  Имя человека: <?php echo $e['name']; ?><br>
  Его комментарий:<br> <?php echo nl2br($e['text']); ?>
<?php } ?>
</body>
</html>