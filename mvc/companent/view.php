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
<!-- Блок ввода нового сообщения. -->
<?php require_once __DIR__ . "/componentGbookAdd.php" ?>
<h1>Добавьте свое сообщение:</h1>
<form  action="<?php echo $_SERVER['SCRIPT_NAME']?>" method="post">
  Ваше имя: <input type="text" name="new[name]"><br>
  Комментарий:<br />
  <textarea name="new[text]" cols="60" rows="5"></textarea><br>
  <input type="submit" name="doAdd" value="Добавить!">
</form>

<!-- Блок сообщений гостевой книги. -->
<?php require_once __DIR__ . "/componentGbookShow.php" ?>
<h1>Сообщения гостевой книги:</h1>
<?php foreach ($data as $id => $e) { ?>
  Имя человека: <?= $e['name'] ?><br />
  Его комментарий:<br /> <?= $e['text'] ?><hr />
<?php } ?>

<!-- Блок новостей. -->
<h2>Последние новости:</h2>
<?php require_once __DIR__ . "/componentNewsShow.php" ?>
<ul>
  <?php foreach ($data as $i => $n) { ?>
    <li><?= $i + 1 ?>-я новость: <?= $n ?></li>
  <?php } ?>
</ul>
</body>
</html>