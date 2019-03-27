


<!DOCTYPE html>
<html lang="ru">
<head>


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter50335315 = new Ya.Metrika2({
                    id:50335315,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/50335315" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<link rel="shortcut icon" href="img/logo.png" type="image/png">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" type="text/css" rel="stylesheet"/>

  
<link href="css/mstyle.css" rel="stylesheet" media="screen and (min-width:274px) and (max-width:980px)">

<title><?= $title?></title>
<meta name="description" content="Не плати таксопарку % с заказов!
Подключайся БЕЗ % - абонентская плата 999 рублей в месяц!" />


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/jquery.maskedinput.min.js" type="text/javascript"></script>
<script src="js/js.js"></script>

</head>


 <body>
 <header class="main-header">
	
	<?php include "elem/header.php";?>
				
	</header>

	
	
<div class "content">
	
<?= $content ?> 

</div>

	

	
<footer class="footer">
<?php include "elem/footer.php";?>

	</footer>
<script> 
 var link  = document.querySelector(".phone"); 
 
 var header = document.querySelector(".main-header");
 
 
 
	link.addEventListener("focus",function(event){
	event.preventDefault();
	header.classList.toggle("none");
	<!-- login.focus(); -->
	});
	
	
	link.addEventListener("blur",function(event){
	event.preventDefault();
	header.classList.remove("none");
	});
	
	</script>	
	

</body>
</html>