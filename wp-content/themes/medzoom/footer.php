<?php
?>

	<footer class="row">

		<div class="container">

			<p>Stay up to date with Medical Zoom</p>
			<a class="button" data-toggle="modal" data-target="#subModal">SUBSCRIBE NOW</a>
			<br><br><br>
			<a href="https://facebook.com/<?php the_field ('facebook_account', 15)?>" target="_blank"><i class="ss-facebook"></i></a><a href="https://twitter.com/<?php the_field ('twitter_account', 15)?>" target="_blank"><i class="ss-twitter"></i></a>
			<br><br>
			<p><small><small><small>&copy; 2016 Medical Zoom. All Rights Reserved.</small></small></small></p>

		</div><!-- container -->

	</footer>

	<div class="modal fade" id="subModal" role="dialog">
	    <div class="modal-dialog modal-lg">
	      	<div class="modal-content">

		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h3 class="blue">Don't worry we'll keep you updated without spamming your inbox!</h3>

		        <div class="form-pad">
		        	<?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true]'); ?>
		        </div><!-- container -->

	      	</div>
	    </div>
	</div>

</div><!-- container-fluid -->

<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/bootstrap.min.js"></script>
<script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/main.js"></script>

</body>
</html>
