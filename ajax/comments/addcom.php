<?php
//
require_once __DIR__ . '/connect.php';

try {
  if (!empty($_POST)) {
    $error = [];

    if (empty($_POST['nickname'])) {
      $error[] = 'Отсутствует автор';
    }
    if (empty($_POST['content'])) {
      $error[] = 'Отсутствует сообщение';
    }

    // если нет ошибок помещаем в БД
    if (empty($error)) {
      $query = "INSERT INTO comments VALUES (
                                              NULL,
                                              :nickname,
                                              :content,
                                              NOW(),
                                              1)";
      $usr = $pdo->prepare($query);
      $usr->execute([
        'nickname' => $_POST['nickname'],
        'content' => $_POST['content'],
      ]);
    }
  }

  // выводим сообщения в порядке убывания даты
  $query = "SELECT * FROM comments WHERE is_visible = 1 ORDER BY created_at DESC";
  $com = $pdo->query($query);
  while ($comments = $com->fetch()) {
    // обрабатываем сообщения перед выводом, что бы исключить вставку javascript
    $comments['nickname'] = htmlspecialchars($comments['nickname']);
    $comments['content'] = nl2br(htmlspecialchars($comments['content']));

    // выводим сообщение
    echo "<div>".
      "<div class='author'>{$comments['nickname']}</div>".
      "<div class='date'>{$comments['created_at']}</div>".
      "<div class='content'>{$comments['content']}</div>".
      "</div>";
  }
} catch (PDOException $e) {
  echo "Ошибка выполнения запроса " . $e->getMessage();
}