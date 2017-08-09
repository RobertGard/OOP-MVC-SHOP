<?php

/* 
 * Библиотека функций
 */

//Функция отображения значений
function d($value,$key = 0) {
    if($key){
        print_r($value);
    } else {
        print_r($value);
        exit();
    }
}
