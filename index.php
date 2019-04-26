<?php
namespace PHPMVC ;
session_start();

use PHPMVC\controllers\Abstract_;
use PHPMVC\controllers\NotFound;
use PHPMVC\lib\Control_Url;



if(!defined('DS'))
{
    define('DS' ,DIRECTORY_SEPARATOR);
}
$str = str_replace(  "/public", "" , $_SERVER['DOCUMENT_ROOT']);
require_once $str .  DS .'app' . DS . 'paths.php';
//require_once '..' .  DS .'app' . DS . 'paths.php';
require_once APP_PATH . DS . 'lib' . DS . 'autoload.php';





(new Control_Url())->Send_URl_INFO_TO_Controller_Class();



//var_dump($_SERVER);
?>







































