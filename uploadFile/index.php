<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php
if ($_REQUEST['doUpload'])
  echo '<pre>Содержимое $_FILES: ' . print_r($_FILES, true) . '</pre><hr>';
// копируем полученный файл на новое место
if ($_FILES['file']['error'] === 0)
  copy($_FILES['file']['tmp_name'], $_FILES['file']['name']);
?>
<p>Выберите какой нибудь файл</p>
<form action="<?php $_SERVER['SCRIPT_NAME']?>" method="post" enctype="multipart/form-data">
  <div>
    <input type="file" name="file">
  </div>
  <div>
    <input type="submit" name="doUpload" value="Закачать">
  </div>
</form>
</body>
</html>