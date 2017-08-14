<?php ## Класс user

class User {
  // конструктор
  public function __construct($name, $password)
  {
    $this->name = $name;
    $this->password = $password;
    $this->referrer = $_SERVER['PHP_SELF'];
    $this->time = time();
  }

  public function __sleep()
  {
    return ['name', 'referrer', 'time'];
  }
  public function __wakeup()
  {
    $this->time = time();
  }

  // name
  public $name;
  //пароль
  public $password;
  //последня посещенная страница
  public $referrer;
  //время авторизации
  public $time;
}
