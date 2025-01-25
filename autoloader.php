<?php
function autoloader($class)
{
  $path = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

  if (is_file($path)) {
    require_once $path;
  }
}

spl_autoload_register('autoloader');
