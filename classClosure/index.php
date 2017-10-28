<?php
class View
{
  protected $pages = [];
  protected $title = 'Контакты';
  protected $body = 'Содержимое страницы контакты';

  public function addPage($page, $pageCallback)
  {
    $this->pages[$page] = $pageCallback->bindTo($this, __CLASS__);
  }

  public function render($page)
  {
    $this->pages[$page]();

    $content = <<<HTML
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                         <meta http-equiv="X-UA-Compatible" content="ie=edge">
             <title>{$this->title()}</title>
</head>
<body>
  <p>{$this->body()}</p>
</body>
</html>
HTML;
    echo $content;
  }

  public function title()
  {
    return htmlspecialchars($this->title);
  }

  public function body()
  {
    return nl2br(htmlspecialchars($this->title));
  }
}

$view = new View();
$view->addPage('about', function () {
  $this->title = 'О нас';
  $this->body = 'Содержимое страницы о нас';
});

$view->render('about');