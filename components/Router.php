<?php

/*
 * Получение адреса из url и подключение нужных файлов
 */

/**
 * Description of Router
 *
 * @author wakka
 */
class Router {
    public $routes;
    
    public function __construct() {
        $this->routes = include (PathPrefix.'/config/routes.php');
        
    }
    
    //Получение данных из URI 
    private function getFromUri() {
        if(!empty($_SERVER['QUERY_STRING'])){
            $uri = trim($_SERVER['QUERY_STRING'],'/');
        }
        return $uri;
    }

    public function run() {
        $uri = $this->getFromUri();
        //Прокручивание массива путей
        foreach ($this->routes as $itemKey => $itemValue){
            //Проверка на совпадение ключей из массива с URI данными
            if(preg_match("~$itemKey~", $uri)){
                //Разбиваем путь-строку и закидываем в массив
                $segments = explode("/",$itemValue);
                
                //Получение названия сонтроллера
                $controllerName = ucfirst(array_shift($segments)."Controller");
                //Получение названия Action 
                $actionName = array_shift($segments)."Action";
                
                //Подключение файла-контроллера
                $controllerFile = PathPrefix."/Controllers/".$controllerName.".php";
                
                if(file_exists($controllerFile)){
                    include_once $controllerFile;
                }
                
                //Создаём объект класса контроллера и вызываем нужный метод-action
                $controllerObject = new $controllerName();
                $key = $controllerObject->$actionName();
                
                //При удачном нахождении выбросит из прокрутки массива путей 
                if($key !== FALSE){
                    break;
                }
                
            }
        }
    }
}
