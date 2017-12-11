<?php #использование метода diff()

$date = new DateTime("2017-12-31 23:59:59");
$nowdate = new DateTime();
$interval = $nowdate->diff($date);

// выводим результаты
echo $date->format('d-m-Y H:i:s') . '<br>';
echo $nowdate->format('d-m-Y H:i:s') . '<br>';

// выводим разницу
echo $interval->format("%Y-%m-%d %H:%S");

//выводим дамп интервала
echo '<pre>';
  print_r($interval);
echo '</pre>';

echo 'До нового года осталось ' . $interval->days . ' дня';