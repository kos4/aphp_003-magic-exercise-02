<?php
require_once (__DIR__ . DIRECTORY_SEPARATOR . 'autoloader.php');

$authentication = new Netology\Authentication();
echo $authentication->login('123', '123') . PHP_EOL;
echo $authentication->login('mobileLogin', 'mobilePassword') . PHP_EOL;
echo $authentication->login('appLogin', 'appPassword') . PHP_EOL;
