<?php

function loadBook($fname)
{
  if (!file_exists($fname)) return [];
  $book = unserialize(file_get_contents($fname));
  return $book;
}

// сохраняем соде
function saveBook($fname, $book)
{
  file_put_contents($fname, serialize($book));
}