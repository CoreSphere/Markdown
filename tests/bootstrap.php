<?php

function autoloader($classname) {
    if(strpos($classname, 'Test') > -1) {
        require __DIR__ . '/../tests/' . str_replace('\\', DIRECTORY_SEPARATOR, $classname) . '.php';
    } else {
        require __DIR__ . '/../src/' . str_replace('\\', DIRECTORY_SEPARATOR, $classname) . '.php';
    }
}

spl_autoload_register('autoloader');