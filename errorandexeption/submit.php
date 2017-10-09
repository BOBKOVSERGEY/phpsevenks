<?php
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
if (@$_REQUEST['submit']) echo 'Кнопка нажата';
?>

<form action="<?=$_SERVER['SCRIPT_NAME']?>">
  <input type="submit" name="submit" value="Go">
</form>
