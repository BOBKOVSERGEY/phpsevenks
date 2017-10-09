<?php
function printAge($age)
{
  $age = intval($age);

  if ($age < 0) {
    trigger_error("Возраст не может быть отрицательным", E_USER_ERROR);
  }

  echo "Возраст: $age";
}

printAge(-10);