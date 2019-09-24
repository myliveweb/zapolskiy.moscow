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
header("Cache-Control: max-age=31536000");
?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Cache-control" content="public">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="разработка сайтов, дизайн сайтов, создание сайтов, сайт под ключ, сайт на Битрикс" />
	<meta name="description" content="Частный вебмастер Сергей Запольский - Разработка сайтов на системе управления 1С-Битрикс">
	<meta name="author" content="Запольский Сергей">
	<meta name="yandex-verification" content="d9a2d2ac1d28be6b" />
	<?php
	$title = "Фрилансер - Разработка сайтов";
	$h1_title = "Фрилансер на полный рабочий день";
	$h1_title = "Разработка сайтов";
	if(0) {
		$title = "Не угадал";
		$h1_title = "Пусто";
	}
	?>
	<title><?=$title?></title>

	<link rel="icon" href="assets/images/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon-180x180.png">

	<style>@import url(https://fonts.googleapis.com/css?family=Lobster);html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}header,nav,section{display:block}a{background-color:transparent}b{font-weight:700}h1{margin:.67em 0;font-size:2em}img{border:0}button,input{margin:0;font:inherit;color:inherit}button{overflow:visible}button{text-transform:none}button{-webkit-appearance:button}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}:before,:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}input,button{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#428bca;text-decoration:none}img{vertical-align:middle}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}h1,h2,h3{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}h1,h2,h3{margin-top:20px;margin-bottom:10px}h1{font-size:36px}h2{font-size:30px}h3{font-size:24px}ul{margin-top:0;margin-bottom:10px}.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-right:-15px;margin-left:-15px}.col-sm-3,.col-sm-6{position:relative;min-height:1px;padding-right:15px;padding-left:15px}@media (min-width:768px){.col-sm-3,.col-sm-6{float:left}.col-sm-6{width:50%}.col-sm-3{width:25%}.col-sm-offset-3{margin-left:25%}}.collapse{display:none;visibility:hidden}.nav{padding-left:0;margin-bottom:0;list-style:none}.nav>li{position:relative;display:block}.nav>li>a{position:relative;display:block;padding:10px 15px}.navbar{position:relative;min-height:50px;margin-bottom:20px;border:1px solid transparent}@media (min-width:768px){.navbar{border-radius:4px}}@media (min-width:768px){.navbar-header{float:left}}.navbar-collapse{padding-right:15px;padding-left:15px;overflow-x:visible;-webkit-overflow-scrolling:touch;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1)}@media (min-width:768px){.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important;visibility:visible!important}}.container>.navbar-header,.container>.navbar-collapse{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.container>.navbar-header,.container>.navbar-collapse{margin-right:0;margin-left:0}}.navbar-brand{float:left;height:50px;padding:15px 15px;font-size:18px;line-height:20px}@media (min-width:768px){.navbar>.container .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;padding:9px 10px;margin-top:8px;margin-right:15px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width:768px){.navbar-toggle{display:none}}.navbar-nav{margin:7.5px -15px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:20px}@media (min-width:768px){.navbar-nav{float:left;margin:0}.navbar-nav>li{float:left}.navbar-nav>li>a{padding-top:15px;padding-bottom:15px}}@media (min-width:768px){.navbar-right{float:right!important;margin-right:-15px}}.container:before,.container:after,.row:before,.row:after,.nav:before,.nav:after,.navbar:before,.navbar:after,.navbar-header:before,.navbar-header:after,.navbar-collapse:before,.navbar-collapse:after{display:table;content:" "}.container:after,.row:after,.nav:after,.navbar:after,.navbar-header:after,.navbar-collapse:after{clear:both}@-ms-viewport{width:device-width}@font-face{font-family:FontAwesome;src:url(../fonts/fontawesome-webfont.eot?v=4.3.0);src:url(../fonts/fontawesome-webfont.eot?#iefix&v=4.3.0) format('embedded-opentype'),url(../fonts/fontawesome-webfont.woff2?v=4.3.0) format('woff2'),url(../fonts/fontawesome-webfont.woff?v=4.3.0) format('woff'),url(../fonts/fontawesome-webfont.ttf?v=4.3.0) format('truetype'),url(../fonts/fontawesome-webfont.svg?v=4.3.0#fontawesomeregular) format('svg');font-weight:400;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;-webkit-transform:translate(0,0);-ms-transform:translate(0,0);transform:translate(0,0)}.fa-2x{font-size:2em}.fa-angle-down:before{content:"\f107"}@font-face{font-family:Simple-Line-Icons;src:url(../fonts/Simple-Line-Icons.eot);src:url(../fonts/Simple-Line-Icons.eot?#iefix) format('embedded-opentype'),url(../fonts/Simple-Line-Icons.woff) format('woff'),url(../fonts/Simple-Line-Icons.ttf) format('truetype'),url(../fonts/Simple-Line-Icons.svg#Simple-Line-Icons) format('svg');font-weight:400;font-style:normal}.icon-badge,.icon-magic-wand,.icon-puzzle,.icon-question{font-family:Simple-Line-Icons;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased}.icon-magic-wand:before{content:"\e017"}.icon-badge:before{content:"\e028"}.icon-puzzle:before{content:"\e02d"}.icon-question:before{content:"\e05d"}@charset "UTF-8";@-webkit-keyframes fadeInUp{0%{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}100%{opacity:1;-webkit-transform:none;transform:none}}@keyframes fadeInUp{0%{opacity:0;-webkit-transform:translate3d(0,100%,0);-ms-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}100%{opacity:1;-webkit-transform:none;-ms-transform:none;transform:none}}.fadeInUp{-webkit-animation-name:fadeInUp;animation-name:fadeInUp}@-webkit-keyframes slideInLeft{0%{-webkit-transform:translateX(-100%);transform:translateX(-100%);visibility:visible}100%{-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes slideInLeft{0%{-webkit-transform:translateX(-100%);-ms-transform:translateX(-100%);transform:translateX(-100%);visibility:visible}100%{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}}.slideInLeft{-webkit-animation-name:slideInLeft;animation-name:slideInLeft}@-webkit-keyframes slideInRight{0%{-webkit-transform:translateX(100%);transform:translateX(100%);visibility:visible}100%{-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes slideInRight{0%{-webkit-transform:translateX(100%);-ms-transform:translateX(100%);transform:translateX(100%);visibility:visible}100%{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}}.slideInRight{-webkit-animation-name:slideInRight;animation-name:slideInRight}@font-face{font-family:'Raleway400';font-weight:400;font-style:normal;src:url(../fonts/Raleway-Regular.ttf) format('truetype')}@font-face{font-family:'Raleway700';font-weight:700;font-style:normal;src:url(../fonts/Raleway-Bold.ttf) format('truetype')}body{font:300 14px/1.8 'Raleway300',sans-serif;color:#666;overflow-x:hidden}img{max-width:100%;height:auto}a{color:#E7746F}h1,h2,h3{font:700 40px/1.2 Raleway700,sans-serif;text-transform:uppercase;letter-spacing:5px;margin:5px 0 5px;color:#222}h2{font-size:30px;margin:0 0 30px}h3{font-size:13px;letter-spacing:1px;margin:0 0 5px}.iconbox{-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px}.pfblock{padding:120px 0 100px}.pfblock-gray{background:#f5f5f5}.pfblock-image{padding:0}.pfblock-image,.pfblock-image h1{color:#fff}.pfblock-header{text-align:center;margin:0 0 60px}.pfblock-title{font-weight:800}.pfblock-subtitle{font-family:Raleway400,"Times New Roman",Times,sans-serif;font-style:normal;font-size:18px}.pfblock-line{background:rgba(135,135,135,.5);width:100px;height:1px;margin:30px auto}#home{background:url(../images/cover.webp);background-color:#222;background-attachment:fixed;background-repeat:no-repeat;background-position:50% 50%;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;padding:0}.home-overlay{background-color:rgba(44,62,80,.3);background-image:url(../images/pattern.png);background-repeat:repeat;height:100%;left:0;position:absolute;top:0;width:100%;z-index:0}.intro{position:absolute;width:100%;top:50%;left:0;text-align:center;-webkit-transform:translate(0%,-50%);-moz-transform:translate(0%,-50%);-ms-transform:translate(0%,-50%);-o-transform:translate(0%,-50%);transform:translate(0%,-50%);padding:0 15px}.intro h1{font-weight:800}.start{font-family:Raleway400,"Times New Roman",Times,sans-serif;font-size:16px;font-style:normal;text-transform:none;margin:15px 0}.iconbox{background:#fff;border-bottom:1px solid #d4d4d4;text-align:center;padding:40px 20px;margin:0 0 20px}.iconbox-icon{margin:0 0 15px;font-size:32px;color:#222}.iconbox-title{margin:0 0 15px;padding:0}.header{border-bottom:1px solid #f5f5f5;position:relative;width:100%;z-index:998}.navbar-custom{border:0;border-radius:0;margin:0;text-transform:uppercase;font-family:Raleway400,sans-serif}.navbar-custom{background:#fff;padding:0}.navbar-custom .navbar-brand,.navbar-custom .navbar-nav>li>a{font-size:11px;letter-spacing:3px;color:#222}.navbar-custom .navbar-brand{font-weight:700;font-size:22px;font-family:Lobster,cursive}.navbar-custom .navbar-toggle .icon-bar{background:#222}.scroll-down{position:absolute;left:50%;bottom:40px;border:2px solid #fff;border-radius:50%;height:50px;width:50px;margin-left:-15px;display:block;z-index:10;text-align:center}.scroll-down span{position:relative;color:#fff;-webkit-animation-name:drop;-webkit-animation-duration:1s;-webkit-animation-timing-function:linear;-webkit-animation-delay:0s;-webkit-animation-iteration-count:infinite;-webkit-animation-play-state:running;animation-name:drop;animation-duration:1s;animation-timing-function:linear;animation-delay:0s;animation-iteration-count:infinite;animation-play-state:running}@-webkit-keyframes drop{0%{top:0;opacity:0}30%{top:10px;opacity:1}100%{top:25px;opacity:0}}@keyframes drop{0%{top:0;opacity:0}30%{top:10px;opacity:1}100%{top:25px;opacity:0}}#preloader{background:#FFF;bottom:0;left:0;position:fixed;right:0;top:0;z-index:9999}#status{background-image:url(../images/preloader.gif);background-position:center;background-repeat:no-repeat;height:200px;left:50%;margin:-100px 0 0 -100px;position:absolute;top:50%;width:200px}@media (max-width:480px){h1{font-size:34px;letter-spacing:3px}h2{font-size:24px;margin:0 0 30px;letter-spacing:3px}}</style>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-57789359-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-57789359-1');
	</script>
	<script async src="assets/js/modernizr.custom.min.js"></script>
</head>
<body>

	<!-- Preloader -->

	<div id="preloader">
		<div id="status"></div>
	</div>

	<!-- Home start -->

	<section id="home" class="pfblock-image screen-height">
        <div class="home-overlay"></div>
        <!--<div class="main-face" style="margin: 0 auto; width: 15%; position: relative; top: 10%;"><img style=" border-radius: 50%;" src="assets/images/y.webp" /></div>-->
        <div class="main-face" style="margin: 0 auto; width: 250px; position: relative; top: 10%;">
        	<div id="mi_face"></div>
        </div>
		<div class="intro">
			<div class="start">Сергей Запольский</div>
			<h1><?=$h1_title?></h1>
			<div class="start">Могу, умею, решаю ваши задачи.</div>
		</div>

        <a href="#services">
		<div class="scroll-down">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
		</div>
        </a>

	</section>

	<!-- Home end -->

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
						<li><a href="#home">Начало</a></li>
						<li><a href="#services">Услуги</a></li>
            <li><a href="#portfolio">Работы</a></li>
            <li><a href="#skills">Навыки</a></li>
						<li><a href="#testimonials">Сертификаты</a></li>
						<li><a href="/template/">Шаблоны</a></li>
						<li><a href="#contact">Контакты</a></li>
					</ul>
				</div>

			</div><!-- .container -->

		</nav>

	</header>

	<!-- Navigation end -->

    <!-- Services start -->

	<section id="services" class="pfblock pfblock-gray">
		<div class="container">
			<div class="row">

				<div class="col-sm-10 col-sm-offset-1">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">Что могу предложить?</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							Web Программист. Руки заточены как под BackEnd, так и под FrontEnd.<br />С 2012 года сертификат разработчика на 1С-Битрикс Управление сайтом. Имею сертификат Бизнес партнёра. Делаю только качественные сайты. Избегаю "костылей". Сотрудничество со студиями рассматривается.
						</div>
					</div>

				</div>

			</div>

			<div class="row">

				<div class="col-sm-3">

					<div class="iconbox wow slideInLeft">
						<div class="iconbox-icon">
							<span class="icon-puzzle"></span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">Web программирование</h3>
							<div class="iconbox-desc">
								Строю интернет сайты, порталы, магазины, каталоги, промо. Делаю сайты с нуля, модернизирую (оптимизирую), фантазирую, вулканизирую, идеализирую… , Совершенствую и ещё раз совершенствую.
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-3">

					<div class="iconbox wow slideInLeft">
						<div class="iconbox-icon">
							<span class="icon-magic-wand"></span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">Web дизайн</h3>
							<div class="iconbox-desc">
								Вёрстка, редизайн, интеграция компонентов. Кастомизация. Это всё моё. Могу воплотить в жизнь любое программное решение. Невыполнимых задач не бывает. Любые ваши идеи могут быть воплощены в реальность.
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-3">

					<div class="iconbox wow slideInRight">
						<div class="iconbox-icon">
							<span class="icon-badge"></span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">Сопровождение</h3>
							<div class="iconbox-desc">
								Любой сайт требует бережного за ним ухода. Своевременного лечения. Иногда его надо вовремя быстро перенастроить под стремительно меняющийся рынок. Я всегда готов вам в этом помочь.
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-3">

					<div class="iconbox wow slideInRight">
						<div class="iconbox-icon">
							<span class="icon-question"></span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">Есть вопросы?</h3>
							<div class="iconbox-desc">
								С удовольствием отвечу.<br />Пишите звоните:<br /><br /><div style="text-align: left;">Skype: <b>myliveweb</b><br />Почта: <b>info@zapolskiy.moscow</b><br />Тел: <b>+7 962 206-4142</b><br /></div><br />
							</div>
						</div>
					</div>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- Services end -->

	<!-- Portfolio start -->

	<section id="portfolio" class="pfblock">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">Мои работы</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							Здесь показана только часть работ. Многие из них сданы по монитору качества. При нажатии перейдёте на рабочий сайт.
						</div>
					</div>

				</div>

			</div><!-- .row -->



            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="grid wow zoomIn">
                        <a href="https://umaumi.com/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/umaumi.com.png" alt="umaumi.com"/>
	                            <figcaption>
	                                <h2>UMa <span>&</span> <span>UMi</span></h2>
	                                <p>Сайт под "ключ", сопровождение</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="grid wow zoomIn">
                        <a href="https://naumag.ru/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/naumag.ru.png" alt="naumag.ru"/>
	                            <figcaption>
	                                <h2>Нау <span>Маг</span></h2>
	                                <p>Доработки, ремонт, сопровождение</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="grid wow zoomIn">
                        <a href="https://reddock.ru/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/reddock.ru.png" alt="reddock.ru"/>
	                            <figcaption>
	                                <h2>Reddock</h2>
	                                <p>Редизайн, интеграция, доработки</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="grid wow zoomIn">
                        <a href="https://grand-pyro.ru/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/grand-pyro.ru.png" alt="grand-pyro.ru"/>
	                            <figcaption>
	                                <h2>Grand <span>Pyro</span></h2>
	                                <p>Редизайн, интеграция</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="grid wow zoomIn">
                        <a href="https://zicore.ru/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/zicore.ru.png" alt="zicore.ru"/>
	                            <figcaption>
	                                <h2>Zicore</span></h2>
	                                <p>Интеграция, доработки, сопровождение</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="grid wow zoomIn">
                        <a href="https://tehniksb.ru/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/tehniksb.ru.png" alt="tehniksb.ru"/>
	                            <figcaption>
	                                <h2>ТД <span>Техниксервис</span></h2>
	                                <p>Редизайн, интеграция, доработки, сопровождение</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <a href="https://apelsingroup.ru/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/apelsingroup.ru.png" alt="apelsingroup.ru"/>
	                            <figcaption>
	                                <h2>Апельсин <span>Group</span></h2>
	                                <p>Доработки, ремонт</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <a href="https://comhouse.ru/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/comhouse.ru.png" alt="comhouse.ru"/>
	                            <figcaption>
	                                <h2>Com <span>House</span></h2>
	                                <p>Редизайн, интеграция, доработки, ремонт, сопровождение</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <a href="https://www.itkt.ru/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/itkt.ru.png" alt="itkt.ru"/>
	                            <figcaption>
	                                <h2>Интеркомплект</h2>
	                                <p>Доработки, ремонт</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <a href="http://avsystem24.ru/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/avsystem24.ru.png" alt="avsystem24.ru"/>
	                            <figcaption>
	                                <h2>АВСистема</h2>
	                                <p>Редизайн, интеграция, доработки, сопровождение</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <a href="https://rus-sned.ru/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/rus-sned.ru.png" alt="rus-sned.ru"/>
	                            <figcaption>
	                                <h2>Русская <span>Снедь</span></h2>
	                                <p>Редизайн, интеграция, доработки</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <a href="http://www.jouanel-rus.ru/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/jouanel-rus.ru.png" alt="jouanel-rus.ru"/>
	                            <figcaption>
	                                <h2>Jouanel</h2>
	                                <p>Доработки, ремонт</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <a href="http://stallprofil.ru/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/stallprofil.ru.png" alt="stallprofil.ru"/>
	                            <figcaption>
	                                <h2>СтальПрофиль</h2>
	                                <p>Редизайн, интеграция</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="grid wow zoomIn">
                        <a href="https://navkusicvet.ru/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/navkusicvet.ru.png" alt="navkusicvet.ru"/>
	                            <figcaption>
	                                <h2>На вкус и цвет</h2>
	                                <p>Доработки, ремонт</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <a href="https://www.stanki.ru/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/stanki.ru.png" alt="stanki.ru"/>
	                            <figcaption>
	                                <h2>Ассоциация <span>«КАМИ»</span></h2>
	                                <p>Сайт под "ключ", сопровождение</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <a href="https://vkuslab.ru/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/vkuslab.ru.png" alt="vkuslab.ru"/>
	                            <figcaption>
	                                <h2>Вкус <span>Лаб</span></h2>
	                                <p>Доработки, ремонт</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <a href="http://albico.ru/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/albico.ru.png" alt="albico.ru"/>
	                            <figcaption>
	                                <h2>Albico</h2>
	                                <p>Сайт под "ключ", сопровождение</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <a href="http://demid.avdol.tmweb.ru/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/demid.avdol.tmweb.ru.png" alt="demid.avdol.tmweb.ru"/>
	                            <figcaption>
	                                <h2>Демидовская <span>вода</span></h2>
	                                <p>Интеграция, доработки, ремонт</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <a href="https://gamesdealer.ru/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/gamesdealer.ru.png" alt="gamesdealer.ru"/>
	                            <figcaption>
	                                <h2>GamesDealer</h2>
	                                <p>Сайт под "ключ", сопровождение</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <a href="https://master-juvelir.ru/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/master-juvelir.ru.png" alt="master-juvelir.ru"/>
	                            <figcaption>
	                                <h2>Ювелирная <span>мастерская</span></h2>
	                                <p>Доработки, ремонт</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <a href="http://xn--80ajsci4a.xn--p1ai/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/xn--80ajsci4a.xn--p1ai.png" alt="Мелант.рф"/>
	                            <figcaption>
	                                <h2>Мелант</h2>
	                                <p>Интеграция, доработки, ремонт</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <a href="https://www.f-tk.ru/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/f-tk.ru.png" alt="f-tk.ru"/>
	                            <figcaption>
	                                <h2>Компания <span>«Факел»</span></h2>
	                                <p>Редизайн, интеграция, доработки</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <a href="http://www.epilmag.com/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/epilmag.com.png" alt="epilmag.com"/>
	                            <figcaption>
	                                <h2>EpilMag</h2>
	                                <p>Доработки</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">

                    <div class="grid wow zoomIn">
                        <a href="https://angelok.ru/" target="blank">
	                        <figure class="effect-bubba">
	                            <img src="assets/images/work/angelok.ru.png" alt="angelok.ru"/>
	                            <figcaption>
	                                <h2>Ангелок</h2>
	                                <p>Доработки, ремонт</p>
	                            </figcaption>
	                        </figure>
                        </a>
                    </div>

                </div>

            </div>


		</div><!-- .contaier -->

	</section>

	<!-- Portfolio end -->

    <!-- Skills start -->

    <section class="pfblock pfblock-gray" id="skills">

			<div class="container">

				<div class="row skills">

					<div class="row">

                        <div class="col-sm-6 col-sm-offset-3" style="width: 80%; margin-left: 10%;">

                            <div class="pfblock-header wow fadeInUp">
                                <h2 class="pfblock-title">Навыки</h2>
                                <div class="pfblock-line"></div>
                                <div class="pfblock-subtitle">
                                	<b>Полный Битрикс стек</b> - PHP, SQL, Bitrix API, JavaScript + всякие сертификаты их много<br />
                                	<b>Data mining (сбор и анализ данных, BigData)</b> - Python, Rust, Go<br />
                                	<b>Мобильная разработка</b> - Flutter (Dart), Kotlin<br /><br />
                                	Постоянно продолжаю обучаться (компьтерное зрение, умный город, умные вещи, социальная инженерия).
                                </div>
                            </div>

                        </div>

                    </div><!-- .row -->

					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="200" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">100500</span>
                        </span>
						<h3 class="text-center">Программирование</h3>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="200" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">200</span>
                        </span>
						<h3 class="text-center">Дизайн</h3>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="110" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">110</span>
                        </span>
						<h3 class="text-center">Продвижение</h3>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="150" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">150</span>
                        </span>
						<h3 class="text-center">UI / UX</h3>
					</div>

				</div><!--End row -->

			</div>

    </section>

    <!-- Skills end -->

	<!-- CallToAction start -->

	<section class="calltoaction">
		<div class="container">

			<div class="row">

				<div class="col-md-12 col-lg-12">
					<h2 class="wow slideInRight" data-wow-delay=".1s">Готовы к сотрудничеству?</h2>
					<div class="calltoaction-decription wow slideInRight" data-wow-delay=".2s">
						Кратко опишите вашу задачу. В ближайшее время я свяжусь с вами.
					</div>
				</div>

				<div class="col-md-12 col-lg-12 calltoaction-btn wow slideInRight" data-wow-delay=".3s">
					<a href="#contact" class="btn btn-lg">Написать мне</a>
				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- CallToAction end -->

	<!-- Testimonials start -->

	<section id="testimonials" class="pfblock pfblock-gray">

		<div class="container">

            <div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">Сертификаты</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							Партнерская программа «1С-Битрикс» объединяет людей и компании, которые занимаются созданием, обслуживанием, поддержкой интернет-проектов, дистрибуцией ПО
						</div>
					</div>

				</div>

			</div><!-- .row -->

            <div class="row">

			<div id="cbp-qtrotator" class="cbp-qtrotator">
                <div class="cbp-qtcontent">
                    <img src="assets/images/sert/1_sm.png" alt="Сертификат" />
                    <blockquote>
                      <p>В программе «Мониторинга качества внедрений» участвуют партнеры 1С-Битрикс, системно работающие над качеством выполняемых проектов улучшая их.</p>
                      <footer>1С-Битрикс</footer>
                    </blockquote>
                </div>
                <div class="cbp-qtcontent">
                    <img src="assets/images/sert/2_sm.png" alt="Сертификат" />
                    <blockquote>
                      <p>Сертифицированный партнер обладает достаточным опытом для того, чтобы оказывать профессиональные услуги по разработке сайтов на основе «1С-Битрикс: Управление сайтом».</p>
                      <footer>1С-Битрикс</footer>
                    </blockquote>
                </div>
                <div class="cbp-qtcontent">
                    <img src="assets/images/sert/3_sm.png" alt="Сертификат" />
                    <blockquote>
                      <p>Бизнес-партнер специализируется на онлайновой или офлайновой дистрибуции программного обеспечения, оказывать консультационные услуги различным компаниям.</p>
                      <footer>1С-Битрикс</footer>
                    </blockquote>
                </div>
                <div class="cbp-qtcontent">
                    <img src="assets/images/sert/4_sm.png" alt="Сертификат" />
                    <blockquote>
                      <p>Компетенция «Композитный сайт» предоставляется партнерам, успешно внедряющим технологию «Композитный сайт» в интернет-проекты на базе «1С-Битрикс: Управление сайтом».</p>
                      <footer>1С-Битрикс</footer>
                    </blockquote>
                </div>

            </div>

            </div><!-- .row -->


		</div><!-- .row -->
	</section>

	<!-- Testimonial end -->


	<!-- Contact start -->

	<section id="contact" class="pfblock">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header">
						<h2 class="pfblock-title">Пишите</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							Кратко опишите вашу задачу. Я обязательно свяжусь с вами.
						</div>
					</div>

				</div>

			</div><!-- .row -->

			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<form id="contact-form" role="form">
						<input type="hidden" id="c_template_id" name="c_template_id" value="0" />
						<input type="hidden" id="c_template_url" name="c_template_url" value="" />
						<div class="ajax-hidden">
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Имя</label>
								<input type="text" id="c_name" class="form-control" name="c_name" placeholder="Имя">
							</div>

							<div class="form-group wow fadeInUp" data-wow-delay=".1s">
								<label class="sr-only" for="c_email">Email</label>
								<input type="email" id="c_email" class="form-control" name="c_email" placeholder="E-mail">
							</div>

							<div class="form-group wow fadeInUp" data-wow-delay=".2s">
								<textarea class="form-control" id="c_message" name="c_message" rows="7" placeholder="Ваше сообщение"></textarea>
							</div>

							<button type="submit" class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".3s">Отправить сообщение</button>
						</div>
						<div class="ajax-response" style="margin-top: 15px;"></div>
					</form>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- Contact end -->

	<!-- Footer start -->

	<footer id="footer">
		<div class="container">
			<div class="row">

				<div class="col-sm-12">

                    <p class="copyright">
                        © 2019 Сергей Запольский&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;Skype: myliveweb&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;Почта: info@zapolskiy.moscow&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;Тел: +7 962 206-4142
					</p>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</footer>

	<!-- Footer end -->

	<!-- Scroll to top -->

	<div class="scroll-up">
		<a href="#home"><i class="fa fa-angle-up"></i></a>
	</div>

    <!-- Scroll to top end -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/simple-line-icons.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/animate.min.css" rel="stylesheet">

	<!-- Custom styles CSS -->
	<link href="assets/css/style.css" rel="stylesheet" media="screen">

	<!-- Javascript files -->

	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.parallax-1.1.3.min.js"></script>
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="assets/js/jquery.sticky.min.js"></script>
	<script src="assets/js/smoothscroll.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
  <script src="assets/js/jquery.easypiechart.min.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/jquery.cbpQTRotator.min.js"></script>
	<script src="assets/js/custom.min.js"></script>

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	    (function (d, w, c) {
	        (w[c] = w[c] || []).push(function() {
	            try {
	                w.yaCounter47514331 = new Ya.Metrika2({
	                    id:47514331,
	                    clickmap:true,
	                    trackLinks:true,
	                    accurateTrackBounce:true,
	                    webvisor:true
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
	<noscript><div><img src="https://mc.yandex.ru/watch/47514331" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
<script>
/**
 * A function to handle a click on a checkout button. This function uses the eventCallback
 * data layer variable to handle navigation after the ecommerce data has been sent to Google Analytics.
 */
$(document).ready(function() {
	function onCheckout() {
	  dataLayer.push({
	    'event': 'checkout',
	    'ecommerce': {
	      'checkout': {
	        'actionField': {'step': 1, 'option': 'Visa'},
	        'products': [{
	          'name': 'Triblend Android T-Shirt',
	          'id': '12345',
	          'price': '15.25',
	          'brand': 'Google',
	          'category': 'Apparel',
	          'variant': 'Gray',
	          'quantity': 1
	       }]
	     }
	   },
	   'eventCallback': function() {
	      //document.location = 'checkout.html';
	   }
	  });
	}
	onCheckout();
});
</script>
</body>
</html>