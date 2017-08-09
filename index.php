<?php

/* 
 * Подключение библиотек и настроек
 */

define('PathPrefix', dirname(__FILE__));
require_once 'library/mainLibrary.php';
require_once 'components/Router.php';

$routerObject = new Router();
$routerObject->run();