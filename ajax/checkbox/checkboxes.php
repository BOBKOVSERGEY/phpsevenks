<?php
  // инициализируем сессию
  session_start();

  function checkbox($key)
  {
    if(empty($_SESSION[$key])) return '';
    else return "checked ";
  }
?>
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
<div>
  <input id="id1" type="checkbox" <?php echo checkbox("id1"); ?> >
  <label for="id1">Присылать уведомление об ответе</label>
</div>
<div>
  <input id="id2" type="checkbox" <?php echo checkbox("id2"); ?> >
  <label for="id2">Информационные панели свернуты</label>
</div>
<div>
  <input id="id3" type="checkbox" <?php echo checkbox("id3"); ?> >
  <label for="id3">Выделять новые сообщения</label>
</div>
<div>
  <input id="id4" type="checkbox" <?php echo checkbox("id4"); ?> >
  <label for="id4">Автоматически запускать видеоролики</label>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="main.js"></script>
</body>
</html>