<?php

/* 
 * Подключение библиотек и настроек
 */

//Константы
define('PathPrefix', dirname(__FILE__));
define('PathTemplate', "../../template/default/");

//Подключение файлов
require_once 'config/Db.php';
require_once 'library/MainLibrary.php';
require_once 'components/Router.php';

$routerObject = new Router();
$routerObject->run();