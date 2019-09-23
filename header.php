<?php
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require_once($_SERVER["DOCUMENT_ROOT"].'/assets/php/function.php');

if(!$_SESSION["user"]) {
	$_SESSION["user"]['HTTP_REFERER'] 			 	= $_SERVER['HTTP_REFERER'];
	$_SESSION["user"]['HTTP_USER_AGENT'] 			= $_SERVER['HTTP_USER_AGENT'];
	$_SESSION["user"]['REMOTE_ADDR'] 			 		= $_SERVER['REMOTE_ADDR'];
	$_SESSION["user"]['REQUEST_URI'] 					= $_SERVER['REQUEST_URI'];
	$_SESSION["user"]['SCRIPT_NAME'] 			 		= $_SERVER['SCRIPT_NAME'];
	$_SESSION["user"]['QUERY_STRING'] 			  = $_SERVER['QUERY_STRING'];
	$_SESSION["user"]['GEOIP_CONTINENT_CODE'] = $_SERVER['GEOIP_CONTINENT_CODE'];
	$_SESSION["user"]['GEOIP_COUNTRY_CODE'] 	= $_SERVER['GEOIP_COUNTRY_CODE'];
	$_SESSION["user"]['GEOIP_COUNTRY_NAME'] 	= $_SERVER['GEOIP_COUNTRY_NAME'];
	$_SESSION["user"]['GEOIP_REGION'] 			 	= $_SERVER['GEOIP_REGION'];
	$_SESSION["user"]['GEOIP_REGION_NAME'] 		= $_SERVER['GEOIP_REGION_NAME'];
	$_SESSION["user"]['GEOIP_CITY'] 			 		= $_SERVER['GEOIP_CITY'];
	$_SESSION["user"]['GEOIP_DMA_CODE'] 			= $_SERVER['GEOIP_DMA_CODE'];
	$_SESSION["user"]['GEOIP_METRO_CODE'] 		= $_SERVER['GEOIP_METRO_CODE'];
	$_SESSION["user"]['GEOIP_AREA_CODE'] 			= $_SERVER['GEOIP_AREA_CODE'];
	$_SESSION["user"]['GEOIP_LATITUDE'] 			= $_SERVER['GEOIP_LATITUDE'];
	$_SESSION["user"]['GEOIP_LONGITUDE'] 			= $_SERVER['GEOIP_LONGITUDE'];
	$_SESSION["user"]['GEOIP_POSTAL_CODE'] 		= $_SERVER['GEOIP_POSTAL_CODE'];
	$_SESSION["user"]['createDate'] 			 		= date("Y-m-d H:i:s");

	$dbh->query('INSERT INTO users(
		HTTP_REFERER,
		HTTP_USER_AGENT,
		REMOTE_ADDR,
		REQUEST_URI,
		SCRIPT_NAME,
		QUERY_STRING,
		GEOIP_CONTINENT_CODE,
		GEOIP_COUNTRY_CODE,
		GEOIP_COUNTRY_NAME,
		GEOIP_REGION,
		GEOIP_REGION_NAME,
		GEOIP_CITY,
		GEOIP_DMA_CODE,
		GEOIP_METRO_CODE,
		GEOIP_AREA_CODE,
		GEOIP_LATITUDE,
		GEOIP_LONGITUDE,
		GEOIP_POSTAL_CODE,
		createDate
		) VALUES (
		' . $dbh->quote($_SESSION["user"]['HTTP_REFERER']) . ',
		' . $dbh->quote($_SESSION["user"]['HTTP_USER_AGENT']) . ',
		' . $dbh->quote($_SESSION["user"]['REMOTE_ADDR']) . ',
		' . $dbh->quote($_SESSION["user"]['REQUEST_URI']) . ',
		' . $dbh->quote($_SESSION["user"]['SCRIPT_NAME']) . ',
		' . $dbh->quote($_SESSION["user"]['QUERY_STRING']) . ',
		' . $dbh->quote($_SESSION["user"]['GEOIP_CONTINENT_CODE']) . ',
		' . $dbh->quote($_SESSION["user"]['GEOIP_COUNTRY_CODE']) . ',
		' . $dbh->quote($_SESSION["user"]['GEOIP_COUNTRY_NAME']) . ',
		' . $_SESSION["user"]['GEOIP_REGION'] . ',
		' . $dbh->quote($_SESSION["user"]['GEOIP_REGION_NAME']) . ',
		' . $dbh->quote($_SESSION["user"]['GEOIP_CITY']) . ',
		' . $_SESSION["user"]['GEOIP_DMA_CODE'] . ',
		' . $_SESSION["user"]['GEOIP_METRO_CODE'] . ',
		' . $_SESSION["user"]['GEOIP_AREA_CODE'] . ',
		' . $_SESSION["user"]['GEOIP_LATITUDE'] . ',
		' . $_SESSION["user"]['GEOIP_LONGITUDE'] . ',
		' . $_SESSION["user"]['GEOIP_POSTAL_CODE'] . ',
		' . $dbh->quote($_SESSION["user"]['createDate']) . '
	)');
}

