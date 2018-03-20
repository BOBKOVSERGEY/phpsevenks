<?php
// инициализируем сессию
session_start();
// изменяем состояние
if ($_POST['status'] == 'true') {
  $_SESSION[$_POST['id']] = 1;
} else {
  $_SESSION[$_POST['id']] = 0;
}