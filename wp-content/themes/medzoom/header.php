<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fonts/ss-social-regular.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/bootstrap.min.css">
	<?php gravity_form_enqueue_scripts(1,true) ?>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/main.css">
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site container-fluid">

	<div class="row<?php if (is_home()) echo ' news'; else if (is_page(8)) echo ' about'; else if (is_page(15)) echo ' news'; else if (is_single()) echo ' news'; else echo ''; ?>" id="head-container">

		<div class="headerbg <?php if (is_page(6)) echo ''; else echo 'navbg'; ?>">

			<header class="container">

				<nav>

					<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 nopad">

						<a href="<?php echo get_site_url(); ?>" id="logo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" /></a>

					</div><!-- col-lg-2 -->

					<div class="hidden-xs hidden-sm col-md-8 col-lg-8">

						<ul>

							<a class="<?php if (is_page(6)) echo 'active'; ?>" href="<?php echo get_site_url(); ?>">
								<li>HOME</li>
							</a>
							<a class="<?php if (is_page(8)) echo 'active'; ?>"href="<?php echo get_site_url(); ?>/about">
								<li>ABOUT</li>
							</a>
							<!-- blog page function -->
							<a class="<?php if (is_home() || is_single()) echo 'active'; ?>"href="<?php echo get_site_url(); ?>/news">
								<li>NEWS</li>
							</a>
							<a class="<?php if (is_page(15)) echo 'active'; ?>"href="<?php echo get_site_url(); ?>/contact">
								<li>CONTACT</li>
							</a>

						</ul>

					</div><!-- col-lg-8 -->

					<div class="col-xs-6 col-sm-6 hidden-md hidden-lg nopad">

						<a href="#mobile" id="mobile-toggle"><span></span></a>

					</div><!-- hidden-lg -->

					<div id="mobile-nav" class="hidden-md hidden-lg">

						<ul id="mobile">
							<li class="top-bg"></li>
							<a class="<?php if (is_page(6)) echo 'active'; ?>" href="<?php echo get_site_url(); ?>">
								<li>HOME</li>
							</a>
							<a class="<?php if (is_page(8)) echo 'active'; ?>"href="<?php echo get_site_url(); ?>/about">
								<li>ABOUT</li>
							</a>
							<!-- blog page function -->
							<a class="<?php if (is_home() || is_single()) echo 'active'; ?>"href="<?php echo get_site_url(); ?>/news">
								<li>NEWS</li>
							</a>
							<a class="<?php if (is_page(15)) echo 'active'; ?>"href="<?php echo get_site_url(); ?>/contact">
								<li>CONTACT</li>
							</a>

						</ul>

					</div><!-- mobile-nav -->

				</nav>

			</header><!--.container-->

		</div>

	
