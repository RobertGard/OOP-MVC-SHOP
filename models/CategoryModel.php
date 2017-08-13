<?php

/*
 * Модель работы с таблицей `category`
 */

/**
 * Description of CategoryModel
 *
 * @author wakka
 */
class CategoryModel {
    
    public static function getChildrenCat($parentId){
        //Инициализация подключения
        $db = Db::connectDb();
        //sql запрос добавлен в переменую
        $sql = 'SELECT * FROM `categories` WHERE `parent_id` = "'.$parentId.'"';
        //выполняется запрос к БД
        $query = $db->query($sql);
        
        return MainLibrary::cycleData($query);
    }
    /**
     * Получение всех категопий с привязкой к дочерним
     */
    public static function getAllCategories(){
        //Инициализация подключения
        $db = Db::connectDb();
        //sql запрос добавлен в переменую
        $sql = 'SELECT * FROM `categories` WHERE `parent_id` = 0 ORDER BY `sort_order` DESC';
        //выполняется запрос к БД
        $query = $db->query($sql);
        
        $arrayData = array();
        //Прокручивается ответ бд и записывается в массив $arrayData
        while($row = $query->fetch()){ 
            
            $rsChildren = self::getChildrenCat($row['id']);
            
            if($rsChildren){
                $row['children'] = $rsChildren;
            } else {
                $row['children'] = NULL;
            }
           
            $arrayData[] = $row; 
        }
        
        return $arrayData;
    }
}
