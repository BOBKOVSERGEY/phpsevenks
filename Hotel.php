<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php

class Hotel
{
  private $exit;

  public function escape()
  {
    $this->findWayOut();
    echo "Let's go through the {$this->exit}!";
  }

  private function findWayOut()
  {
    $this->exit = 'main wet well';
  }
}

$theLafayette = new Hotel();
$theLafayette->escape();

?>
</body>
</html>

