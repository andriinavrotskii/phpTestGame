<?php

function autoloader($class)
{
    $prefix = 'PhpTestGame\\';
    $base_dir = __DIR__ . DIRECTORY_SEPARATOR;

    $len = strlen($prefix);
    
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);

    require $base_dir . str_replace('\\', DIRECTORY_SEPARATOR, $relative_class) . '.php';
}

spl_autoload_register('autoloader');