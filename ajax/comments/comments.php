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
<div id="info">
    <?php
      require_once __DIR__ . '/addcom.php';
    ?>
</div>
<div id="form">
  <p>
    <span class="ttl">Автор:</span>
    <span class="fld">
      <input type="text" id="nickname" name="nickname">
    </span>
  </p>
  <p>
    <span class="ttl">Сообщение:</span>
    <span class="fld">
      <textarea name="content" id="content" cols="30" rows="10"></textarea>
    </span>
  </p>
  <p>
    <span class="ttl">&nbsp;</span>
    <span class="fld">
      <input type="submit" id="submit-id" value="Отправить">
    </span>
  </p>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="main.js"></script>
</body>
</html>