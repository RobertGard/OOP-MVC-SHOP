<?php

/*
 * Контроллер новостей
 */

require_once(PathPrefix.'/models/NewsModel.php');

/**
 * Description of NewsController
 *
 * @author wakka
 */
class NewsController {
    
    public function indexAction(){
        $newsList = array();
        $newsList = NewsModel::getAllNews();
        
        include_once PathPrefix.'/views/default/index.php';
        
        return TRUE;
    }
    
    public function viewAction($parameters){
        
        $detailsNews = NewsModel::getNewsById($parameters[0]);
        
        MainLibrary::d($detailsNews);
        
        return TRUE;
    }
}
