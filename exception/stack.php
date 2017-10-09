<?php # Инструкция try dj вложенных функциях
echo "Начало программы<br>";
try {
  echo "Начало try-блока<br>";
  outer();
  echo "Конец try-блока";
} catch(Exception $e) {
  echo "Исключение: {$e->getMessage()}<br>";
}
echo "Конец программы";

function outer(){
  echo "Вошли в функцию " . __METHOD__. '<br>';
  inner();
  echo "Вышли из функцию " . __METHOD__. '<br>';
}

function inner() {
  echo "Вошли в функцию " . __METHOD__. '<br>';
  throw new Exception("Hello!");
  echo "Вышли из функцию " . __METHOD__. '<br>';
}