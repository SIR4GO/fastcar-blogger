<?php



define( 'APP_PATH' ,realpath(dirname(__FILE__)));
//var_dump(APP_PATH);// we do confige.php  to get app path to use in require files from  app  directory
define( 'VIEW_PATH' , APP_PATH . DS  . 'views' );

define( 'TEMPLATE_PATH' , APP_PATH . DS  . 'template' );

define('DATA_PATH' ,  $_SERVER['DOCUMENT_ROOT'] . "/". "files" . "/". "data.txt" );