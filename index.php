<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);




	 if(!$_GET){ 
	  $content =  file_get_contents ("elem/conditions.php");
	  $title = "Подключение к яндекс гетт ситимобил";
	  
		}
	 if(isset($_GET ['oferta'] )){
		 $content =	 file_get_contents ("elem/oferta.php");
		 $title = "ОФЕРТА";
		 
		 }
	 if(isset($_GET ['agreement']) ){
	 $content =  file_get_contents ("elem/agreement.php");
	 $title = "Соглашение";
		 }




 include "elem/layout.php";


	 
	

 




 



 

