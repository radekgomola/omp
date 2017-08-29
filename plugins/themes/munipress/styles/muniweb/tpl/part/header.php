<?php
	error_reporting('E_ALL ^ E_NOTICE');
?>
<!DOCTYPE html>
<!--[if lte IE 9]>    <html lang="cs" class="old-browser no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="cs" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="cs" class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<title><?php echo $title ?> | MUNI</title>
		<link rel="stylesheet" href="../css/style.css" media="screen" />
		<link rel="shortcut icon" href="../img/favicon.ico" />
		<script>
			document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
		</script>
		<script src="../js/modernizr-custom.js" type="text/javascript"></script>
		<script src="//maps.muni.cz/munimap/ics/map/lib/lib.js" type="text/javascript"></script>

		<!-- Twitter Card data -->
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@muni_cz">
		<meta name="twitter:title" content="<?php echo $title ?>">
		<meta name="twitter:description" content="Description here">
		<meta name="twitter:image" content="../img/social/twitter.png"> <?php /* Twitter Summary card images must be at least 120x120px */ ?>

		<!-- Open Graph data -->
		<meta property="og:title" content="<?php echo $title ?>" />
		<meta property="og:url" content="http://www.muni.com/" /> <?php /* Aktuální url */ ?>
		<meta property="og:description" content="Description here" />
		<meta property="og:image" content="../img/social/facebook.png" />
		<meta property="og:site_name" content="Masarykova univerzita" />

		<!-- soubory pro dokumentaci -->
		<link rel="stylesheet" href="../css/documentation.css" media="screen" />
		<!-- / soubory pro dokumentaci -->
	</head>
	<body>
		<p class="menu-accessibility">
			<a title="Přejít k obsahu (Klávesová zkratka: Alt + 2)" accesskey="2" href="#main">Přejít k obsahu</a>
			<span class="hide">|</span>
			<a href="#menu-main">Přejít k hlavnímu menu</a>
			<span class="hide">|</span>
			<a href="#form-search">Přejít k vyhledávání</a>
		</p>

		<?php if (!$hideHeader): ?>
			<?php include 'headers/type1.php' ?>
		<?php endif; ?>
