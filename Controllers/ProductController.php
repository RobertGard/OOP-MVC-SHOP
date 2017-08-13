<?php

/*
 * Контроллер продуктов
 */

//Подключение моделей
require_once(PathPrefix.'/models/NewsModel.php');
require_once(PathPrefix.'/models/CategoryModel.php');
require_once(PathPrefix.'/models/ProductModel.php');

/**
 * Description of ProductController
 *
 * @author wakka
 */

class ProductController {
    public function viewAction($id){
        //Получение всех категорий с привязкой к дочерним 
        $allCategories = CategoryModel::getAllCategories();
        
        //Получение подробной информации о товаре по его id
        $infoProduct = ProductModel::getInfoProductById($id[0]);

        include_once PathPrefix.'/views/default/product_details.php';

        return TRUE;
    }
}
