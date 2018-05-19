<?php

get_header(); ?>
	
	</div><!--#head-container-->

	<div class="row" id="news-container">

		<div class="news-content" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/assets/images/gradient.png'); background-repeat:no-repeat;">

			<div class="container" id="singlepost">

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() ); ?>

				<div class="container">

					<div class="prev-posts col-xs-6 col-sm-6 col-md-6 col-lg-6"><p><?php previous_post_link('%link', '&lt;&lt; Older entry') ?></p></div>
					<div class="next-posts col-xs-6 col-sm-6 col-md-6 col-lg-6"><p><?php next_post_link('%link', 'Newer entry &gt;&gt;') ?></p></div>

				</div><!-- container -->

				<?php endwhile; ?>

			</div><!--.container-->

		</div><!-- news-content -->

	</div><!--.row-->

<?php get_footer(); ?>
