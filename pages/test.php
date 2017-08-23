<?php
require_once __DIR__ . '/StaticPage.php';
// Создаем статическую страницу

$id = 3;
$page = new StaticPage($id);
$page->render();
echo $page->id($id);