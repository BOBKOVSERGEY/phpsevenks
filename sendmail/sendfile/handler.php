<?php #Обработчик html формы
if (empty($_POST['mail_to'])) exit("Введите адрес получателя");
// проверяем правильность заполнения
$pattern = "/^[0-9a-z_]+@[0-9a-z_^.]+.[a-z]{2,6}$/i";
if (!preg_match($pattern, $_POST['mail_to'])) {
  exit("Введите корректный электронный адрес");
}
$_POST['mail_to'] = htmlspecialchars(stripcslashes($_POST['mail_to']));
$_POST['mail_subject'] = htmlspecialchars(stripcslashes($_POST['mail_subject']));
$_POST['mail_msg'] = htmlspecialchars(stripcslashes($_POST['mail_msg']));

$picture = "";
// Если поле выбора вложения не пустое, закачиваем его на сервер
if (!empty($_FILES['mail_file']['tmp_name'])) {
  // Загружаем файл
  $path = $_FILES['mail_file']['name'];
  if (copy($_FILES['mail_file']['tmp_name'], $path)) $picture = $path;
}

$thm = $_POST['mail_subject'];
$msg = $_POST['mail_msg'];
$mail_to = $_POST['mail_to'];

// отправляем почтовое сообщение
if (empty($picture)) mail($mail_to, $thm, $msg);
else sendMail($mail_to, $thm, $msg, $picture);

// Вспомогательная функция для отправки потового сообщения
function sendMail($to, $thm, $html, $path)
{
  $fp = fopen($path, "r");
  if (!$fp) {
    print "Файл $path не может быть прочитан";
    exit();
  }
  $file = fread($fp, filesize($path));
  fclose($fp);

  $boundary = "--".md5(uniqid(time())); // генерируем разделитель
  $headers = "MIME-Version: 1.0\n";
  $headers .="Content-Type: multipart/mixed; boundary=\"$boundary\"\n";
  $multipart = "--$boundary\n";
  $kod = 'utf-8'; // или $kod = 'windows-1251';
  $multipart .= "Content-Type: text/html; charset=$kod\n";
  $multipart .= "Content-Transfer-Encoding: Quot-Printed\n\n";
  $multipart .= "$html\n\n";

  $message_part = "--$boundary\n";
  $message_part .= "Content-Type: application/octet-stream\n";
  $message_part .= "Content-Transfer-Encoding: base64\n";
  $message_part .= "Content-Disposition: attachment; filename = \"".$path."\"\n\n";
  $message_part .= chunk_split(base64_encode($file))."\n";
  $multipart .= $message_part."--$boundary--\n";

  if (!mail($to, $thm, $multipart, $headers)) {
    exit('К сожалению письмо не отправлено');
  }
  header("Location: " . $_SERVER['PHP_SELF']);
}