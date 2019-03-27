<?php

//start PDO;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);




 
 
 
		interface Engine {
			
			public function seeConditions ();
			public function seeOferta ();
			public function seeAgreement ();
			public function seeForm ();
			
		}
		
		
		
		class Show implements   Engine {
			
			
			public function seeConditions (){
				if(!$_GET){ 
				$GLOBALS["content"] = file_get_contents ("elem/conditions.php");	  		
				$GLOBALS ["title"] = "Подключение к яндекс гетт ситимобил";		
				}
			}
				
			public function seeOferta (){
				
				 if(isset($_GET ['oferta'] )){
					 $GLOBALS["content"] =	 file_get_contents ("elem/oferta.php");
					$GLOBALS ["title"] = "ОФЕРТА";
						}	
			}
			public function seeAgreement (){
				
				 if(isset($_GET ['agreement']) ){
						$GLOBALS["content"] =  file_get_contents ("elem/agreement.php");
						$GLOBALS ["title"] = "Соглашение";
					}
			}public function seeForm (){
				
				 if(isset($_GET ['form']) ){
						$GLOBALS["content"] =  file_get_contents ("elem/form.php");
						$GLOBALS ["title"] = "Спасибо";
					}
			}
			
		}
		
		$engine = new Show;
		$engine->seeConditions();
		$engine->seeOferta();
		$engine->seeAgreement();
		$engine->seeForm();

 include "elem/layout.php";


	 
	

 




 



 

