<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Плохая реализация</title>
</head>
<body>
<?php
$fname = "book.txt";
if (@$_REQUEST['doAdd']) {
  $f = fopen($fname, "a");
  if ($_REQUEST['text']) fputs($f, $_REQUEST['text'] . "\n");
  fclose($f);
}
$gb = @file($fname);
if (!$gb) $gb = [];
?>
<form action="<?php echo $_SERVER['SCRIPT_NAME']?>" method="post">
  текст:<br>
  <textarea name="text" cols="30" rows="10"></textarea><br>
  <input type="submit" name="doAdd" value="Добавить">
</form>
<?php foreach ($gb as $text) {?>
  <?php echo $text; ?><br><hr>
<?php }?>
</body>
</html>
