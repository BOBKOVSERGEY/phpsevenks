<?php
require_once __DIR__ . '/Cached.php';
class StaticPage extends Cached
{
  // конструктор класса
  public function __construct($id)
  {
    // проверяем, нет ли такой страницы в кеше
    if ($this->isCached($this->id($id))) {
      // есть, инициализируем объект содержимым кеша
      parent::__construct($this->title(), $this->content());
    } else {
      // данные пока не кэшированы извлекаем
      // содержимое из базы данных
      //$query = "SELECT * FROM news WHERE id = :id LIMIT 1";
      //$sth = $dbh->prepare($query);
      //$sth = $dbh->execute($query, [$id]);
      //$page = $sth->fetch(PDO::FETCH_ASSOC);
      //parent::__construct($page['title'], $page['content']);
      parent::__construct("Новости", "Содержимое страницы новости");
    }
  }
  // Уникальный ключ для кеша
  public function id($name)
  {
    return "news_{$name}";
  }
}