<?php #использование класса DateTimeZone

$date = new DateTime("2016-01-01 00:00:00", new DateTimeZone("Europe/Moscow"));
echo $date->format("d-m-Y H:i:s");
