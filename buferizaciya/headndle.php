<?php
// устанавливаем перехват в буфер 1
ob_start();
// следующий текст попадает в буфер
  echo "1<br>";
  // откладываем на время 1 буфер и активируем второй
  ob_start();
    echo "2<br>";

    // получаем текст во втором буфере
    $second = ob_get_contents();

    // отключаем без вывода в браузер буфер 2 и активируем первый
    ob_end_clean();

    // попадает опять в буфер 1
    echo '3<br>';
    // получаем текст в первом буфере
    $first = ob_get_contents();

    // так как это последний буфер, буферезация отключается
    ob_end_clean();

    // обрабатываем буферы для более красивого вывода

    $first = preg_replace('/^/m', '&nbsp; &nbsp;', trim($first));
    $second = preg_replace('/^/m', '&nbsp; &nbsp;', trim($second));

    // распечатываем значения буферов, которые мы сохранили в массив
    echo "<i>Содержимое первого буфера: </i><br>$first";
    echo "<i>Содержимое второго буфера: </i><br>$second";