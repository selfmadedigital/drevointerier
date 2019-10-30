<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>drevo-interier.sk</title>
    
    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

   <!--    fonts-->
    <link href='https://fonts.googleapis.com/css?family=Raleway:800,700,500,400,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,300italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700' rel='stylesheet' type='text/css'>
    
    <link href='https://fonts.googleapis.com/css?family=Alegreya:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
   
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/strock-icon.css" rel="stylesheet">
    <!--    owl-carousel-->
    <link rel="stylesheet" href="vendors/owlcarousel/owl.carousel.css"> 
    <link href="vendors/rs-plugin/css/settings.css" rel="stylesheet">
    <link href="vendors/magnific/magnific-popup.css" rel="stylesheet">
    <!--    css-->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
    $target = "onas";
    $uri = explode("/",$_SERVER['REQUEST_URI']);
    if(sizeof($uri) == 2){
        if(empty($uri[1])){
            $target = "onas";
        }else{
            $target = $uri[1];
        }
    }else{
        var_dump($uri);
    }
    if(!file_exists($target.".php")){
        include("404.php");
        die();   
    }else{
?>
<header class="row header navbar-static-top" id="main_navbar">
    <div class="container">
        <div class="row m0 social-info">
            <ul class="social-icon">
                <li class="tel"><a href="tel:+1234567890"><i class="fa fa-phone"></i> 02/659 687 5s6</a></li>
                <li class="email"><a href="#"><i class="fa fa-envelope-o"></i> drevo-interier@drevo-interier.sk</a></li>
            </ul>
        </div>
    </div>
   <div class="logo_part">
        <div class="logo">
            <a href="/" class="brand_logo">
                <img src="images/logo.png" alt="logo image">
            </a>
        </div>
    </div>
    <div class="main-menu">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <div class="menu row m0">                
                <ul class="nav navbar-nav navbar-right visible-sm">
                </ul>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="nav navbar-nav">
                        <li><a href="/">O NÁS<Small></Small></a></li>
                        <li><a href="/eurookna">EUROOKNÁ</a></li>
                        <li><a href="/plastoveokna">PLASTOVÉ OKNÁ</a></li>
                        <li><a href="/zakazkovestolarstvo">ZAKÁZKOVÉ STOLÁRSTVO</a></li>
                        <li><a href="/servis">SERVIS</a></li>
                        <li><a href="/galeria">GALÉRIA</a></li>
                        <li><a href="/kontakt">KONTAKT</a></li>
                    </ul>
                </div>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
</header>
<!--rv-slider-->

<?php 
    include($target.".php");
?>

<!--footer-->
<footer class="row">
 
     <div class="row m0 footer-bottom">
         <div class="container">
            <div class="row">
               <div class="col-sm-8">
                   Copyright &copy; <a href="/">drevo-interier.sk</a> <?php echo date("Y");?>. <br class="visible-xs"> Všetky práva vyhradené.
               </div>
               <div class="right col-sm-4">
                   |Vytvorilo dizajnové štúdio: <a href="https://www.selfmade.site">Selfmade</a>
               </div>
            </div>
        </div>
     </div>
</footer>
<?php }?>
<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--RS-->	
<script src="vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script> <!-- Revolution Slider Tools -->
<script src="vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> <!-- Revolution Slider -->
<script src="vendors/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script src="vendors/rs-plugin/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="vendors/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="vendors/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="vendors/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script src="vendors/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="vendors/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="vendors/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="vendors/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>

<script src="vendors/isotope/isotope.min.js"></script>
<script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="vendors/owlcarousel/owl.carousel.min.js"></script>
<script src="vendors/magnific/jquery.magnific-popup.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/gmaps.min.js"></script>
<script src="js/theme.js"></script>
<script>
    var uri = document.URL.split("/");
    var target = uri[uri.length-1];
    if(target.length == 0){
        target = 'onas';
    }
    $('ul.nav li').each(function( navItem ) {
        if(removeAccents($(this).children().text()).replace(/ /g, '').toLowerCase() == target){
           $(this).addClass('active'); 
        }
    });
    
    function removeAccents(strAccents) {
		var strAccents = strAccents.split('');
		var strAccentsOut = new Array();
		var strAccentsLen = strAccents.length;
		var accents = 'ÀÁÂÃÄÅàáâãäåÒÓÔÕÕÖØòóôõöøÈÉÊËèéêëðÇçÐÌÍÎÏìíîïÙÚÛÜùúûüÑñŠšŸÿýŽž';
		var accentsOut = "AAAAAAaaaaaaOOOOOOOooooooEEEEeeeeeCcDIIIIiiiiUUUUuuuuNnSsYyyZz";
		for (var y = 0; y < strAccentsLen; y++) {
			if (accents.indexOf(strAccents[y]) != -1) {
				strAccentsOut[y] = accentsOut.substr(accents.indexOf(strAccents[y]), 1);
			} else
				strAccentsOut[y] = strAccents[y];
		}
		strAccentsOut = strAccentsOut.join('');
		return strAccentsOut;
	}
</script>
</body>
</html>
    