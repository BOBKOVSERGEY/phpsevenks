<?php
setcookie("cookie", 'какойто текст');

// эти куки уничтожаются браузером через час
setcookie("outher", 'Еще текст', time() + 3600);

print_r($_COOKIE);
