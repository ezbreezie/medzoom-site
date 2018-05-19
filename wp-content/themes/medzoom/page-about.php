<?php
/*
Template Name: About
*/
get_header(); ?>
		
		<div id="phone" class="phone hidden-xs col-sm-4 col-md-4 col-md-4-offset col-lg-4 col-lg-4-offset" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/assets/images/phone_bg_cutout.png');">
		</div><!--phone header image-->

		<div class="container about" id="head-content">

			<div class="hidden-xs hidden-sm hidden-md col-lg-1">
				<!-- space -->
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-7 nopad">
				<h1 class="white">Let us help you save time and money so you can worry about what truly matters.</h1>
			</div>
			
			<div class="clearfix"></div>
			<div class="hidden-xs hidden-sm hidden-md col-lg-1">
				<!-- space -->
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-7 nopad">
				<a class="button red white-bg">COMING SOON</a>
			</div>

		</div><!--.container-->

	</div><!--#head-container-->

	<div class="row" id="home-container">

		<div class="home-content about" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/assets/images/gradient.png'); background-repeat:no-repeat;">

			<h2 class="red">Welcome to Medical Zoom</h2>

			<div class="container">

				<p><?php the_field('about_content'); ?></p>

			</div>

		</div><!-- home-content -->

	</div><!--#home-container -->

<?php get_footer(); ?>
