<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="title" content="Videos | Politecnico San Jose de Calasanz">
    <meta name="Keywords" content="politecnico, tecnicos, cursos, idiomas, la union, sistemas, ingles, frances, videos, youtube,">
    <meta http-equiv="Content-Language" content="es">
    <meta name="robots" content="INDEX,FOLLOW">
	<link rel="shortcut icon" href="favicon.ico">
	<meta charset="utf-8">
	<title>Videos | Politecnico San Jose de Calasanz</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css">
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="css/fullwidth.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen" />
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div class="top_float"></div>
	<div class="clear"></div>
	<header>
    	<?php
         include 'php_dinamic/header.php';
		?>
    </header>
    <div class="clear"></div>               
    <div class="horizontal_seperator"></div>
    <div class="clear"></div>
    <div class="container-fluid portfolio">
    	<div class="row-fluid">
        	<div class="container">
            	<div class="row">
                	<div class="span12">
                    	<div class="main_heading">VIDEOS<span><strong>&nbsp; / &nbsp;</strong>VIDEO</span></div>
                        <div class="clear"></div>               
    					<div class="horizontal_seperator"></div>
    					<div class="clear"></div>
                    </div>
                </div>
                <div class="row">
                	<?php
                    	include 'php_dinamic/videos.php';
					?>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="horizontal_seperator"></div>
    <div class="clear"></div>
    <footer>
    	<?php
			include 'php_dinamic/footer.php';
		?>
    </footer>
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- jQuery KenBurn Slider  -->
	<script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
    <script src="js/jquery.quicksand.js"></script>
    <script src="js/main.js"></script>
    <script src="fancybox/jquery.fancybox.js"></script>
    <script>
		$(".fancybox").fancybox({
			padding: 0,
			
			openEffect : 'elastic',
			openSpeed  : 150,
			
			closeEffect : 'elastic',
			closeSpeed  : 150,
			
			closeClick : true,
			
			helpers : {
			overlay : null
			}
		});
    </script>
	<script src="js/script.js"></script>
</body>
</html>