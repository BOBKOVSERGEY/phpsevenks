<?php
trait Seo
{
  private $keyword;
  private $description;
  private $ogs;
  public function keywords()
  {
    // $query = "SELECT keywords FROM seo WHERE id = :id LIMIT 1";
    echo "Seo::keywords<br>";
  }
  public function description()
  {
    // $query = "SELECT description FROM seo WHERE id = :id LIMIT 1";
    echo "Seo::description<br>";
  }
  public function ogs()
  {
    // $query = "SELECT ogs FROM seo WHERE id = :id LIMIT 1";
    echo "Seo::ogs<br>";
  }
}

trait Tag
{
  public function tags()
  {
    // $query = "SELECT ogs FROM seo WHERE id = :id LIMIT 1";
    echo "Tag::ogs<br>";
  }
}

class Page
{
  public function tags()
  {
    echo "Page::tags<br>";
  }
  public function authors()
  {
    echo "Page::authors<br>";
  }
}

trait Author
{
  public function tags()
  {
    echo "Author::tags<br>";
  }
  public function authors()
  {
    echo "Author::authors<br>";
  }
}

class News extends Page
{
   // Новости снабжаются списком информации и списком авторов
  use Author;
  public function authors()
  {
    echo "News::authors<br>";
  }
}

$news = new News();
$news->authors();
$news->tags();