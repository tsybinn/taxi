$(function($){
   $(".phone").mask("+7 (999) 999-9999");
});


 
 var link  = document.querySelector(".phone"); 
 
 var header = document.querySelector(".main-header");
 
 var connect  = document.querySelector(".submit");
 
	link.addEventListener("click",function(event){
	event.preventDefault();
	header.classList.add("none");
	<!-- login.focus(); -->
	});
	
	
	connect.addEventListener("click",function(event){
	event.preventDefault();
	header.classList.remove("none");
	});