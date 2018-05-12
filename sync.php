<?php

file_put_contents("blog/tests/HomeTest.php", file_get_contents("tests/HomeTest.php"));

file_put_contents("blog/app/Http/Controllers/HomeController.php", file_get_contents("app/Http/Controllers/HomeController.php"));

is_dir("blog/contract") || mkdir("blog/contract");
is_dir("blog/contract/schemas") || mkdir("blog/contract/schemas");

file_put_contents("blog/contract/contract.php", file_get_contents("contract/contract.php"));

file_put_contents("blog/contract/schemas/HomeAbout.php", file_get_contents("contract/schemas/HomeAbout.php"));

$appPhp = file_get_contents("blog/bootstrap/app.php");

$appPhp = str_replace("Laravel\\Lumen\\Application", "SavLumenApp\\LumenApp", $appPhp);

file_put_contents("blog/bootstrap/app.php", $appPhp);
