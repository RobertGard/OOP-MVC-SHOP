<?php

/*
 * Модель работы с таблицей `products`
 */

/**
 * Description of ProductModel
 *
 * @author wakka
 */
class ProductModel {
    const QUANTITY_DEFAULT = 10;


    //Получение продуктов категорий
    public static function getProductByCat($idCat){
        //Инициализация подключения
        $db = Db::connectDb();
        //sql запрос добавлен в переменую
        $sql = 'SELECT * FROM `products` WHERE `category_id` = "'.$idCat.'"';
        //выполняется запрос к БД
        $query = $db->query($sql);
        //метод cycleData прокручивает ответ бд и возвращает
        return MainLibrary::cycleData($query);
    }
    
    //Получение последних товаров n-ое колличество
    public static function getLastProducts($cnt = self::QUANTITY_DEFAULT){
        //Инициализация подключения
        $db = Db::connectDb();
        //sql запрос добавлен в переменую
        $sql = 'SELECT * FROM `products` ORDER BY `id` DESC LIMIT '.$cnt.'';
        //выполняется запрос к БД
        $query = $db->query($sql);
        //метод cycleData прокручивает ответ бд и возвращает
        return MainLibrary::cycleData($query);
    }
    
    //Получение подробной информации о товаре по его id
    public static function getInfoProductById($id){
        //Инициализация подключения
        $db = Db::connectDb();
        //sql запрос добавлен в переменую
        $sql = 'SELECT * FROM `products` WHERE `id` = "'.$id.'"';
        //выполняется запрос к БД
        $query = $db->query($sql);
        //метод cycleData прокручивает ответ бд и возвращает
        return MainLibrary::cycleData($query);
    }
}
