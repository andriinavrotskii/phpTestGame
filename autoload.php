<?php

function autoloader($class)
{
    require __DIR__  . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
}

spl_autoload_register('autoloader');