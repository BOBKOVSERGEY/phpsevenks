<?php // простейший фотоальбом с возможностью закачки
$imgDir = "img"; // каталог для хранения изображений
@mkdir($imgDir, 0777); // создаем если его еще нет

// проверяем, нажата ли кнопка добавления фотографии
if (@$_REQUEST['doUpload']) {
  $data = $_FILES['file'];
  $tmp = $data['tmp_name'];

  // проверяем, принят ли файл
  if (is_uploaded_file($tmp)) {
    $info = @getimagesize($tmp);
    // проверяем, является ли файл изображением
    if (preg_match('{image/(.*)}is', $info['mime'], $p)) {
      $name = "$imgDir/" . time() . "." . $p[1];

      // добавляем файл в каталог с фотографиями
      move_uploaded_file($tmp, $name);
    } else {
      echo "<h2>Попытка добавить файл несуществующего формата</h2>";
    }
  } else {
    echo "Ошибка закачки #{$data['error']}!";
  }
}

// теперь считываем в массив наш фотоальбом
$photos = [];
foreach (glob("$imgDir/*") as $path) {
  $sz = getimagesize($path); // размер
  $tm = filemtime($path); // время добавления

  // вставляем изображение в массив
  $photos[$tm] = [
    'time' => $tm,
    'name' => basename($path),
    'url' => $path,
    'w' => $sz[0],
    'h' => $sz[1],
    'wh' => $sz[3],
  ];
}
krsort($photos);
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
<form action="<?php echo $_SERVER['SCRIPT_NAME']?>" method="post" enctype="multipart/form-data">
  <div>
    <input type="file" name="file">
  </div>
  <div>
    <input type="submit" name="doUpload" value="Закачать новую фотографию">
  </div>
</form>

<?php foreach ($photos as $n=>$img) {?>
  <p><img src="<?php echo $img['url']?>" <?php echo $img['wh']?> alt="<?php echo date("d.m.Y H:i:s", $img['time']); ?>"></p>
<?php } ?>
</body>
</html>
