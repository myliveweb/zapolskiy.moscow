<?php
$name 		  = $_POST['name'];
$email 		  = $_POST['email'];
$user_message = $_POST['message'];
$template_id  = $_POST['template_id'];
$template_url = $_POST['template_url'];

if($user_message != '' && $name != '' && $email != '') {

	if($template_id > 0 && $template_url != '') {
		$user_message .= '<br />Прикреплённый шаблон <a href="' . $template_url . '">№' . $template_id . '</a>';
	}

	$message = '
	<!DOCTYPE html>
	<html>
	<head>
	<title>Horticulture a Newsletter Template | w3layouts</title>
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Horticulture templates, Email Templates, Newsletters, Marketing  templates,
		Advertising templates, free Newsletter" />
	<!-- //Custom Theme files -->
	<!-- Responsive Styles and Valid Styles -->
		<style type="text/css">
		    .body{
	            width: 100%;
				text-align: -webkit-center;
				vertical-align: top;
			   	background:#34495e;
	        }

	        html{
	            width: 100%;
	        }

	        table{
	            font-size: 14px;
	            border: 0;
	        }
			 /* ----------- responsivity ----------- */
			 @media only screen and (max-width:800px){
				.container {
					width: 650px;
					}
				.4_grids{
					width: 216px !important;
				}
				.container-middle{width: 416px !important;}
				table.ban{
				background: url(https://zapolskiy.moscow/assets/images/mail/banner.jpg);
					background-size: cover;
					height: 342px!important;
				}
				  .gallery-img a img {
					height: 134px !important;
				}
				.gallery-img1 a img {
					height: 60px !important;
				}
				.gallery-img2 a img {
					height: 60px !important;
				}
							span {
						   0.7em!important;
						}
						a.log {
							font-size: 2.7em!important;
						}
							a.nav {
							font-size: 0.9em!important;
						}
					table.ban {
						width: 100%!important;
						    height: 375px!important;
					}
					td.price {
						font-size: 1.8em!important;
					}
					td.top-text {
						height: 22px;
					}
				td.h-title {
					font-size:1.8em!important;
				}
				a.learn {
					padding: 9px 12px!important;
					width: 115px!important;
				}
				td.line {
				font-size: 0.65em!important;
				}
				td.price-para {
					font-size: 0.8em;
					line-height: 1.9em;
					padding: 0 0px 0 0px;
				}
				td.price {
						line-height: 25px!important;
					}
					td.l-bottom {
						height: 20px!important;
					}
				table.ban2 {
					background: url(https://zapolskiy.moscow/assets/images/mail/bottom.jpg);
					background-size: cover;
					height:280px!important;
				}
				td.sub-ht {
					font-size: 1.5em!important;
				}
				td.Divider.Line {
						border-width: 1px!important;
					}
					table.about-text {
						text-align: center!important;
						margin: 0 auto;
						width: 100%;
					}
					td.sub-img {
						margin: 0 auto!important;
						text-align: center;
						display: inline-block;
					}
					table.serve {
						text-align: center!important;
						    width: 100%;

					}
					/*-- w3layouts --*/
					/*-- agileits --*/
					table.serve-gride {
						text-align: center!important;
						width: 100%!important;
						padding: 0 1em!important;
					}
					td.team-inner {
						text-align: center!important;
						padding: 0 3em!important;
						}
						td.pro-inner {
							padding: 0 2em!important;
						}
						td.sub-tittle {
						text-align: center!important;
					}
					td.serve-text {
						text-align: center!important;
					}
					table.icon {
						width: 100%!important;
					}
					td.scale-center-both.first img {
						text-align: center!important;
						margin: 0 auto;
					}
					td.sub-tittle.two {
						text-align:left!important;
					}
					td.sub-tittle.two1 {
						text-align:right!important;
					}
				 }
			 /*-- w3layouts --*/
	/*-- agileits --*/
	        @media only screen and (max-width:667px){

	            /*------ top header ------ */
	            .header-bg{width: 280px !important; height: 10px !important;}
	            .top-header-left{width: 260px !important; text-align: center !important;}
	            .top-header-right{width: 260px !important;}
	            .main-header{line-height: 28px !important; text-align: center !important;}
	            .main-subheader{line-height: 28px !important; text-align: center !important;}

	            /*------- header ----------*/
	            .logo{width: 260px !important;}
	            .nav{width: 260px !important;}

	            /*----- --features ---------*/
	            .feature{width: 260px !important;}
	            .feature-middle{width: 222px !important; text-align: center !important;}
	            .feature-img{width: 260px !important; height: auto !important;}


	            .container{width: 560px !important;}
	            .container-middle{width: 260px !important;}

	            .mainContent {
						width: 399px !important;
					}
	            .main-image{width: 222px !important; height: auto !important;}
	            .banner{width: 222px !important; height: auto !important;}
	            /*------ sections ---------*/
	            .section-item{width: 222px !important;}
	            .section-img{width: 222px !important; height: auto !important;}
	            /*------- prefooter ------*/
	            .prefooter-header{padding: 0 10px !important;line-height: 28px !important;}
	            .prefooter-subheader{padding: 0 10px !important; line-height: 28px !important;}
	            /*------- footer ------*/
	            .top-bottom-bg{width: 260px !important; height: auto !important;}
				table {
					  width: 100% !important;
				}
				.img-responsive{
					width:100%;
				}
				  .gallery-img a img {
					height: 134px !important;
				}
				.gallery-img1 a img {
					height: 60px !important;
				}
				.gallery-img2 a img {
					height: 60px !important;
				}
							span {
						   0.7em!important;
						}
						a.log {
							font-size: 2.7em!important;
						}
							a.nav {
							font-size: 0.9em!important;
						}
					table.ban {
						width: 100%!important;
						    height: 375px!important;
					}
					td.price {
						font-size: 1.8em!important;
					}
					td.top-text {
						height: 22px;
					}
				td.h-title {
					font-size:1.8em!important;
				}
				a.learn {
					padding: 9px 12px!important;
					width: 115px!important;
				}
				td.line {
				font-size: 0.65em!important;
				}
				td.price-para {
					font-size: 0.8em;
					line-height: 1.9em;
					padding: 0 0px 0 0px;
				}
				td.price {
						line-height: 25px!important;
					}
					td.l-bottom {
						height: 20px!important;
					}
				table.ban2 {
					background: url(https://zapolskiy.moscow/assets/images/mail/bottom.jpg);
					background-size: cover;
					height:280px!important;
				}
				td.sub-ht {
					font-size: 1.5em!important;
				}
				td.Divider.Line {
						border-width: 1px!important;
					}
				table.banner-bottom-left-sub {
						width: 61%!important;
						height: 25%!important;
					}
					td.sub-tittle.two,td.team{
					text-align: center!important;
				}
				td.t-img {
					text-align: center!important;
					width: 97%!important;
				}
				table.top-icons {
						width: 36%!important;
						text-align: center!important;
						margin: 0 11em!important;
					}
					table.top-icons.two {
						margin: 0!important;
					}
					td.sub-tittle.two1 {
					text-align: center!important;
				}
				table.footer-left {
					text-align: left;
				}
				td.img-text {
					text-align: center!important;
				}
	        }

			  @media only screen and (max-width:600px){

	        	/*------ top header ------ */
	            .header-bg{width: 280px !important; height: 10px !important;}
	            .top-header-left{width: 260px !important; text-align: center !important;}
	            .top-header-right{width: 260px !important;}
	            .main-header{line-height: 28px !important; text-align: center !important;}
	            .main-subheader{line-height: 28px !important; text-align: center !important;}

	            /*------- header ----------*/
	            .logo{width: 260px !important;}
	            .nav{width: 260px !important;}

	            /*----- --features ---------*/
	            .feature{width: 260px !important;}
	            .feature-middle{width: 222px !important; text-align: center !important;}
	            .feature-img{width: 260px !important; height: auto !important;}


	            .container{width: 560px !important;}
	            .container-middle{width: 260px !important;}
	            .mainContent{width: 222px !important;}

	            .main-image{width: 222px !important; height: auto !important;}
	            .banner{width: 222px !important; height: auto !important;}
	            /*------ sections ---------*/
	            .section-item{width: 222px !important;}
	            .section-img{width: 222px !important; height: auto !important;}
	            /*------- prefooter ------*/
	            .prefooter-header{padding: 0 10px !important;line-height: 28px !important;}
	            .prefooter-subheader{padding: 0 10px !important; line-height: 28px !important;}
	            /*------- footer ------*/
	            .top-bottom-bg{width: 260px !important; height: auto !important;}
				table {
					  width: 100% !important;
				}
	            .gallery-img a img {
					height: 134px !important;
				}
				.gallery-img1 a img {
					height: 60px !important;
				}
				.gallery-img2 a img {
					height: 60px !important;
				}
							span {
						   0.7em!important;
						}
						a.log {
							font-size: 2.7em!important;
						}
							a.nav {
							font-size: 0.9em!important;
						}
					table.ban {
						width: 100%!important;
						    height: 375px!important;
					}
					td.price {
						font-size: 1.8em!important;
					}
					td.top-text {
						height: 22px;
					}
				td.h-title {
					font-size:1.8em!important;
				}
				a.learn {
					padding: 9px 12px!important;
					width: 115px!important;
				}
				td.line {
				font-size: 0.65em!important;
				}
				td.price-para {
					font-size: 0.8em;
					line-height: 1.9em;
					padding: 0 0px 0 0px;
				}
				td.price {
						line-height: 25px!important;
					}
					td.l-bottom {
						height: 20px!important;
					}
				table.ban2 {
					background: url(https://zapolskiy.moscow/assets/images/mail/bottom.jpg);
					background-size: cover;
					height:280px!important;
				}
				td.sub-ht {
					font-size: 1.5em!important;
				}
				table.banner-bottom-left-sub {
					width: 61%!important;
					height: 25%!important;
				}
				table.member-text {
					text-align: center!important;
				}

			/*-- w3layouts --*/
	/*-- agileits --*/
		    }
			 @media only screen and (max-width:568px){

			   .container{width: 540px !important;}
	            .container-middle{width: 260px !important;}
	            .mainContent{width: 222px !important;}

			   td.Divider.Line {
					border-width: 1px!important;
				}
				a.log img {
					width:16%!important;
				}
				a.nav{
				    text-align: center;
					margin-right:0px!important;
					font-size: 13px!important;
					    padding: 54px 1px!important;
				}
				a.top-move img {
					width: 62%!important;
				}
				td.harvest {
					height: 68px!important;
				}
				table.banner-bottom-left-sub {
					width: 61%!important;
					height: 25%!important;
				}
				td.team-inner {
					text-align: center!important;
					padding: 0 1em!important;
				}
				.mainContent{width: 222px !important;
				}
				table.banner-bottom-left-sub {
					width: 91%!important;
					height: 92%!important;
				}
			 }
			@media only screen and (max-width: 480px){
				.container {
					width: 160px !important;
				}
				.icon {
					width: 70%;
				}
				td.h-t {
					font-size: 1.7em!important;
				}
				table.serve {
					text-align: center!important;
				}
			}
	        @media only screen and (max-width:480px){

	        	/*------ top header ------ */
	            .header-bg{width: 280px !important; height: 10px !important;}
	            .top-header-left{width: 260px !important; text-align: center !important;}
	            .top-header-right{width: 260px !important;}
	            .main-header{line-height: 28px !important; text-align: center !important;}
	            .main-subheader{line-height: 28px !important; text-align: center !important;}

	            /*------- header ----------*/
	            .logo{width: 260px !important;}
	            .nav{width: 260px !important;}

	            /*----- --features ---------*/
	            .feature{width: 260px !important;}
	            .feature-middle{width: 222px !important; text-align: center !important;}
	            .feature-img{width: 260px !important; height: auto !important;}


	            .container{width: 290px !important;}
	            .container-middle{width: 260px !important;}
	            .mainContent{width: 222px !important;}

	            .main-image{width: 222px !important; height: auto !important;}
	            .banner{width: 222px !important; height: auto !important;}
	            /*------ sections ---------*/
	            .section-item{width: 222px !important;}
	            .section-img{width: 222px !important; height: auto !important;}
	            /*------- prefooter ------*/
	            .prefooter-header{padding: 0 10px !important;line-height: 28px !important;}
	            .prefooter-subheader{padding: 0 10px !important; line-height: 28px !important;}
	            /*------- footer ------*/
	            .top-bottom-bg{width: 260px !important; height: auto !important;}
				table {
					  width: 100% !important;
				}
	            .gallery-img a img {
					height: 134px !important;
				}
				.gallery-img1 a img {
					height: 60px !important;
				}
				.gallery-img2 a img {
					height: 60px !important;
				}

						a.log {
							font-size: 2.2em!important;
						}
							a.nav {
							font-size: 0.9em!important;
						}
					table.ban {
						width: 100%!important;
						height: 300px!important;
					}
					td.price {
						font-size: 1.8em!important;
					}
					td.top-text {
						height: 22px;
					}
				td.h-title {
					font-size:1.8em!important;
				}
				a.learn {
					padding: 9px 12px!important;
					width: 115px!important;
				}
				td.line {
				font-size: 0.65em!important;
				}
				td.price-para {
					font-size: 0.8em;
					line-height: 1.9em;
					padding: 0 0px 0 0px;
				}
				td.price {
						line-height: 25px!important;
					}
					td.l-bottom {
						height: 20px!important;
					}
				td.sub-ht {
					font-size: 1.5em!important;
				}
				td.sub-tittle.two {
					text-align: center!important;
				}
				td.team {
						text-align: center!important;
						padding: 0 17px!important;
					}
					td.t-img {
						text-align: center!important;
						width: 97%!important;
					}
					td.team-inner {
					text-align: center!important;
					padding: 0 0em!important;
				}
				.container {
					width: 340px !important;
				}
				table.top-icons {
					width: 36%!important;
					text-align: center!important;
					margin: 0 8em!important;
				}
				table.top-icons.two {
						margin: 0!important;
					}
		    }
			@media only screen and (max-width:414px){
					td.scale-center-both img {
						    height: 372px!important;
							width: 290px!important;
					}

						a.log {
							font-size: 2.2em!important;
						}
							a.nav {
							font-size:0.8em!important;
						}
					table.ban {
						width: 100%!important;
						height: 300px!important;
					}
					td.price {
						font-size: 1.8em!important;
					}
					td.top-text {
						height: 22px;
					}
				td.h-title {
					font-size:1.8em!important;
				}
				td.line {

				}
				a.learn {
					padding:8px 10px!important;
					width:70px!important;
				}
				td.price-para {
					padding:0!important;
					font-size:0.8em0!important;
				}
					td.l-bottom {
						height: 20px!important;
					}
					td.scale-center-both img {
					height: 265px!important;
					width:300px!important;
				}
				table.ban2 {
					background: url(https://zapolskiy.moscow/assets/images/mail/bottom.jpg);
					background-size: cover;
					height:280px!important;
				}
				td.sub-tittle {
					font-size:1.3em!important;
				}
				td.icon-social a img {
					Width: 32px!important;
					height: 32px!important;
					margin: 0 2em;
				}
				a.log img {
					width:16%!important;
				}
				td.img-text {
					font-size: 1.5em!important;
					text-align: center!important;
				}
				td.pro-inner {
					padding: 0 0em!important;
				}
				.container {
					width: 285px !important;
				}
				table.serve-gride {
					text-align: center!important;
					width: 100%!important;
					padding: 0 0em!important;
				}
				table.top-icons {
					width: 36%!important;
					text-align: center!important;
					margin: 0 7em!important;
				}
				table.top-icons.two {
					margin: 0!important;
				}
		    }
		@media only screen and (max-width:384px){
					td.scale-center-both img {
						height: 265px!important;
						width: 290px!important;
					}
					a.nav {
						font-size: 0.7em!important;
						margin: 0!important;
						padding:15px 0!important;
					}
					a.log {
						font-size: 2.2em!important;
					}
						table.ban {
						width: 100%!important;
						height: 245px!important;
					}
					td.price {
						font-size: 1.8em!important;
					}
					td.top-text {
						height: 22px;
					}
					td.line {
						font-size: 0.6em!important;
					}
				td.h-t {
					font-size: 1.7em!important;
				}
					 .gallery-img a img {
					height: 134px !important;
				}
				td.sub-img {
					margin: 0 auto!important;
					text-align: center;
					display: inline-block;
					margin: 0em 8em!important;
				}
				table.banner-bottom-left-sub {
					width: 91%!important;
					height: 10%!important;
				}
				td.gap {
					height: 0;
				}
				td.gap1 {
					height: 13px;
				}

		    }
			@media only screen and (max-width:320px){
					td.scale-center-both img {
						height: 265px!important;
						width: 290px!important;
					}
					a.nav {
						font-size: 0.7em!important;
						margin: 0!important;
						padding:15px 0!important;
					}
					a.log {
						font-size: 2.2em!important;
					}
						table.ban {
						width: 100%!important;
						height: 245px!important;
					}
					td.price {
						font-size: 1.8em!important;
					}
					td.top-text {
						height: 22px;
					}
					td.line {
						font-size: 0.6em!important;
					}
				td.h-t {
					font-size: 1.7em!important;
				}
					 .gallery-img a img {
					height: 134px !important;
				}
				td.sub-img {
					margin: 0 auto!important;
					text-align: center;
					display: inline-block;
					margin: 0em 8em!important;
				}
				table.banner-bottom-left-sub {
					width: 91%!important;
					height: 10%!important;
				}

		    }

	    </style>

	</head>

	<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
		<table class="body" style="width: 100%; text-align: -webkit-center; vertical-align: top; background:#34495e;" border="0" width="100%" bgcolor="#34495e" cellpadding="0" cellspacing="0">
			<tr><td height="60"></td></tr>

	        <tr>
	            <td width="100%" align="center" valign="top">
	                <!-- main content -->
	                <table width="800" border="0" cellpadding="0" cellspacing="0" align="center" class="container top-header-left">

												<!-- banner -->
							<tr>
								<td>
									<table class="ban" width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="FFFFFF" style="background:url(https://zapolskiy.moscow/assets/images/mail/banner.jpg); background-size:cover;" height="600">
										<tbody>
										<tr>
											<td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
												<tbody><tr>
												  <td class="gap" height="35"></td>
												</tr>
												 <!--head_part-->
												 <tbody>

												   <tr>
											 <td class="gap1" height="20"></td>
										</tr>
													<tr>
														<td>
															<table class="menu" style="margin: 0 auto; border-collaps:collaps; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="center" border="0" cellpadding="0" cellspacing="0">

																<tbody><tr>

																  <td class="menu" align="center" style="text-align:left;">

																	<a class="nav" href="https://zapolskiy.moscow/" style="text-align:center;margin-right:12px; font-size:14px;font-family:Open Sans; color: #fff;letter-spacing:1px;text-decoration:none;text-decoration: none;border: 2px solid #fbbc05;padding: 55px 18px;background:#fbbc05;">HOME</a>
																	<a class="nav" href="https://zapolskiy.moscow/#services" style="text-align:center;margin-right:12px; font-size:14px;font-family:Open Sans;color: #ffffff;letter-spacing:1px;text-decoration:none;">УСЛУГИ</a>


																	<a class="nav" href="https://zapolskiy.moscow/#portfolio" style="text-align:center;margin-right:12px; font-size:14px;font-family:Open Sans; color: #ffffff;letter-spacing:1px;text-decoration:none;">РАБОТЫ</a>

																	<a class="nav" href="https://zapolskiy.moscow/#skills" style="text-align:center;margin-right:12px; font-size:14px; font-family:Open Sans;color: #ffffff;letter-spacing:1px;text-decoration:none;">НАВЫКИ</a>
																	<a class="nav" href="https://zapolskiy.moscow/#testimonials" style="text-align:center;margin-right:12px; font-size:14px; font-family:Open Sans;color: #ffffff;letter-spacing:1px;text-decoration:none;">СЕРТИФИКАТЫ</a>

																	<a class="nav" href="https://zapolskiy.moscow/#contact" style="text-align:center;margin-right:12px; font-size:14px;font-family:Open Sans;color: #ffffff;letter-spacing:1px;text-decoration:none;">КОНТАКТЫ</a>

																  </td>

																</tr>
																  <tr>
															  <td height="10"></td>
															</tr>
															</tbody></table>
														</td>
													</tr>

												</tbody>
												</table>
												</td>
											</tr>
									  <!--head_part-->
									<tr>
									<td>
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
												  <tbody>
												 <tr>
													  <td>
														<table  class="b-text" width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="mainContent">
																		<tbody>
																				<tr>
																				   <td class="top-text" height="0"></td>
																				</tr>

																				  <tr align="center">
																				  <tr>
																				   <td class="top-text" height="90"></td>
																				</tr>
																				     <tr align="center">
																								<td><a class="log" href="#" style="color:#fff; text-decoration:none;">
																										<!-- Edit Button Text -->
																										<img src="https://zapolskiy.moscow/assets/images/mail/logo.png" style="display:block;vertical-align:middle;">

																									</a>
																								</td>
																				  </tr>
																				  <tr>
																					<td height="10"></td>
																				</tr>
																				 <tr>
																						<td align="center">
																						  <table class="class-inner" width="1" border="0" align="center" cellpadding="0" cellspacing="0">
																							<tbody><tr>
																							  <td class="Divider Line" style="border-bottom-width: 30px; border-bottom-style: solid; border-bottom-color:#fff;">
																							  </td>
																							</tr>
																						  </tbody></table>
																						</td>
																					</tr>
																				  <tr align="center">
																					  <td><a class="log" href="#" style="color:#fff; font-family:Open Sans;font-size:3em;font-weight:bold;text-transform:uppercase; text-decoration:none;">Ф<span style="color:#46ff00;font-size:0.8em;">РИЛАНСЕР 1С-БИТРИКС</span></a></td>
																				  </tr>
																				  <tr>
																					<td height="5"></td>
																				</tr>
																				  <tr>
																						<td align="center">
																						  <table class="class-inner" width="1" border="0" align="center" cellpadding="0" cellspacing="0">
																							<tbody><tr>
																							  <td class="Divider Line" style="border-bottom-width: 30px; border-bottom-style: solid; border-bottom-color:#fff;">
																							  </td>
																							</tr>
																						  </tbody></table>
																						</td>
																					</tr>
																				<tr align="center">
																					<td class="line"><span style="color:#fff;font-family:Open Sans;font-size:1.5em;font-weight:bold;line-height:1.5em;text-align:center;text-decoration:none;">Могу, умею, решаю ваши задачи: 1С-Битрикс / 890 руб. час</span></td>
																				</tr>
																						<tr><td height="10"></td></tr>
																							<tr>
																								<td  align="center" height="30" style="font-family:Open Sans;font-size:0.9em;color:#FFFFFF;padding:0px 0px;">

																									<!-- Change to your custom URL -->
																									<a href="#" class="top-move" style="display:inline-block;">
																										<!-- Edit Button Text -->
																										<img src="https://zapolskiy.moscow/assets/images/mail/arrow.png" style="display:inline-block;vertical-align:middle;">
																									</a>
																								</td>
																							</tr>

																					</tbody>
																				</table>

																		</td>
																</tr>
														</tbody>
													</table>
											</td>
										</tr>
										<tr>
											<td class="l-bottom" height="60"></td>
										</tr>
								  </tbody></table></td>

							  </tr>

						<!-- navigation -->
						<tr bgcolor="#f7f7f7">
							<td>
								<table class="full container" width="800" style="margin: 0 auto; border-collaps:collaps; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="center" border="0" cellpadding="0" cellspacing="0">
									<tbody>
									<tr>
												<td>
													<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
														<tbody>
																<tr>
																	<td>
																			<table class="about-text" align="left" border="0" cellpadding="0" cellspacing="0" class="scale" width="400">

																			<tbody>
																				<tr>
																					<td class="scale-center-both first" style="padding: 0px 0px 0px 0px;"><a href="#"><img src="https://zapolskiy.moscow/assets/images/template/d7a332411e14769f300879cf8b1d4da6_XL.jpg" width="400" height="300" style="display: block;"></a></td>
																				</tr>

																			</tbody></table>

																			<table class="about-text"  bgcolor="#fff" padding="1em 0;" align="right" border="0" cellpadding="0" cellspacing="0" class="scale" width="400" height="300">

																				<tbody>
																						<tr><td class="harvest" height="30"></td></tr>
																							<tr align="center">
																								<td class="h-t first"  style="font-size:1.8em; color:#333;font-family:Open Sans;">
																									<a href="#" style="color:#333;text-decoration:none;text-transform:uppercase;font-weight:bold;">' . $name . ' вам написал</a>
																								</td>
																							</tr>
																						<tr>
																							<td class="scale-center-both first" style="padding:0em 2.5em;font-size:1em;color:#777;font-family:Open Sans;text-align:center;line-height:1.9em;">
																								' . $user_message . '
																							</td>
																						</tr>

																						<tr align="center">
																									<td class="scale-btn" style="tex-align:center;"><a href="#"><img src="https://zapolskiy.moscow/assets/images/mail/dl.png" width="120" height="40" style="display:inline-block;"></a></td>
																								</tr>
																					<tr><td class="harvest" height="30"></td></tr>
																			</tbody>
																			</table>
																		</td>
																	</tr>

														<!-- Change to your custom URL -->
													</tbody></table>
												</td>
											</tr>
								</tbody></table>
							</td>
						</tr>

						<!-- main-welcome-->
	                	<tr>

		    				<td bgcolor="f7f7f7">
		    					<table width="560" border="0" align="center" cellpadding="0" cellspacing="0" class="mainContent">
								<tr><td height="40"></td></tr>
								<tr>
										<td height="30"></td>
									</tr>
									<tr>
																						<td align="center">
																						  <table class="class-inner" width="1" border="0" align="center" cellpadding="0" cellspacing="0">
																							<tbody><tr>
																							  <td class="Divider Line" style="border-bottom-width: 30px; border-bottom-style: solid; border-bottom-color:#FBBC05;">
																							  </td>
																							</tr>
																						  </tbody></table>
																						</td>
																					</tr>
																					<tr>
										<td height="10"></td>
									</tr>
		    						<tr>
		    							<td class="h-t" align="center" mc:edit="title1" class="main-header" style="color: #333; font-size:2.5em; font-family:Open Sans;font-weight:300;    font-weight: bold;
										text-transform: uppercase;">
		                					ABOUT US
		                				</td>
		                			</tr>
									<tr>
										<td height="10"></td>
									</tr>
									<tr>
																						<td align="center">
																						  <table class="class-inner" width="1" border="0" align="center" cellpadding="0" cellspacing="0">
																							<tbody><tr>
																							  <td class="Divider Line" style="border-bottom-width: 30px; border-bottom-style: solid; border-bottom-color:#FBBC05;">
																							  </td>
																							</tr>
																						  </tbody></table>
																						</td>
																					</tr>
																					<tr>
										<td height="10"></td>
									</tr>
									<tr>
		    							<td class="sub-ht" align="center" mc:edit="title1" class="main-header" style="color: #2C9006; font-size:2em; font-family:Open Sans;font-weight:600; letter-spacing:1px;">
		                						Discover our Secret
		                				</td>
		                			</tr>

		                			<tr>
										<td height="15"></td>
									</tr>
		                			<tr>
		                				<td mc:edit="text1" class="main-subheader" style="color: #777; font-size: 1em;font-family:Open Sans;text-align:center; font-weight: normal; line-height: 2em;">
		                					Fusce sed ligula nec nunc porta dapibus. Ut sapien velit, sollicitudin et lorem sit amet, auctor auctor eros. Proin nunc libero, pulvinar vitae pulvinar id, sollicitu din vitae sem. Sed rhoncus leo sit amet tortor dignissim. Ut sapien velit, sollicitudin et lorem sit amet, auctor. Fusce sed ligula nec nunc porta dapibus.
		                				</td>
		    						</tr>
									<tr>
										<td height="20"></td>
									</tr>
									<tr>
											<td align="center" height="30" style="font-family:Open Sans;font-size:0.9em; color:#FFFFFF;padding:0px 0px;">

													<!-- Change to your custom URL -->
											<a href="#"><img src="https://zapolskiy.moscow/assets/images/mail/btn.png" width="120" height="40" style="display:inline-block;"></a>
												</td>
										</tr>
		    					</table>
		    				</td>
	    				</tr>
						<tr>
					<td bgcolor="f7f7f7" height="80"></td></tr>
							<!--//welcome-->
								<!--/services-->
						       <tr bgcolor="#fff">
									<td>
								      <table class="full container" width="700" style="margin: 0 auto; border-collaps:collaps; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="center" border="0" cellpadding="0" cellspacing="0">
									  <tr>
									  <td height="60"></td></tr>
									   <tr>
																						<td align="center">
																						  <table class="class-inner" width="1" border="0" align="center" cellpadding="0" cellspacing="0">
																							<tbody><tr>
																							  <td class="Divider Line" style="border-bottom-width: 30px; border-bottom-style: solid; border-bottom-color:#FBBC05;">
																							  </td>
																							</tr>
																						  </tbody></table>
																						</td>
																					</tr>
														<tr>
																<td height="10">&nbsp;</td>
															</tr>
														<tr>
															<td class="h-t" align="center" style="font-family:Open Sans; font-size:2.5em;font-weight: bold;text-transform: uppercase; color:#191626; line-height: 25px;"class="editable">
																Our Services
															</td>
																				</tr>
																				<tr>
																					<td height="10">&nbsp;</td>
																				</tr>

																							<tr>
																												<td align="center">
																												  <table class="class-inner" width="1" border="0" align="center" cellpadding="0" cellspacing="0">
																													<tbody><tr>
																													  <td class="Divider Line" style="border-bottom-width: 30px; border-bottom-style: solid; border-bottom-color:#FBBC05;">
																													  </td>
																													</tr>
																												  </tbody></table>
																												</td>
																											</tr>
																<tr>
																	<td height="40">&nbsp;</td>
															   </tr>
									        <tbody>
									           <tr>
												   <td>
													  <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
														<tbody>
														<tr>
															<td>
																<table class="serve-gride" align="left" border="0" cellpadding="0" cellspacing="0" class="scale" width="330">

																	<tbody>
																		<tr>
																		<td align="center" valign="top">

																			<table class="serve" align="left" border="0" cellpadding="0" cellspacing="0" width="30" class="feature mainContent">

																				<tbody>
																				<tr>
																					<td>
																					<table class="icon" align="left" border="0" cellpadding="0" cellspacing="0">
																							<tbody><tr>
																								<td class="sub-img">
																									<img src="https://zapolskiy.moscow/assets/images/mail/s1.png" alt="" height="auto" width="50" style="display:block;">
																								</td>
																							</tr>
																						</tbody>
																					</table>
																					</td>
																				</tr>

																				</tbody>
																			</table>
																	<table align="left" border="0" cellpadding="0" cellspacing="0" width="10" class="feature mainContent">
																	</table>
																		<table class="serve" align="right" border="0" cellpadding="0" cellspacing="0" width="260" class="feature mainContent">

																			<tbody>


																			<tr>
																			  <td class="sub-tittle" style="color:#2C9006; font-size: 1.4em;font-family: Open Sans; text-align:left; font-weight: bold; line-height: 2em;">CULTIVATING NEW CROPS </td>
																		   </tr>

																			<tr>
																				<td class="serve-text" style="padding:0em;text-align:left;font-size:1em;color:#777;font-family: Open Sans;line-height:1.9em;">
																					Lorem Nam libero tempore, cum soluta
																					 cumque nihil impedit quo minus id quod maxime placeat facere irure dolor reprehenderit...
																				</td>
																			</tr><tr>
																				<td align="left" valign="top">&nbsp;</td>
																			</tr>

																		</tbody>
																	</table>
																	</td>
																</tr>
																<tr>
																	<td align="center" valign="top">

																		<table class="serve" align="left" border="0" cellpadding="0" cellspacing="0" width="30" class="feature mainContent">

																				<tbody>
																				<tr>
																					<td>
																						<table class="icon" align="left" border="0" cellpadding="0" cellspacing="0">
																							<tbody><tr>
																								<td class="sub-img">
																									<img src="https://zapolskiy.moscow/assets/images/mail/s2.png" alt="" height="auto" width="50" style="display:block;">
																								</td>
																							</tr>
																						</tbody></table>
																					</td>
																				</tr>

																				</tbody>
																			</table>
																	<table align="left" border="0" cellpadding="0" cellspacing="0" width="10" class="feature mainContent">
																	</table>
																		<table class="serve" align="right" border="0" cellpadding="0" cellspacing="0" width="260" class="feature mainContent">

																			<tbody>


																			<tr>
																			  <td class="sub-tittle" style="color:#2C9006; font-size: 1.4em;font-family: Open Sans; text-align:left; font-weight: bold; line-height: 2em;">FARMERS INCREASE PROFITS!</td>
																		   </tr>

																			<tr>
																				<td class="serve-text" style="padding:0em;text-align:left;font-size:1em;color:#777;font-family: Open Sans;line-height:1.9em;">
																					Lorem Nam libero tempore, cum soluta
																					 cumque nihil impedit quo minus id quod maxime placeat facere irure dolor reprehenderit...
																				</td>
																			</tr><tr>
																				<td align="left" valign="top">&nbsp;</td>
																			</tr>

																		</tbody>
																	</table>
																	</td>
																</tr>

															</tbody>
														</table>
														<table align="left" border="0" cellpadding="0" cellspacing="0" width="20" class="feature mainContent">
														</table>
														<table class="serve-gride" bgcolor="#fff" padding="1em 0;" align="right" border="0" cellpadding="0" cellspacing="0" class="scale" width="330">
															      <tbody>
																		<tr>
																	<td align="center" valign="top">

																			<table class="serve" align="left" border="0" cellpadding="0" cellspacing="0" width="30" class="feature mainContent">

																				<tbody>
																				<tr>
																					<td>
																						<table class="icon" align="left" border="0" cellpadding="0" cellspacing="0">
																							<tbody><tr>
																								<td class="sub-img">
																									<img src="https://zapolskiy.moscow/assets/images/mail/s3.png" alt="" height="auto" width="50" style="display:block;">
																								</td>
																							</tr>
																						</tbody></table>
																					</td>
																				</tr>

																				</tbody>
																			</table>
																	<table align="left" border="0" cellpadding="0" cellspacing="0" width="10" class="feature mainContent">
																	</table>
																		<table class="serve" align="right" border="0" cellpadding="0" cellspacing="0" width="260" class="feature mainContent">

																			<tbody>


																			<tr>
																			  <td class="sub-tittle" style="color:#2C9006; font-size: 1.4em;font-family: Open Sans; text-align:left; font-weight: bold; line-height: 2em;">CULTIVATING NEW CROPS </td>
																		   </tr>

																			<tr>
																				<td class="serve-text" style="padding:0em;text-align:left;font-size:1em;color:#777;font-family: Open Sans;line-height:1.9em;">
																					Lorem Nam libero tempore, cum soluta
																					 cumque nihil impedit quo minus id quod maxime placeat facere irure dolor reprehenderit...
																				</td>
																			</tr><tr>
																				<td align="left" valign="top">&nbsp;</td>
																			</tr>

																		</tbody>
																	</table>
																	</td>
																</tr>
																<tr>
																		<td align="center" valign="top">

																		<table class="serve" align="left" border="0" cellpadding="0" cellspacing="0" width="30" class="feature mainContent">

																				<tbody>
																				<tr>
																					<td>
																						<table class="icon" align="left" border="0" cellpadding="0" cellspacing="0">
																							<tbody><tr>
																								<td class="sub-img">
																									<img src="https://zapolskiy.moscow/assets/images/mail/s1.png" alt="" height="auto" width="50" style="display:block;">
																								</td>
																							</tr>
																						</tbody></table>
																					</td>
																				</tr>

																				</tbody>
																			</table>
																	<table align="left" border="0" cellpadding="0" cellspacing="0" width="10" class="feature mainContent">
																	</table>
																		<table class="serve" align="right" border="0" cellpadding="0" cellspacing="0" width="260" class="feature mainContent">

																			<tbody>


																			<tr>
																			  <td class="sub-tittle" style="color:#2C9006; font-size: 1.4em;font-family: Open Sans; text-align:left; font-weight: bold; line-height: 2em;">FARMERS INCREASE PROFITS! </td>
																		   </tr>

																			<tr>
																				<td class="serve-text" style="padding:0em;text-align:left;font-size:1em;color:#777;font-family: Open Sans;line-height:1.9em;">
																					Lorem Nam libero tempore, cum soluta
																					 cumque nihil impedit quo minus id quod maxime placeat facere irure dolor reprehenderit...
																				</td>
																			</tr><tr>
																				<td align="left" valign="top">&nbsp;</td>
																			</tr>

																		</tbody>
																	</table>
																	</td>
																</tr>

														</tbody>
													</table>
												</td>
											</tr>
								<!-- Change to your custom URL -->
								</tbody></table>
								</td>
							</tr>
				</tbody>
			</table>
			</td>
			<tr bgcolor="#fff"><td height="60"></td></tr>
		</tr>
	      <!--//services-->
					<!--//product-->
						<tr bgcolor="f4f4f4">
							<td contenteditable="false" class="editable">
								<table class="full container" width="600" style="margin: 0 auto; border-collaps:collaps; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="center" border="0" cellpadding="0" cellspacing="0">

									<tbody><tr>
									  <td height="60"> </td>
									</tr>
								 <tr>
																						<td align="center">
																						  <table class="class-inner" width="1" border="0" align="center" cellpadding="0" cellspacing="0">
																							<tbody><tr>
																							  <td class="Divider Line" style="border-bottom-width: 30px; border-bottom-style: solid; border-bottom-color:#FBBC05;">
																							  </td>
																							</tr>
																						  </tbody></table>
																						</td>
																					</tr>
														<tr>
																<td height="10">&nbsp;</td>
															</tr>
														<tr>
															<td class="h-t" align="center" style="font-family:Open Sans; font-size:2.5em;font-weight: bold;text-transform: uppercase; color:#191626; line-height: 25px;"class="editable">
																Our Products
															</td>
																				</tr>
																				<tr>
																					<td height="10">&nbsp;</td>
																				</tr>

																							<tr>
																												<td align="center">
																												  <table class="class-inner" width="1" border="0" align="center" cellpadding="0" cellspacing="0">
																													<tbody><tr>
																													  <td class="Divider Line" style="border-bottom-width: 30px; border-bottom-style: solid; border-bottom-color:#FBBC05;">
																													  </td>
																													</tr>
																												  </tbody></table>
																												</td>
																											</tr>
																<tr>
																	<td height="20">&nbsp;</td>
															   </tr>
									<tr>
									  <td height="40"> </td>
									</tr>

									<tr>
										<td>
											<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
												<tbody><tr>
													<td class="pro-inner">
														<table align="left" border="0" cellpadding="0" cellspacing="0" width="100">

															<tbody><tr>
																<td>
																	<a href="#"><img src="https://zapolskiy.moscow/assets/images/mail/9.jpg" alt=" " width="280" height="250"></a>
																</td>
															</tr>

															<tr><td height="20">&nbsp;</td></tr>


															<tr align="center">
																<td class="sub-tittle two" style="color:#2C9006; font-size: 1.4em;font-family: Open Sans; text-align:center; font-weight: bold;">
																	VOLUPTATIBUS MAIORES
																</td>
															</tr>

															<tr><td height="10">&nbsp;</td></tr>

															<tr align="center">
																<td style="font-size:1em; color:#777; font-family:Open Sans; line-height:1.9em;">Itaque earum rerum hic tenetur a
																	sapiente delectus, ut aut reiciendis voluptatibus maiores alias.</td>
															</tr>

															<tr><td height="20">&nbsp;</td></tr>

															<tr align="center">
																<td>
																	<table align="center" border="0" cellpadding="0" cellspacing="0">

																		<tbody><tr>
																			<td align="center">

																				<!-- Change to your custom URL -->
																					<a href="#"><img src="https://zapolskiy.moscow/assets/images/mail/btn.png" width="120" height="40" style="display:inline-block;"></a>
																			</td>
																		</tr>

																	</tbody></table>
																</td>
															</tr>

														</tbody></table>

														<table align="left" border="0" cellpadding="0" cellspacing="0" width="25" height="10">

															<tbody><tr>
																<td>
																	<table align="center" border="0" cellpadding="0" cellspacing="0" width="1" height="10">
																		<tbody><tr>
																			<td>&nbsp;</td>
																		</tr>
																	</tbody></table>
																</td>
															</tr>

														</tbody></table>

														<table  align="left" border="0" cellpadding="0" cellspacing="0" width="100">

															<tbody><tr>
																<td>
																	<a href="#"><img src="https://zapolskiy.moscow/assets/images/mail/8.jpg" alt=" " width="280" height="250"></a>
																</td>
															</tr>

															<tr><td height="20">&nbsp;</td></tr>

															<tr align="center">
																<td class="sub-tittle two" style="color:#2C9006; font-size: 1.4em;font-family: Open Sans; text-align:center; font-weight: bold;">
																	VOLUPTATIBUS MAIORES
																</td>
															</tr>

															<tr><td height="5">&nbsp;</td></tr>

															<tr align="center">
																<td style="font-size:1em; color:#777; font-family:Open Sans; line-height:1.8em;">Itaque earum rerum hic tenetur a
																	sapiente delectus, ut aut reiciendis voluptatibus maiores alias.</td>
															</tr>

															<tr><td height="20">&nbsp;</td></tr>

															<tr align="center">
																<td>
																	<table align="center" border="0" cellpadding="0" cellspacing="0">

																		<tbody><tr>
																			<td align="center">

																				<!-- Change to your custom URL -->
																					<a href="#"><img src="https://zapolskiy.moscow/assets/images/mail/btn.png" width="120" height="40" style="display:inline-block;"></a>
																			</td>
																		</tr>

																	</tbody></table>
																</td>
															</tr>

														</tbody></table>

													</td>
												</tr>

												<tr>
													<td height="40"></td>
												</tr>


											</tbody></table>
										</td>
									</tr>

									<tr>
									  <td height="60"> </td>
									</tr>

								</tbody></table>
							</td>
						</tr>
							<!-- service -->
						<!-- /team-->
							<tr bgcolor="FFFFFF">
							<td contenteditable="false" class="editable">
								<table class="full container" width="560" style="margin: 0 auto; border-collaps:collaps; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="center" border="0" cellpadding="0" cellspacing="0">
									<tbody>
									<tr>
									  <td height="60"> </td>
									</tr>

									<tr>
										<td align="center">
										  <table class="class-inner" width="1" border="0" align="center" cellpadding="0" cellspacing="0">
												<tbody><tr>
											      <td class="Divider Line" style="border-bottom-width: 30px; border-bottom-style: solid; border-bottom-color:#FBBC05;">
												   </td>
												</tr>
											</tbody></table>
											</td>
											</tr>
									<tr>
									  <td height="20"> </td>
									</tr>
									<tr>
									<td class="h-t" align="center" style="font-family:Open Sans; font-size:2.5em;font-weight: bold;text-transform: uppercase; color:#191626; line-height: 25px;">
											Team
									</td>
									</tr>
									<tr>
									  <td height="20"> </td>
									</tr>
																				<tr>
																						<td align="center">
																						  <table class="class-inner" width="1" border="0" align="center" cellpadding="0" cellspacing="0">
																							<tbody><tr>
																							  <td class="Divider Line" style="border-bottom-width: 30px; border-bottom-style: solid; border-bottom-color:#FBBC05;">
																							  </td>
																							</tr>
																						  </tbody></table>
																						</td>
																					</tr>

									<tr>
									  <td height="40"> </td>
									</tr>

									<tr>
										<td class="team-inner" valign="top">

											<!-- Start Image -->
											<table style="margin: 0 auto; border-collaps:collaps;" class="member-img" align="left" border="0" cellpadding="0" cellspacing="0" width="200">

													<tbody><tr>
													  <td class="team">
														<img src="https://zapolskiy.moscow/assets/images/mail/t1.jpg" alt=" " width="200" height="250">
													  </td>
													</tr>

											</tbody></table>
											<!-- End Image -->

											<table style="margin: 0 auto; border-collaps:collaps;" class="member-sp" align="left" border="0" cellpadding="0" cellspacing="0" width="8">

												<tbody><tr>
												  <td height="20">
													<p style="padding-left: 37px; margin:0;"></p>
												  </td>
												</tr>

											</tbody></table>

											<table style="border-collaps:collaps;" class="member-text" align="left" border="0" cellpadding="0" cellspacing="0" width="300">

												<tbody><tr>
												  <td height="40"></td>
												</tr>

												<tr>

													<!-- Start Name -->
													  <td class="sub-tittle two" style="color:#2C9006; font-size: 1.4em;font-family: Open Sans; text-align:left; font-weight: bold;">
														NAYAR PEACOCK
													</td>
													<!-- End Name -->
												</tr>

												<tr>
												  <td height="10"></td>
												</tr>

												<tr>
												<td class="team" align="left" style="font-family:Open Sans; font-size:1em; color: #777; line-height:1.8em;">
													Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
												  </td>
												</tr>

												<tr>
												  <td height="24"></td>
												</tr>

												<tr>
												 <td>
													<table class="top-icons" style="mso-table-lspace:0pt; mso-table-rspace:0pt; margin: 0 auto; border-collaps:collaps;" align="left" border="0" cellpadding="0" cellspacing="0" width="auto">

															<tbody>
															  <tr>

																<td class="t-img" style="display:block;" valign="top" width="30">
																	<a href="#" style="display:block;">
																		<img src="https://zapolskiy.moscow/assets/images/mail/1.png" alt=" " width="30" height="30" style="border-radius:3px;">
																	</a>
																</td>
																<td width="11">

																</td>
																<td class="t-img" style="display:block" valign="top" width="30">
																	<a href="#" style="display:block; ">
																		<img src="https://zapolskiy.moscow/assets/images/mail/2.png" alt=" " width="30" height="30">
																	</a>
																</td>
																 <td width="11">

																</td>
																<td class="t-img" style="display:block" valign="top" width="30">
																	<a href="#" style="display:block; ">
																		<img src="https://zapolskiy.moscow/assets/images/mail/3.png" alt=" " width="30" height="30">
																	</a>
																</td>
																 <td width="11">

																</td>


															</tr>

													  </tbody></table>
												  </td>
												</tr>

											</tbody></table>

										</td>
									</tr>

									<tr>
									  <td height="40"> </td>
									</tr>

									<tr>
										<td class="team-inner" valign="top">
											<table class="icons"  style="border-collaps:collaps;" class="member-text" align="left" border="0" cellpadding="0" cellspacing="0" width="300">

												<tbody>
												<tr>
												  <td height="40"></td>
												</tr>

												<tr>

													<!-- Start Name -->
													 <td class="sub-tittle two1" style="color:#2C9006; font-size: 1.4em;font-family: Open Sans; text-align:right; font-weight: bold;">
														DANNY WILLIUMSON
													</td>
													<!-- End Name -->
												</tr>

												<tr>
												  <td height="10"></td>
												</tr>

												<tr>
												<td class="team" align="right" style="font-family:Open Sans; font-size:1em; color: #777; line-height:1.8em;">
													Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
												  </td>
												</tr>

												<tr>
												  <td height="24"></td>
												</tr>

												<tr>
												 <td>
													<table class="top-icons" style="mso-table-lspace:0pt; mso-table-rspace:0pt; margin: 0 auto; border-collaps:collaps;" align="right" border="0" cellpadding="0" cellspacing="0" width="auto">

															<tbody>
																	  <tr>

																<td class="t-img" style="display:block;" valign="top" width="30">
																	<a href="#" style="display:block;">
																		<img src="https://zapolskiy.moscow/assets/images/mail/1.png" alt=" " width="30" height="30" style="border-radius:3px;">
																	</a>
																</td>
																<td width="11">

																</td>
																<td class="t-img" style="display:block" valign="top" width="30">
																	<a href="#" style="display:block; ">
																		<img src="https://zapolskiy.moscow/assets/images/mail/2.png" alt=" " width="30" height="30">
																	</a>
																</td>
																 <td width="11">

																</td>
																<td class="t-img" style="display:block" valign="top" width="30">
																	<a href="#" style="display:block; ">
																		<img src="https://zapolskiy.moscow/assets/images/mail/3.png" alt=" " width="30" height="30">
																	</a>
																</td>
																 <td width="11">

																</td>


															</tr>

													  </tbody></table>
												  </td>
												</tr>

											</tbody></table>

											<table style="margin: 0 auto; border-collaps:collaps;" class="member-sp" align="left" border="0" cellpadding="0" cellspacing="0" width="8">

												<tbody><tr>
												  <td height="20">
													<p style="padding-left: 37px; margin:0;"></p>
												  </td>
												</tr>

											</tbody></table>

											<!-- Start Image -->
											<table style="margin: 0 auto; border-collaps:collaps;" class="member-img" align="left" border="0" cellpadding="0" cellspacing="0" width="200">

													<tbody><tr>
													  <td class="team">
														<img src="https://zapolskiy.moscow/assets/images/mail/t2.jpg" alt=" " width="200" height="250">
													  </td>
													</tr>

											</tbody></table>
											<!-- End Image -->

										</td>
									</tr>

									<tr>
									  <td height="60"> </td>
									</tr>

								</tbody></table>
							</td>
						</tr>
					<!-- //team-->
					<!-- works -->
							<tr><td height="70" bgcolor="f4f4f4"></td></tr>
							   <tr>
							   <td bgcolor="f4f4f4">
									<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="mainContent">
									      <tbody>
										  <tr>
																						<td align="center">
																						  <table class="class-inner" width="1" border="0" align="center" cellpadding="0" cellspacing="0">
																							<tbody><tr>
																							  <td class="Divider Line" style="border-bottom-width: 30px; border-bottom-style: solid; border-bottom-color:#FBBC05;">
																							  </td>
																							</tr>
																						  </tbody></table>
																						</td>
																					</tr>
														<tr>
																<td height="10">&nbsp;</td>
															</tr>
														<tr>
															<td class="h-t" align="center" style="font-family:Open Sans; font-size:2.5em;font-weight: bold;text-transform: uppercase; color:#191626; line-height: 25px;"class="editable">
																Portfolio
															</td>
														</tr>
														<tr>
															<td height="10">&nbsp;</td>
														</tr>

																	<tr>
																						<td align="center">
																						  <table class="class-inner" width="1" border="0" align="center" cellpadding="0" cellspacing="0">
																							<tbody><tr>
																							  <td class="Divider Line" style="border-bottom-width: 30px; border-bottom-style: solid; border-bottom-color:#FBBC05;">
																							  </td>
																							</tr>
																						  </tbody></table>
																						</td>
																					</tr>
										<tr>
										    <td height="20">&nbsp;</td>
									   </tr>

										<tr>
											<td height="30"></td>
										</tr>
										<tr width="600">
										   <td align="center">
										   <a href="https://zapolskiy.moscow/#portfolio">
											    <table class="banner-bottom-left" width="320" align="left" border="0" cellpadding="0" cellspacing="0" style="background:url(https://zapolskiy.moscow/assets/images/mail/avsystem24.ru_40.jpg) no-repeat 0px 0px;" height="409">

												<tbody><tr>
													<td>

														<table class="banner-bottom-left-sub" width="250" height="180" border="0" cellpadding="0" cellspacing="0" align="center" style="border:4px solid #fff">

															<tbody>
															<tr><td height="160"></td></tr>

															<tr>
																<td>

																	<table border="0" cellpadding="0" cellspacing="0" align="center">

																		<tbody>
																		<tr>
																			<td class="img-text" style="color:#fff; font-family:Open Sans;font-size:2.3em;font-weight:bold;text-transform:uppercase; text-decoration:none;">A<span style="color:#FBBC05;font-size:0.8em;">vsystem</span></td>
																		</tr>

																	</tbody></table>

																</td>
															</tr>

															<tr><td height="130"></td></tr>

														</tbody>
													</table>

													</td>
												</tr>

											</tbody></table>
											</a>

											<table align="left" border="0" cellpadding="0" cellspacing="0" class="scale" width="2">

												<tbody>


											</tbody>
										  </table>

										     	<table width="270" class="banner-bottom-left" align="right" border="0" cellpadding="0" cellspacing="0">
												 <tbody>
												  <tr>
													<td>
													<a href="https://zapolskiy.moscow/#portfolio">

									              <table class="banner-bottom-left" width="270" align="left" border="0" cellpadding="0" cellspacing="0" style="background:url(https://zapolskiy.moscow/assets/images/mail/umaumi.com_40.jpg) no-repeat 0px 0px;" height="200">

												<tbody>
												    <tr>
													<td>

														<table class="banner-bottom-left-sub" width="200" height="100" border="0" cellpadding="0" cellspacing="0" align="center" style="border:4px solid #fff">

															<tbody>
															<tr><td height="50"></td></tr>
															<tr>
																<td>

																	<table border="0" cellpadding="0" cellspacing="0" align="center">

																		<tbody>
																		<tr>
																			<td class="img-text" style="color:#fff;font-family:Open Sans;font-size:1.5em;font-weight:bold;text-transform:uppercase; text-decoration:none;">U<span style="color:#FBBC05;font-size:0.8em;">maumi</span></td>
																		</tr>

																	</tbody></table>

																</td>
															</tr>

															<tr><td height="50"></td></tr>

														</tbody>
													</table>

													</td>
												</tr>

											</tbody>
										</table>
										</a>

													</td>
												</tr>

												<tr><td height="9"></td></tr>

												<tr>
													<td>
													<table width="270" class="banner-bottom-left" align="right" border="0" cellpadding="0" cellspacing="0">
												 <tbody>
												  <tr>
													<td>
													<a href="https://zapolskiy.moscow/#portfolio">

									           <table class="banner-bottom-left" width="270" align="left" border="0" cellpadding="0" cellspacing="0" style="background:url(https://zapolskiy.moscow/assets/images/mail/comhouse.ru_40.jpg) no-repeat 0px 0px;" height="200">

												<tbody>
												    <tr>
													<td>

														<table class="banner-bottom-left-sub" width="200" height="100" border="0" cellpadding="0" cellspacing="0" align="center" style="border:4px solid #fff">

															<tbody>
															<tr><td height="50"></td></tr>
															<tr>
																<td>

																	<table border="0" cellpadding="0" cellspacing="0" align="center">

																		<tbody>
																		<tr>
																			<td class="img-text" style="color:#fff;font-family:Open Sans;font-size:1.5em;font-weight:bold;text-transform:uppercase; text-decoration:none;">C<span style="color:#FBBC05;font-size:0.8em;">omhouse</span></td>
																		</tr>

																	</tbody></table>

																</td>
															</tr>

															<tr><td height="50"></td></tr>

														</tbody>
													</table>

													</td>
												</tr>

											</tbody>
										</table>
										</a>

													</td>
												</tr>

											</tbody>
										</table>

										</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr><td height="8"></td></tr>
							<tr width="600">
										   <td align="center">
											  <table width="270" class="banner-bottom-left" align="left" border="0" cellpadding="0" cellspacing="0">
												 <tbody>
												  <tr>
													<td>
													<a href="https://zapolskiy.moscow/#portfolio">

									              <table class="banner-bottom-left" width="270" align="left" border="0" cellpadding="0" cellspacing="0" style="background:url(https://zapolskiy.moscow/assets/images/mail/euro-postel.ru_40.jpg) no-repeat 0px 0px;" height="200">

												<tbody>
												    <tr>
													<td>

														<table class="banner-bottom-left-sub" width="200" height="100" border="0" cellpadding="0" cellspacing="0" align="center" style="border:4px solid #fff">

															<tbody>
															<tr><td height="50"></td></tr>
															<tr>
																<td>

																	<table border="0" cellpadding="0" cellspacing="0" align="center">

																		<tbody>
																		<tr>
																			<td class="img-text" style="color:#fff;font-family:Open Sans;font-size:1.5em;font-weight:bold;text-transform:uppercase; text-decoration:none;">E<span style="color:#FBBC05;font-size:0.8em;">uro-postel</span></td>
																		</tr>

																	</tbody></table>

																</td>
															</tr>

															<tr><td height="50"></td></tr>

														</tbody>
													</table>

													</td>
												</tr>

											</tbody>
										</table>
										</a>

													</td>
												</tr>

												<tr><td height="9"></td></tr>

												<tr>
													<td>
													<table width="270" class="banner-bottom-left" align="right" border="0" cellpadding="0" cellspacing="0">
												 <tbody>
												  <tr>
													<td>
													<a href="https://zapolskiy.moscow/#portfolio">

									           <table class="banner-bottom-left" width="270" align="left" border="0" cellpadding="0" cellspacing="0" style="background:url(https://zapolskiy.moscow/assets/images/mail/apelsingroup.ru_40.jpg) no-repeat 0px 0px;" height="200">

												<tbody>
												    <tr>
													<td>

														<table class="banner-bottom-left-sub" width="200" height="100" border="0" cellpadding="0" cellspacing="0" align="center" style="border:4px solid #fff">

															<tbody>
															<tr><td height="50"></td></tr>
															<tr>
																<td>

																	<table border="0" cellpadding="0" cellspacing="0" align="center">

																		<tbody>
																		<tr>
																			<td class="img-text" style="color:#fff;font-family:Open Sans;font-size:1.5em;font-weight:bold;text-transform:uppercase; text-decoration:none;">A<span style="color:#FBBC05;font-size:0.8em;">pelsingroup</span></td>
																		</tr>

																	</tbody></table>

																</td>
															</tr>

															<tr><td height="50"></td></tr>

														</tbody>
													</table>

													</td>
												</tr>

											</tbody>
										</table>
										</a>

													</td>
												</tr>

											</tbody>
										</table>

										</td>
										</tr>
									</table>
										<table align="left" border="0" cellpadding="0" cellspacing="0" class="scale" width="2">

												<tbody>


											</tbody>
										  </table>
										  <a href="https://zapolskiy.moscow/#portfolio">
									  <table class="banner-bottom-left" width="320" align="right" border="0" cellpadding="0" cellspacing="0" style="background:url(https://zapolskiy.moscow/assets/images/mail/tehniksb.ru_40.jpg) no-repeat 0px 0px;" height="409">

												<tbody><tr>
													<td>

														<table class="banner-bottom-left-sub" width="250" height="180" border="0" cellpadding="0" cellspacing="0" align="center" style="border:4px solid #fff">

															<tbody>
															<tr><td height="160"></td></tr>

															<tr>
																<td>

																	<table border="0" cellpadding="0" cellspacing="0" align="center">

																		<tbody>
																		<tr>
																			<td class="img-text" style="color:#fff; font-family:Open Sans;font-size:2.3em;font-weight:bold;text-transform:uppercase; text-decoration:none;">T<span style="color:#FBBC05;font-size:0.8em;">ehniksb</span></td>
																		</tr>

																	</tbody></table>

																</td>
															</tr>

															<tr><td height="130"></td></tr>

														</tbody>
													</table>

													</td>
												</tr>

											</tbody>
											</table>
											</a>
								</td>
							</tr>
							<tr><td height="70" bgcolor="f4f4f4"></td></tr>
							</tbody>
							</table>
							</td>
						</tr>
						<!-- //work-->
							<!-- footer -->

						<tr>
							<td>

								<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#222">

									<tr>
										<td>

											<table class="container-middle" width="600" border="0" cellpadding="0" cellspacing="0" align="center">

												<tr><td height="30"></td></tr>

												<tr>
													<td>

														<table class="footer-left" width="295" border="0" cellpadding="0" cellspacing="0" align="left">

															<tr>
																<td>

																	<table border="0" cellpadding="0" cellspacing="0" align="left">

																		<tr>
																			<td align="left" style="font-size:1.8em;color:#E4A620;font-weight:bold;font-family:Open Sans;line-height:1.8em">
																				ABOUT US
																			</td>
																		</tr>



																		<tr><td height="10"></td></tr>

																		<tr>
																			<td align="left" style="line-height:1.8em;font-size:14px;color:#868484;font-family:Open Sans">
																				Nunc sagittis ac tellus vel fringilla.Nunc sagittis ac tellus vel fringilla. Morbi in facilisis enim vel fringilla. Morbi in facilisis enim vel fringilla.
																			</td>
																		</tr>

																	</table>

																</td>
															</tr>

														</table>
														<table align="left" border="0" cellpadding="0" cellspacing="0" class="scale" width="2">

															<tbody>


															</tbody>
													  </table>
														<table class="footer-left" width="295" border="0" cellpadding="0" cellspacing="0" align="right">

															<tr>
																<td>

																	<table border="0" cellpadding="0" cellspacing="0" align="left">

																		<tr>
																			<td align="left" style="font-size:1.8em;color:#E4A620;font-weight:bold;font-family:Open Sans;line-height:1.8em">
																				SOCIAL MEDIA
																			</td>
																		</tr>


																		<tr><td height="20"></td></tr>
																					<tr>
																								<td style="color: #868484; font-size:14px;font-family:Open Sans; font-weight:400;padding-bottom:10px;"><img src="https://zapolskiy.moscow/assets/images/mail/direction.png" style="display:inline-block;vertical-align:middle;">&nbsp;&nbsp; 248 Queen Street London</td>
																							</tr>
																				   <tr>
																									<td style="color: #fff; font-size:14px;font-family:Open Sans; font-weight:400;"><img src="https://zapolskiy.moscow/assets/images/mail/email.png" style="display:inline-block;vertical-align:middle;">&nbsp;&nbsp;&nbsp;<a style="font-family:Open Sans; color: #FFFFFF; text-decoration: none;" href="mailto:info@example.com">mail@example.com</a></td>

																				   </tr>
																				   <tr><td height="15"></td></tr>
																		<tr>
																			<td>

																				<table border="0" align="left" cellpadding="0" cellspacing="0">

																					<tr>
																						<td align="left">

																							<table class="top-icons two" border="0" align="left" cellpadding="0" cellspacing="0">
																								<tr>
																									<td>

																										<table border="0" align="left" cellpadding="0" cellspacing="0">
																											<tr>
																												<td><a href="#" style="display:block; border:0;"><img src="https://zapolskiy.moscow/assets/images/mail/1.png" alt="" border="0" height="30" width="30"></a></td>
																												<td>&nbsp;&nbsp;</td>
																												<td><a href="#" style="display:block;margin:0 10px; border:0;"><img src="https://zapolskiy.moscow/assets/images/mail/2.png" alt="" border="0" height="30" width="30"></a></td>
																												<td>&nbsp;&nbsp;</td>
																												<td><a href="#" style="display:block; border:0;"><img src="https://zapolskiy.moscow/assets/images/mail/3.png" alt="" border="0" height="30" width="30"></a></td>
																											</tr>
																										</table>

																									</td>
																								</tr>

																							</table>
																						</td>
																					</tr>

																				</table>

																			</td>
																		</tr>

																	</table>

																</td>
															</tr>

														</table>



													</td>
												</tr>

												<tr><td height="30"></td></tr>

											</table>

										</td>
									</tr>

									<tr>
										<td align="center" bgcolor="#111">

											<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="container-middle">

													<tr><td height="30"></td></tr>
												<tr align="center">
													<td style="color:#fff;font-size:14px;font-family:Open Sans;line-height:1.9em;tex-align:center;">
														You are receiving this email because you subscribed to our mailing list.
													</td>
												</tr>
									<tr align="center">
													<td style="color:#fff;font-size:14px;font-family:Open Sans;line-height:2em;">
														<a href="#" style="color:#FBBC05;text-decoration:none;">Click here </a> to <a href="#" style="color:#FBBC05; font-size: 1em;text-decoration:none;"> unsubscribe </a> your email address from this list.
													</td>
												</tr>
									<tr align="center">

										<td style="font-family:Open Sans; font-size:14px; color: #ffffff; line-height: 24px;" class="editable">

															<!-- Edit Copyright Text -->
															 © 2016
												Horticulture. Design by <a href="http://w3layouts.com/" style="color: #FBBC05; font-size: 1em;text-decoration:none;">W3layouts</a>


														</td>
									</tr>
									<tr><td height="20"></td></tr>


												<tr>
													<td height="10" style="font-size: 1px; line-height: 10px;">&nbsp;</td>
												</tr>

											</tbody></table>

										</td>
									</tr>

								</table>

							</td>
						</tr>

					<!-- footer -->

					</table>
	            </td>
	        </tr>

			<tr bgcolor="#34495e"><td height="40">' . $email . '</td></tr>
		</table>

		</td>
	</tr>
	</body>
	</html>
	';


	$to      = 'info@zapolskiy.moscow';
	$subject = 'Клиент горячий';
	$subject = 'Ссылка для загрузки шаблона с сайта zapolskiy.moscow';

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= "Content-type: text/html; charset=UTF-8 \r\n";
	$headers .= 'From: '. $email . "\r\n";
    $headers .= 'Reply-To: '. $email . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){
		$res['sendstatus'] = 'done';
		//Edit your message here
		$res['message'] = 'Ваше сообщение отправлено!';
    }
	else{
		$res['message'] = 'Пожалукйста укажите нормальную почту';
	}
} else {
	$res['message'] = 'Пожалукйста заполните все поля';
}
echo json_encode($res);
?>