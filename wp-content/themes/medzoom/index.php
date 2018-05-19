<?php

get_header(); ?>
	
	</div><!--#head-container-->

	<div class="row" id="news-container">

		<div class="news-content" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/assets/images/gradient.png'); background-repeat:no-repeat;">

			<div class="container">

				<h1 class="red">Keep track of the latest products in the market with our expert reviews and recommendations</h1>

			</div><!--container-->

			<div class="row">

				<div class="container grid" id="post-container">

					<?php if ( have_posts() ) :

						// Start the loop.
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );

						// End the loop.
						endwhile;

					// If no content, include the "No posts found" template.
					else :
						get_template_part( 'content', 'none' );

					endif;
					?>

				</div><!-- container -->

			</div><!-- row -->

			<div class="row">
				<div class="container">

					<?php wpbeginner_numeric_posts_nav(); ?>

				</div>
			</div>

		</div><!-- news-content -->

	</div><!--#news-container -->

<?php get_footer(); ?>
