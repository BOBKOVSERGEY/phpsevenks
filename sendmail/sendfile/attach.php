<?php
if (!empty($_POST)) {
  // обработчик формы
  include __DIR__ . "/handler.php";
}
?>
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
<form action="" enctype="multipart/form-data" method="post">
  <div><input type="text" name="mail_to" placeholder="Кому"></div>
  <div><input type="text" name="mail_subject" placeholder="Тема"></div>
  <div><textarea name="mail_msg" placeholder="Сообщение" cols="30" rows="10"></textarea></div>
  <div><input type="file" name="mail_file"></div>
  <div><input type="submit" value="Отправить"></div>
</form>
</body>
</html>
