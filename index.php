<?php


define ('DS', DIRECTORY_SEPARATOR);
define ('HOME', dirname(__FILE__));


ini_set ('display_errors', 1);


require_once HOME . DS . 'config' . DS . 'config.php';
require_once HOME . DS . 'application' . DS . 'libs' . DS . 'bootstrap.php';
 
function __autoload($class)
{
    if (file_exists(HOME . DS . 'application' . DS . 'libs' . DS . strtolower($class) . '.php'))
    {
        require_once HOME . DS . 'application' . DS . 'libs' . DS . strtolower($class) . '.php';
    }
    else if (file_exists(HOME . DS . 'application' . DS . 'models' . DS . strtolower($class) . '.php'))
    {
        require_once HOME . DS . 'application' . DS . 'models' . DS . strtolower($class) . '.php';
    }
    else if (file_exists(HOME . DS . 'application' . DS . 'controllers' . DS . strtolower($class) . '.php'))
    {
        require_once HOME . DS . 'application' . DS . 'controllers'  . DS . strtolower($class) . '.php';
    }
}