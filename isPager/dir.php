<?php
spl_autoload_register(function($class) {
  require_once __DIR__ . "/pager/src/{$class}.php";
});

$obj = new \ISPager\DirPager(
  new \ISPager\PagesList(),
  'photos',
  5,
  2);

echo "<pre>";
print_r($obj);
echo "</pre>";
// содержимое текущей страницы
foreach ($obj->getItems() as $img) {
  echo "<img src='$img'>";
}
echo "<p>$obj</p>";

