<?php # простой пример использования исключений

echo 'Start program'. '<br>';

try {
  // код в котором перехватываются исключения
  echo "Все что имеет начало...<br>";

  // генерируем "выбрасываем" исключение
  throw new Exception('Hello!');
  echo '....имеет и конец<br>';
} catch (Exception $e) {
  // код обработчика
  echo " Исключение: {$e->getMessage()} <br>";
}

echo "End program<br>";
