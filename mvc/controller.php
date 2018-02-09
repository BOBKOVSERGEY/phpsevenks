<?php
define("GBook", "gbook.dat"); // имя файла с данными гостевой книги
require_once __DIR__ . '/model.php';

// загрузка гостевой книги
$book = loadBook(GBook);

// обработка формы
// если сценарий запушен после нажатия кнопки Добавить
if (!empty($_REQUEST['doAdd'])) {
  $book = [time() => $_REQUEST['new']] + $book;

  // запись книги на диск
  saveBook(GBook, $book);
  header("Location: http://{$_SERVER['SERVER_NAME']}{$_SERVER['SCRIPT_NAME']}");
  exit();
}
include __DIR__ . '/view.php';