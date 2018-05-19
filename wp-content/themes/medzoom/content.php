<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	<div class="grid-item col-xs-12 col-sm-6 col-md-4 col-lg-4">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php $author = get_the_author(); ?> 

			<?php if (is_home()) : ?>
				<div class="head-bar <?php the_category_unlinked(' '); ?>"></div>
			<?php endif ?>

			<div id="post-image" class="<?php if ( has_post_thumbnail() ) echo ''; else echo 'nothumb'; ?>" style="background:url('<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } ?>');     background-size: cover;"></div>

			<div class="post-content">

				<header class="entry-header">
					<?php
						if ( is_single() ) :
							the_title( '<h2 class="entry-title">', '</h2>' );
						else :
							the_title( sprintf( '<h4 class="entry-title"><a href="%s" class="blue" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' );
						endif;
					?>
					<p class="sub-post-head <?php the_category_unlinked(' '); ?>">
					<?php if ( is_single() ) :
						echo $author . '&nbsp;&nbsp;|&nbsp;';
					endif ?>
						<?php the_time('m.d.Y', '<p>', '</p>'); ?>&nbsp;&nbsp;|&nbsp;<span class="category-title"><?php the_category_unlinked(' '); ?></span>
					</p>

					<?php if (is_single()) : ?>
						<div class="head-bar <?php the_category_unlinked(' '); ?>"></div>
					<?php endif ?>

				</header><!-- .entry-header -->

				<div class="entry-content">
					<p style="font-weight:700;">
						<?php if ( is_home() ) :
							echo $author . ' - ';
						endif ?>
					</p>
					<?php
						/* translators: %s: Name of current post */
						the_content( sprintf(
							__( 'READ MORE', 'twentyfifteen' ),
							the_title( '<span class="screen-reader-text">', '</span>', false )
						) );

						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						) );
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
				</footer><!-- .entry-footer -->

			</div><!-- post-content -->

		</article><!-- #post-## -->

	</div><!-- grid-item -->
