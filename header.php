<?php
function generateRandomString($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>
<!DOCTYPE html>
<html lang="es-AR"
	xmlns="http://www.w3.org/1999/xhtml" 
	xmlns:og="http://ogp.me/ns#" 
	xmlns:fb="http://www.facebook.com/2008/fbml" >
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="author" content="Abañiles" />
			<meta name="description" content="Diseñamos tu página como lo desees. Diseño de sitio web">
			<meta name="keywords" content="Albañiles, Albanil, Abaniles, Página, Web, Diseño, Template, Sitio, Hosting" />	
			<meta name="google-site-verification" content="U7JkijZg4Y2q8-sTOVTiyUUCxxdk_U1n_aCw2pAdqcs" />
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
			<meta name="twitter:card" content="summary" />
			<meta name="twitter:description" content="" />
			<meta name="twitter:image" content="http://www.xn--albailes-g3a.com.ar/assets/img/tablet.png" />
			<meta name="twitter:site" content="@albacomar"/>
			<meta name="twitter:title" content="Creamos tu sitio web" />
			<meta property="fb:app_id" content="179786012358259" />
			<meta property='og:description' content="Tu página web rápido"/>
			<meta property="og:image" content="http://www.xn--albailes-g3a.com.ar/assets/img/tablet.png" />
			<meta property="og:locale" content="es_AR" />
			<meta property='og:section' content="Diseño"/>
			<meta property='og:site_name' content='Albañiles' />
			<meta property='og:title' content='Constructores de la web'/>
			<meta property='og:type' content='wedsite'/>
			<meta property='og:url' content='http://www.albañiles.com.ar'/>
			<title>Albañiles de la web | Diseño de páginas web | Albañiles.com.ar</title>

			<!-- Bootstrap core CSS -->
			<link href="<?php echo $base_url; ?>/css/bootstrap.min.css" rel="stylesheet">

			<!-- Custom styles for this template -->
			<link href="<?php echo $base_url; ?>/css/custom.css" rel="stylesheet">
			<link href="<?php echo $base_url; ?>/css/flexslider.css" rel="stylesheet">
			<link href="<?php echo $base_url; ?>/css/font-awesome.css" rel="stylesheet">
			<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
			<link rel="author" href="https://plus.google.com/115257879582883899281"/>
			<link rel="alternate" hreflang="en" href="http://www.albañiles.com.ar/en">
			<link rel="alternate" hreflang="es-ar" href="http://www.albañiles.com.ar/">
			<link rel="shortcut icon" href="<?php echo $base_url; ?>/assets/ico/favicon.ico">
			<link rel="profile" href="http://gmpg.org/xfn/11" />
			<link rel="publisher" href="https://plus.google.com/115257879582883899281" />
			<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-68781113-1', 'auto');
			  ga('send', 'pageview');

			</script>
		</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo $base_url; ?>">
					<span class="fa-stack fa-lg">
						<span class="fa fa-circle fa-stack-2x"></span>
						<span class="fa fa-paint-brush fa-stack-1x fa-inverse"></span>
					</span>
					Alba<span class="title">ñiles</span>
				</a>
			</div>
			<div class="collapse navbar-collapse appiNav">
				<ul class="nav navbar-nav">
					<li>
						<a 
							href="<?php echo $base_url; ?><?php echo (isset($_REQUEST['buscar'])) ? '?buscar=' . generateRandomString(10) : ''; ?>"
							class="<?php echo ($_SERVER['REQUEST_URI'] == '/'? 'active' : '');?>">
							Inicio
						</a>
					</li>
					<li>
						<a 
							href="<?php echo $base_url; ?>/comenzar<?php echo (isset($_REQUEST['buscar'])) ? '?buscar=' . generateRandomString(10) : ''; ?>"
							class="<?php echo ($_SERVER['REQUEST_URI'] == '/comenzar/'? 'active' : '');?>">
							¿Cómo empezar?
						</a>
					</li>
					<li>
						<a 
							href="<?php echo $base_url; ?>/diseno-pagina-web<?php echo (isset($_REQUEST['buscar'])) ? '?buscar=' . generateRandomString(10) : ''; ?>"
							class="<?php echo ($_SERVER['REQUEST_URI'] == '/diseno-pagina-web/'? 'active' : '');?>">
							Nuestros clientes
						</a>
					</li>
<!--							<li><a href="#productWrap">Producto</a></li>-->
<!--							<li><a href="#pricingWrap">Precio</a></li>-->
<!--							<li><a href="#testimonialsWrap">Testimonio</a></li>-->
					<li>
						<a 
							href="<?php echo $base_url; ?>/contacto<?php echo (isset($_REQUEST['buscar'])) ? '?buscar=' . generateRandomString(10)	 : ''; ?>"
							class="<?php echo ($_SERVER['REQUEST_URI'] == '/contacto/'? 'active' : '');?>">
							Contacto
						</a>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