$title 			 = 'Шаблоны для сайта 1C-Битрикс';
$header 		 = 'Шаблоны для сайта';
$keywords 	 = '';
$description = '';

$section = array();
foreach($dbh->query('SELECT id, name, url from section ORDER BY id ASC')->fetchAll() as $row) {
	$section[$row['id']] = $row;
}

$section_env = array();

$item_section = array();
$item_template = array();
$perPage = 20;

if(isset($_REQUEST['url']) && $_REQUEST['url'] != '') {
	$url = explode('/', $_REQUEST['url']);
	$urlTemplate = cleanUrlParamAN($url[2]);
	$urlSection = cleanUrlParamAN($url[1]);
	if($urlTemplate != '') {
		if($item_template = $dbh->query('SELECT id, name, section_id, description, demo, zip_1, zip_2, zip_3, img_local, url from templates WHERE url = "' . $urlTemplate . '"')->fetch()) {
			$dbh->query('UPDATE templates SET view = view + 1 WHERE id = ' . $item_template['id']);
			$item_section = $dbh->query('SELECT id, name, url from section WHERE url = "' . $urlSection . '"')->fetch();
			if($item_template['zip_1']) {
				$item_template['zip'][] = $item_template['zip_1'];
			}
			if($item_template['zip_2']) {
				$item_template['zip'][] = $item_template['zip_2'];
			}
			if($item_template['zip_3']) {
				$item_template['zip'][] = $item_template['zip_3'];
			}
			$title 			 = 'Бесплатные шаблоны - ' . $item_template['name'];
			$header 		 = 'Бесплатные шаблоны - ' . $item_section['name'];
			$keywords 	 = strtolower($item_template['name']) . ', ';
			$description = $item_template['name'] . '. ';
		}
	} elseif($urlSection != '') {
		if($item_section = $dbh->query('SELECT id, name, url from section WHERE url = "' . $urlSection . '"')->fetch()) {
			$dbh->query('UPDATE section SET view = view + 1 WHERE id = ' . $item_section['id']);
			$title 			 = 'Шаблоны для сайта - ' . $item_section['name'];
			$header 		 = 'Шаблоны для сайта - ' . $item_section['name'];
			$keywords 	 = strtolower($item_section['name']) . ', ';
			$description = $item_section['name'] . '. ';
		}
	}
}
?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="<?php echo $keywords; ?>разработка сайтов, дизайн сайтов, создание сайтов, сайт под ключ, сайт на Битрикс" />
	<meta name="description" content="<?php echo $description; ?>Частный вебмастер Сергей Запольский - Разработка сайтов на системе управления 1С-Битрикс">
	<meta name="author" content="Запольский Сергей">
	<meta name="yandex-verification" content="d9a2d2ac1d28be6b" />
	<title><?php echo $title; ?></title>

	<link rel="icon" href="/assets/images/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon/apple-touch-icon-180x180.png">

	<link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

	<link href="/assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="/assets/css/simple-line-icons.min.css" rel="stylesheet" media="screen">
	<link href="/assets/css/animate.min.css" rel="stylesheet">

	<!-- Custom styles CSS -->
	<link href="/assets/css/style.css" rel="stylesheet" media="screen">

    <script async src="/assets/js/modernizr.custom.min.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-57789359-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-57789359-1');
	</script>

</head>
<body>
	<!-- Preloader -->

	<div id="preloader">
		<div id="status"></div>
	</div>

	<!-- Navigation start -->

	<header class="header">

		<nav class="navbar navbar-custom" role="navigation">

			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Дополнительная навигация</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">Сергей Запольский</a>
				</div>

				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="/#home">Начало</a></li>
						<li><a href="/#services">Услуги</a></li>
			            <li><a href="/#portfolio">Работы</a></li>
			            <li><a href="/#skills">Навыки</a></li>
						<li><a href="/#testimonials">Сертификаты</a></li>
						<li><a href="#template">Шаблоны</a></li>
						<li><a href="/#contact">Контакты</a></li>
					</ul>
				</div>

			</div><!-- .container -->

		</nav>

	</header>

	<!-- Navigation end -->
