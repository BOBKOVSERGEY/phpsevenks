<?php

namespace PHP7;

use PHP7\Seo as Seo;
use PHP7\Tag as Tag;

// класс страницы
class Page {

  use Seo, Tag;
  // заголовок
  protected $title;

  // содержимое
  protected $content;

  // конструктор класса
  public function __construct($title = '', $content = '')
  {
    echo $this->title = $title;
    echo "<br>";
    echo $this->content = $content;
    echo "<br>";
  }
}