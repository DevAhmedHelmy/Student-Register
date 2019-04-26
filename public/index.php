<?php 
namespace App;
use App\Lib\Template;
use App\Lib\FrontController;
if(!defined('DS'))
{
    define('DS', DIRECTORY_SEPARATOR);
}
require_once '..' . DS . 'app' . DS  .'config' . DS. 'config.php';
require_once APP_PATH . DS . 'Lib' . DS . 'autoload.php';

$template_parts =  require_once '..' . DS . 'app' . DS  .'config' . DS. 'templateconfig.php';
$template = new Template($template_parts);

$frontController = new FrontController($template);
$frontController->dispatch();

