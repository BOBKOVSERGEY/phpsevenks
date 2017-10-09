<?php ## Перехват ошибок и предупреждений

// определяем новую функцию обработчик

function myErrorHandler($errno, $msg, $file, $line)
{
  echo '<div>';
  echo "Произошла ошибка с кодом <strong>$errno</strong><br>";
  echo "Файл: <strong>$file</strong>, строка $line.<br>";
  echo "Текст ошибки: <strong>$msg</strong>";
  echo '</div>';
}

// Регистрируем ее для всех типов ошибок
set_error_handler("myErrorHandler", E_ALL);

// Вызываем функцию для несуществующего файла

filemtime("spoon");