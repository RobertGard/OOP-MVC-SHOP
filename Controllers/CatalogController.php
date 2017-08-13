<?php

/*
 * Конторллер главной страницы 
 */

//Подключение моделей
require_once(PathPrefix.'/models/NewsModel.php');
require_once(PathPrefix.'/models/CategoryModel.php');
require_once(PathPrefix.'/models/ProductModel.php');

/**
 * Description of IndexController
 *
 * @author wakka
 */
class CatalogController {
    
    public function indexAction(){
        //Получение всех категорий с привязкой к дочерним 
        $allCategories = CategoryModel::getAllCategories();

        $rsProduct = ProductModel::getLastProducts(6);
        include_once PathPrefix.'/views/default/index.php';
        
        return TRUE;
    }
    
    public function categoryAction($idCat){
        //Получение всех категорий с привязкой к дочерним 
        $allCategories = CategoryModel::getAllCategories();
        
        //Получение товаров привязанных к id категории
        $rsProduct = ProductModel::getProductByCat($idCat[0]);
        
        include_once PathPrefix.'/views/default/index.php';
        return TRUE;
    }
}
