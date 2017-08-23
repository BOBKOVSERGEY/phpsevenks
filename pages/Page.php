<?php
class Page
{
  // любая страница имеет заголовок
  protected $title;
  // и содержимое
  protected $content;
  // конструктор класса
  public function __construct($title = '', $content = '')
  {
    $this->title = $title;
    $this->content = $content;
  }
  // получение заголовка страницы
  public function title()
  {
    return $this->title;
  }
  // получение содержимого страницы
  public function content()
  {
    return $this->content;
  }
  // формирование html представления страницы
  public function render()
  {
    echo "<h1>" . htmlspecialchars($this->title()) . "</h1>";
    echo "<p>" . nl2br(htmlspecialchars($this->content())) . "</p>";
  }
}