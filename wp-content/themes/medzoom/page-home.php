<?php
/*
Template Name: Home
*/
get_header(); ?>

		<div class="container" id="head-content">

			<h1 class="white">Medical supplies fast, easy and at a price you can afford</h1>
			<a class="button" href="<?php echo get_site_url(); ?>/about">FIND OUT MORE</a>

		</div><!--.container-->

	</div><!--#head-container-->

	<div class="row" id="home-container">

		<div class="home-content" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/assets/images/gradient.png'); background-repeat:no-repeat;">

			<h2 class="red">How Medical Zoom Works</h2>

			<div class="row">

				<div class="hidden-xs container">

					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 step">
						<h3 class="blue">Browse</h3>
						<div class="image" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/assets/images/icon_browse.png');"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 step">
						<h3 class="blue">Compare</h3>
						<div class="image" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/assets/images/icon_compare.png');"></div>
						<p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 step">
						<h3 class="blue">Connect</h3>
						<div class="image" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/assets/images/icon_connect.png');"></div>
						<p>Lorem ipsum, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut incididunt.</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 step">
						<h3 class="blue">Order</h3>
						<div class="image" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/assets/images/icon_order.png');"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
					</div>

				</div>

				<div class="col-xs-12 hidden-sm hidden-md hidden-lg nopad">

					<div class="col-xs-12 step">
						<h3 class="blue">Browse</h3>
						<div class="image" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/assets/images/icon_browse.png');"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut incididunt.</p>
					</div>
					<div class="col-xs-12 step red-bg white">
						<h3>Compare</h3>
						<div class="image" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/assets/images/icon_compare2.png');"></div>
						<p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					</div>
					<div class="col-xs-12 step">
						<h3 class="blue">Connect</h3>
						<div class="image" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/assets/images/icon_connect.png');"></div>
						<p>Lorem ipsum, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
					</div>
					<div class="col-xs-12 step red-bg white">
						<h3>Order</h3>
						<div class="image" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/assets/images/icon_order.png');"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
					</div>

				</div>

			</div><!-- row -->

		</div><!-- home-content -->

	</div><!--#home-container -->

<?php get_footer(); ?>
