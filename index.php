<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case "agreement":
            $content = file_get_contents("elem/agreement.php");
            $title = "Соглашение";
            break;
        case "oferta":
            $content = file_get_contents("elem/oferta.php");
            $title = "ОФЕРТА";
            break;
        case "oferta" and "agreement":
            $content = file_get_contents("elem/404.php");
            $title = '404';
            break;


    }
}else{
            $content =  file_get_contents ("elem/conditions.php");
            $title = "Подключение к яндекс гетт ситимобил";
        }


//
//        if ($_GET['page']){
//
//            if($_GET['page'] = ['agreement'] ){
//
//            }
//            if($_GET['page'] = ['oferta'] ){
//
//
//        }

 include "elem/layout.php";




	 
	

 




 



 

