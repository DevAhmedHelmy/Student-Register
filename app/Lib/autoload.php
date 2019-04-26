<?php
namespace App\Lib;
class Autoload
{
    public  static function autoload($className)
    {

//        remove main namespace
        $className = str_replace('App', '', $className);
        $className = str_replace('\\', '/', $className);
        $className = $className . '.php';

        if (file_exists(APP_PATH .DS. $className))
        {
            require_once APP_PATH . $className;
        }
    }
}
spl_autoload_register(__NAMESPACE__ . '\Autoload::autoload');


