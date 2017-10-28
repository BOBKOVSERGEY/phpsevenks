<?php #Использование метода rewind
// открываем текущий каталог
$dirName = "./";
$cat = dir($dirName);

// устанавливаем счетчики файлов и подкаталогов в нулевое значение
$fileCount = 0;
$dirCount = 0;

// подсчитываем кол-во файлов и подкаталогов
while(($file = $cat->read()) !== false) {
  if (is_file($dirName . $file)) $fileCount++;
  else $dirCount++;
}

// не уучитываем служебные подкаталоги
$dirCount = $dirCount - 2;
// выводим кол-во файлов и подкаталогов
echo "Каталог $dirName содержит $fileCount файлов и $dirCount подкаталогов ";

// устанавливаем указатель каталога вначало
$cat->rewind();

// Читаем содержимое каталога
while(($file = $cat->read()) !==  false) {
  if ($file != "." && $file != "..") {
    echo $file . "<br>";
  }
}

// Закрываем каталог
$cat->close();

