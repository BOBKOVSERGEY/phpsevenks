<?php
mail(
  "example@example.com", #To
  "Mail robot",         #Subject
  "Hello\nThis лалалалалала",
  join("r\n", array(
    "From: webmaster@$SERVER_NAME",
    "Reply-To: webmaster@$SERVER_NAME",
    "X-Mailer: PHP/" . phpversion()
  ))
);