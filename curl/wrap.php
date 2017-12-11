<?php
echo "Первая страница Http:";
echo file_get_contents("http://universal-m.ru");
echo "Первая страница Ftp";
echo file_get_contents("ftp://ftp.aha.ru");